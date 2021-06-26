<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include('basecontroller.php');
class page extends basecontroller {

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
	public function index($id=null,$pns='')
	{
		
   		$this->data['pagedetail'] = $this->SiteModel->getfirstrow('page','*',array('PageID'=>$id));
        
		
	 	
		
			 $this->data['title'] = $this->data['pagedetail']['PageName']." | ". $this->data['siteinfo']["SiteName"];
		 
		 $this->data['description'] = $this->data['pagedetail']['MetaDescription'];
		 
             
		         
		 $this->load->view('common/header.php',$this->data);
		  
		 $this->load->view('page/page.php');
 		  
		 $this->load->view('common/footer.php');
	}
	
	
	
	
	
	public function contact()
	{
		
   		  $this->load->library('form_validation');
		
			$this->data['contactdetail'] = $this->SiteModel->getfirstrow('page','*',array('PageID'=>1));
      
		
		
			 $this->data['title'] = "Contact | ". $this->data['siteinfo']["SiteName"];
		 
		 	 $this->data['description'] = "Contact | ". $this->data['siteinfo']["SiteName"];
		 
             
		
		
		
		
		 
		
		
			
			if(!isset($_POST) || empty($_POST)) {
		 $this->data['contactsname'] = "";
		$this->data['contactsname2'] = "";
		$this->data['contactssubject'] = "";
		$this->data['contactsemail'] = "";
		$this->data['contactsmessage'] = "";
			}
			
			elseif(0) {
				
				$this->data['contactsname'] = $_POST["contactsname"];
			    $this->data['contactsname2'] = $_POST["contactsname2"];
		 
			   $this->data['contactsemail'] = $_POST["contactsemail"];
			   $this->data['contactssubject'] = $_POST["contactssubject"];
			   $this->data['contactsmessage'] = $_POST["contactsmessage"];
				}
			
			
			
			
		
		
		
		
		
		
		$this->form_validation->set_rules('contactsname', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('contactsname2', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('contactsemail', 'Email', 'trim|required|valid_email|xss_clean');
		
		$this->form_validation->set_rules('contactssubject', 'Subject', 'trim|required|xss_clean');
	 	$this->form_validation->set_rules('contactsmessage', 'Message', 'trim|required|xss_clean'); 
	 
		
		
			if ($this->form_validation->run()) {	
		
		  // $this->_send_contact($_POST);
		
		  
			// $this->_show_message("Thanks for you message.", 'message');
		}
		
		
		
		
		
		
		
		
		
		
		
		
		         
		 $this->load->view('common/header.php',$this->data);
		 $this->load->view('page/contact');
		 $this->load->view('common/footer.php');
	
	
	}
	
	
	
	/**
	 * Send email message of given type (activate, forgot_password, etc.)
	 *
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	void
	 */
	function _send_contact(&$data)
	{
 
 
 
     
 
 		 $contact = "contact";

		$this->load->library('email');
        $this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		 
	    $this->email->reply_to($data["contactsemail"], $data["contactsname"]." ".$data["contactsname2"]);
		$this->email->to($this->config->item('webmaster_email', 'tank_auth'));
		
		$this->email->subject(sprintf($data["contactssubject"], $this->config->item('website_name', 'tank_auth')));

 
		 $this->email->message($this->load->view('email/'.$contact.'-html', $data, TRUE));
		// $this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
          
		//$this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
		$this->email->send();

//echo $this->email->print_debugger();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function articledetail($id="", $title = "")
	{
		 	
			  $this->data['detailnews'] =  $this->SiteModel->getfirstrow('news', '*', array('IsActive'=>1,'NewsID'=>$id));
                 
                 if( !isset($this->data['detailnews']["NewsID"]))
                     redirect("");
                 
		 	 $this->data['newsdescription'] =  $this->SiteModel->getfirstrow('newsdetail', 'Detail', array('NewsID'=>$id));
			 
			 
			  $this->data['category'] =  $this->SiteModel->getfirstrow('category', 'Caption, CategoryID', array('CategoryID'=>$this->data['detailnews']["NewsCategoryID"]));
		 
		 
		   $this->data['otherarticle'] =  $this->SiteModel->getlist('news', 'NewsID,NewsTitle,Thumbimage,NewsSummary', array('NewsID !='=>$id,'NewsCategoryID' =>$this->data['detailnews']["NewsCategoryID"], 'IsActive'=>1), 'NewsID DESC', 10, 0); 
		  
		 
		  $this->data['title'] = $this->data['detailnews']['NewsTitle']." | ". $this->data['siteinfo']["SiteName"];
		 
		  $this->data['description'] = $this->data['detailnews']['NewsSummary'];
		 
               
		 
		         
		 $this->load->view('header.php',$this->data);
		 $this->load->view('page/articledetail.php');
		 $this->load->view('footer.php');
	}
	
	 
	 
	 public function articlelist($id="", $number = "",$title="")
	{
		  
		 
		 $this->load->helper('text');
		 $perpage =10;
		
		if(!is_numeric($number))
			{
				$pagetitle = "";
				 $title = $number;
				 $number = 0;
			}
			
		else {
			$pagetitle = $title;
			}	
			
			
		 $this->data['articlelist'] =  $this->SiteModel->getlist('news', 'NewsID,NewsTitle,Date,NewsSummary', array('IsActive'=>1,'ParentCategoryID'=>$id), 'NewsID DESC',$perpage, $number);
		 
		 $totalrecords =  $this->SiteModel->getcolumn('news', 'COUNT(NewsID)', array('IsActive'=>1,'ParentCategoryID'=>$id));     
		   
		   
		 $this->data['category'] =  $this->SiteModel->getcolumn('category', 'Caption', array('CategoryID'=>$id));
		  
		  
		  
		 
		 $this->data['title'] = $this->data['category']." | ". $this->data['siteinfo']["SiteName"];
		 
		 $this->data['description'] = $this->data['category']." | ". $this->data['siteinfo']["SiteName"];
		 
		  
		  
		  
		  
		  
		 if($id !=274) 
		    $this->data['islamicresearch'] = $this->SiteModel->getlist('news','NewsID, NewsTitle',array('IsActive'=>1,'ParentCategoryID'=>274),'NewsID DESC',5,0);
          
		  if($id !=275) 
		  $this->data['tafseerulquran'] = $this->SiteModel->getlist('news','NewsID, NewsTitle',array('IsActive'=>1,'ParentCategoryID'=>275),'NewsID DESC',5,0);
		 
		 if($id !=276) 
		  $this->data['prophethiscompanionlife'] = $this->SiteModel->getlist('news','NewsID, NewsTitle',array('IsActive'=>1,'ParentCategoryID'=>276),'NewsID DESC',5,0);
		 
		  if($id !=277)
		 $this->data['comparativereligion'] = $this->SiteModel->getlist('news','NewsID, NewsTitle',array('IsActive'=>1,'ParentCategoryID'=>277),'NewsID DESC',5,0);
		 
		 
		 if($id !=282)		
		$this->data['otherislamicvideo'] =  $this->SiteModel->query('SELECT newsdetail.Detail, news.NewsTitle FROM newsdetail LEFT JOIN news on newsdetail.NewsID = news.NewsID WHERE news.NewsCategoryID = 282 AND news.IsActive = 1 ORDER BY news.NewsID DESC LIMIT 0,5');
				
	   if($id !=278)	
		$this->data['lifeevent'] = $this->SiteModel->getfirstrow('news','NewsID, NewsTitle, NewsSummary',array('IsActive'=>1,'ParentCategoryID'=>278),'NewsID DESC',1,0);
		
	 
		 if($id !=279)	       
		$this->data['lifevideo'] =  $this->SiteModel->query('SELECT newsdetail.Detail, news.NewsTitle FROM newsdetail LEFT JOIN news on newsdetail.NewsID = news.NewsID WHERE news.NewsCategoryID = 279 AND news.IsActive = 1 ORDER BY news.NewsID DESC LIMIT 0,1');	
		  
		  
		  
		  
		  
		  
		  
		  
		  
		 
		 
		 $this->load->library('pagination');
        $config['base_url'] = site_url('article/page/' . $id );
        $config['total_rows'] =  $totalrecords;
        $config['per_page'] = $perpage; //$perpage;
        $config['num_links'] = 5;
        $config['uri_segment'] =  ($number==0) ? 2 : (($pagetitle=="") ? 3 : 4 );
        $config['first_link'] = true;
        $config['last_link'] = true;
		$config['first_url'] = site_url('article/page/' . $id.'/'.$title );
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
		
		$config['suffix']  = "/".$title;


        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active disabled"><a>';
        $config['cur_tag_close'] = '</a></li>';

        $config['display_prev_link'] = FALSE;
        $this->pagination->initialize($config);
 
		 
		         
		 $this->load->view('header.php',$this->data);
		 $this->load->view('page/articlelist.php');
		 $this->load->view('footer.php');
	}
	
	 
	 
	public function enterprise($id="")
	{
		 	
			      
                 if( $id=="")
                     redirect("");
                 
		 	 
			 
			  
		    $this->data['enterpriseinfo'] =  $this->SiteModel->getfirstrow('enterprise', '*', array('EnterpriseID'=>$id, 'IsActive'=>1), 'EnterpriseID DESC', 1, 0); 
		 
		 $this->data['newslist'] =  $this->SiteModel->getlist('news', '*', array('IsActive'=>1), 'NewsID DESC', 5, 0); 
	 
           $this->data['title'] =  $this->data['enterpriseinfo']["EnterpriseName"]." | ". $this->data['siteinfo']["SiteName"];
		 
		   $this->data['description'] = $this->data['enterpriseinfo']["EnterpriseName"]." | ". $this->data['siteinfo']["SiteName"];
		      
		 
		         
		 $this->load->view('common/header.php',$this->data);
		 $this->load->view('page/enterpriseinfo.php');
		 $this->load->view('common/footer.php');
	}
	
	  
	  
	   
	public function message($id="")
	{
		 	
			      
                 if( $id=="")
                {
		  $this->data['chairmanmessage'] = $this->SiteModel->getfirstrow('page','*',array('PageID'=>21),'PageID DESC',1,0);
		  $this->data['mdmessage'] = $this->SiteModel->getfirstrow('page','*',array('PageID'=>20),'PageID DESC',1,0);
					
					}
                 
		 	 
		else {
			$this->data['message'] = $this->SiteModel->getfirstrow('page','*',array('PageID'=>$id),'PageID DESC',1,0);
			}	 
			  
		   
		 
		 $this->data['newslist'] =  $this->SiteModel->getlist('news', '*', array('IsActive'=>1), 'NewsID DESC', 5, 0); 
	 
           $this->data['title'] =  "Message | ". $this->data['siteinfo']["SiteName"];
		 
		   $this->data['description'] = "Message | ". $this->data['siteinfo']["SiteName"];
		      
		 
		         
		 $this->load->view('common/header.php',$this->data);
		 $this->load->view('page/messageinfo.php');
		 $this->load->view('common/footer.php');
	}
	
	  
	  
	  
 
	  
	
	public function news($id)
	{
		
		
		
		  
                 if( $id=="")
                     redirect("");
                 
		 	 
			 
			  
		 $this->data['news'] =  $this->SiteModel->getfirstrow('news', '*', array('NewsID'=>$id, 'IsActive'=>1), 'NewsID DESC', 1, 0); 
		 
		 $this->data['newsdetail'] =  $this->SiteModel->getfirstrow('newsdetail', '*', array('NewsID'=>$id), 'NewsID DESC', 1, 0); 
		 
		 $this->data['newslist'] =  $this->SiteModel->getlist('news', '*', array('IsActive'=>1,'NewsID !='=>$id), 'NewsID DESC', 5, 0); 
	 
           $this->data['title'] =  $this->data['news']["NewsTitle"]." | ". $this->data['siteinfo']["SiteName"];
		 
		   $this->data['description'] = $this->data['news']["NewsSummary"]." | ". $this->data['siteinfo']["SiteName"];
		      
		 
		  
		   
		
		         
		 $this->load->view('common/header.php',$this->data);
		 $this->load->view('page/newsdetail.php');
		 $this->load->view('common/footer.php');
	}
	
	
	
	
	public function project($id)
	{
		
		          if( $id=="")
                     redirect("");
                 
		 	 
			 
			  
		 $this->data['project'] =  $this->SiteModel->getfirstrow('project', '*', array('ProjectID'=>$id, 'IsActive'=>1), 'ProjectID DESC', 1, 0); 
		 
		  
		 $this->data['projectlist'] =  $this->SiteModel->getlist('project', '*', array('IsActive'=>1,'ProjectID !='=>$id), 'ProjectID DESC', 3, 0); 
	 
           $this->data['title'] =  $this->data['project']["ProjectTitle"]." | ". $this->data['siteinfo']["SiteName"];
		 
		   $this->data['description'] = $this->data['project']["ProjectTitle"]." | ". $this->data['siteinfo']["SiteName"];
		      
		 
		    
		
		         
		 $this->load->view('common/header.php',$this->data);
		 $this->load->view('page/projectdetail.php');
		 $this->load->view('common/footer.php');
	}
	
	
	
	public function projectlist($id)
	{
		
		          if( $id=="")
                     redirect("");
                 
		 	 
			 
			  
		   
		 $this->data['projectlist'] =  $this->SiteModel->getlist('project', '*', array('IsActive'=>1,'ParentCategoryID'=>$id), 'ProjectID DESC', 20, 0); 
	 
           $this->data['title'] =  "Project List | ". $this->data['siteinfo']["SiteName"];
		 
		   $this->data['description'] = "Project List | ". $this->data['siteinfo']["SiteName"];
		      
		 
		 $this->data['newslist'] =  $this->SiteModel->getlist('news', '*', array('IsActive'=>1), 'NewsID DESC', 5, 0);     
		
		         
		 $this->load->view('common/header.php',$this->data);
		 $this->load->view('page/list.php');
		 $this->load->view('common/footer.php');
	}
	
	
	
	public function management($id="")
	{
		 	
			      
                 if( $id=="")
                {
		  $this->data['managementlist'] = $this->SiteModel->getlist('writer','*',array('IsActive'=>1),'Priority ASC',50,0);
		  
					
					}
                 
		 	 
		else {
			$this->data['managementdetail'] = $this->SiteModel->getfirstrow('writer','*',array('WriterID'=>$id),'WriterID DESC',1,0);
			}	 
			  
		   
		 
		 $this->data['newslist'] =  $this->SiteModel->getlist('news', '*', array('IsActive'=>1), 'NewsID DESC', 5, 0); 
	 
           $this->data['title'] =  "Management | ". $this->data['siteinfo']["SiteName"];
		 
		   $this->data['description'] = "Management | ". $this->data['siteinfo']["SiteName"];
		      
		 
		         
		 $this->load->view('common/header.php',$this->data);
		             if( $id=="")
     
		 $this->load->view('page/management.php');
		 else
		 $this->load->view('page/managementdetail.php');
		 
		 $this->load->view('common/footer.php');
	}
	
	  
	  
	
	
	
	
	
	
function _recorddate($date, $id)
 { }	


	
	
	
	
	 
	
	
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */