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
                public $parentMenuIds;
              
	 
	function __construct()
	{
		parent::__construct();
 
		$this->load->helper(array('url','my_helper','text'));
		
		$this->load->model(array('SiteModel'));
		                   
             $this->data['menu'] = $this->query(0, 2 ); 
             $this->data['siteinfo'] = $this->SiteModel->getfirstrow('sitesetup',"*",array("ID"=>2));
	
	
		     
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
        
        
         
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
