<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class basecontroller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	      
     public $menu;
	 public $data = array();
	 public $menuItems;
	 public $crdt = array();
	 
	 
                public $parentMenuIds;
              
	 
	function __construct()
	{
		parent::__construct();
 
		$this->load->helper(array('url','my_helper','text','form'));
		
		$this->load->model(array('SiteModel'));
                
                
 
		
	  
		
		
		                   
             $this->data['menu'] = $this->query(0, 1 ); 
             $this->data['siteinfo'] = $this->SiteModel->getfirstrow('sitesetup');
	    
			$this->data['contactdetail'] = $this->SiteModel->getfirstrow('page','*',array('PageID'=>1));
      
	   //  $this->data['breakingnews'] =  $this->SiteModel->getlist('news', 'NewsID,NewsTitle', array('IsBreaking' => 1, 'IsActive'=>1), 'NewsID DESC', 5, 0);
                      
                      
	}

	  
        
        
        


public function fetch_menu($q) {        //while ($result = mysql_fetch_array($query)) {
	
	//create an array of parent_menu_ids to search through and find out if the current items have an children
                foreach($menu_items as $parentId)
                {
                  $parentMenuIds[] = $parentId['parent_menu_id'];
                }
	
	
	
	
		$i = 1;
        foreach ($q as $result) {

            $menu_id = $result['MenuID'];
            $menu_name = $result['Caption'];
            $menu_link = $result['MenuLink'];
            $MenuGroup = $result['MenuGroup'];
			 $LinkType = $result['LinkType'];
            //echo 'Menu Id'.$menu_id;
            //echo ' Menu Group'.$MenuGroup.'<br/>';
			$menu_link = (empty($menu_link) || $menu_link==NULL)  ? base_url() : ( $menu_link=='#' ? '#' :  (($LinkType=='InternalLink') ? base_url().$menu_link : $menu_link) );
            $this->menu.="<li class='dropdown'><a   class='dropdown-toggle' role='button' aria-expanded='false' href='{$menu_link}'>{$menu_name}</a>";  // data-toggle='dropdown'
            if ($this->has_child($this->query($menu_id, $MenuGroup))) {
                $this->menu.="<ul class='dropdown-menu' role='menu'>";
                $this->fetch_menu($this->query($menu_id, $MenuGroup));
                $this->menu.="</ul>";
            }
            $this->menu.="</li>";
        }
        return $this->menu;
    }

     
	

    public function query($x, $y) {
        //$query = mysql_query("SELECT * FROM menu WHERE ParentID='$parent_id' and MenuGroup=$groupId"); 

        return $this->SiteModel->getlist('menu', 'MenuID as id,Caption as name,MenuLink,ParentID as parent_menu_id,LinkType', array('MenuGroup' => $y), 'Priority ASC', 100, 0);
    }
        
        
      function _show_message($message, $url='')
	{
		$this->session->set_flashdata('message', $message);
		if( $url=='')
			redirect('/message/');
		else	
			redirect($url);
	}
	
	
	function _show_logout($message)
	{
		$this->session->set_flashdata('message', $message);
		redirect('');
	}
           function _show_msg($message, $url=null)
	{
		$this->session->set_flashdata('message', '<span style="color:red">'.$message.'</span>');
		//redirect('/siteadmin/');
		
		if($url !=null)
				redirect('/'.$url);    
		
		redirect('/record/recordlist');    
		
	}
	
	
	
	   public function croninfo($id,$array){
	
 
		foreach($array as $key=>$row){
			
			 if($key==$id && $row["CronInterval"])
			 {
				 $interval = $row["CronInterval"]*60; //second
				 $passed_interval = floor((time() - strtotime($row["StartPoint"])) / $interval );
				 $statringcode = $row["StartCode"];
				 
             if($id==1 || $id==2)
		     		        $lastone = $this->SiteModel->getcolumn('quranhadith','Code',array("Category"=>$id),'Code DESC',1,0);				 
             else
			 		$lastone = $this->SiteModel->getcolumn('news','Code',array("ParentCategoryID"=>$id),'Code DESC',1,0);				 
			
			$left = (int)ltrim(substr($lastone, 2),'0') - ($passed_interval + (int)ltrim(substr($statringcode, 2),'0'));
			
			///echo $passed_interval.">>".$lastone.">>".$left.">> ";
			 if($left <=5)
			 {
				 
				 $isSent = $this->SiteModel->getlist('emailsend','SectionID',array("SectionID"=>$id,'DATE(EntryDate)'=>date("Y-m-d")),'ID DESC',1,0);
				 
				 if(count($isSent)==0) 				 
				 	$this->_email($this->SiteModel->getcolumn('category','Caption',array("CategoryID"=>$id),'CategoryID DESC',1,0), $left );
				 
			}
			
			$code_number_to_be_sent = $passed_interval + (int)ltrim(substr($statringcode, 2),'0');
			
			return  ($passed_interval < 0) ? substr($statringcode,0,2).sprintf("%06d", ($passed_interval + (int)ltrim(substr($statringcode, 2),'0'))) : -1;	
		     
			 }
			
			}
		return -1;
		}	 
	 
	 
	 
	function _email($section,$left=0){
				
				
				$email = "razu_49@hotmail.com,lokman.edu@gmail.com";		
		$this->load->library('email');
                $this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		 
	        $this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->to($email);
		$this->email->subject("Schedule Job for ".$section);

 
		 $this->email->message($this->load->view('email/schedule.php', array("section"=>$section,"restamount"=>$left), TRUE));
	 
		$this->email->send(); 
						}
	 
	 
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */