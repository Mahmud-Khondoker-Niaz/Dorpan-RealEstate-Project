<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include('basecontroller.php');

class sitesetup extends basecontroller{


 
        
     function view($id)
	{   
	$this->load->view('menusection/view');
	}
         
        
        
       
        
        function index($id="")
	{
		 
               
           if($id=="")    { redirect("home");}
                
		 if ($this->tank_auth->is_logged_in() && ( $this->tank_auth->get_userlevel()==9 )) {
			 
			 
			  $data = $this->SiteModel->getfirstrow('sitesetup','*', array('ID'=>$id), 'ID DESC', 1,0);
			
			
			$data['info']	= $this->crdt;
			               
                        $data['message']	= '';
		   
		   if ($message = $this->session->flashdata('message')) {
			 		     $data['message']	= $message;
			 			  }	 
			    
					   		 $data['menu']	= 2;
							 $data['title']	= "Site Setup";
                             $data['submenu']	= 'sitesetup_list';
                             $data['codemanage']	= "sitesetup_list";
                              $data["nestedsitesetup"] = $id;
                              
                              
			    
			
			   
   $data['javascriptfile'] =  array( 
   base_url().'assets/plugins/jquery-1.10.2.min.js',
   base_url().'assets/plugins/jquery-migrate-1.2.1.min.js',
   base_url().'assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js',
    base_url().'assets/plugins/bootstrap/js/bootstrap.min.js',
    base_url().'assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
   base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
    base_url().'assets/plugins/jquery.blockui.min.js',
    base_url().'assets/plugins/jquery.cokie.min.js',
    base_url().'assets/plugins/uniform/jquery.uniform.min.js',
      
   
	  base_url().'assets/scripts/core/app.js' 
	);
			
	 
			
		    $this->load->view('head', $data);
                    $this->load->view('sitesetup/index');
			 
			 $this->load->view('foot');				
			
		   
		}
		
		elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/siteadmin/send_again/');

		} 
		
		
		   
		
	}
	
	     

 
  
 
 
 
  function sitesetupedit($id)
	{
		 
               
               
                
		 if ($this->tank_auth->is_logged_in() && ( $this->tank_auth->get_userlevel()==9 )) {
			   
			   
			 if(!isset($_POST) || empty($_POST)) { 
			 $data = $this->SiteModel->getfirstrow('sitesetup','*', array('ID'=>$id), 'ID DESC', 1,0);
			}
			
			 
			 
			 else
			 {  
			$data = $_POST;
			 }
			   
			   
			   
			   
			   
			   
			   
		    $this->form_validation->set_rules('SiteName', 'Site Name', 'trim|xss_clean');
			$this->form_validation->set_rules('HomePageTitle', 'HomePage Title', 'trim|xss_clean'); 
			$this->form_validation->set_rules('MetaTag', 'MetaTag', 'trim|xss_clean'); 
			$this->form_validation->set_rules('MetaDescription', 'MetaDescription', 'trim|xss_clean'); 
			$this->form_validation->set_rules('GoogleAnalytics', 'GoogleAnalytics', 'trim|xss_clean'); 
			
			
			if ($this->form_validation->run()) {	
			
			 
			 unset($data['Submit']);
				 
			 $this->SiteModel->update('sitesetup',array('ID'=>$data['ID']), $data);
			 $msg = 'Updated Successfully'; 
			//$id = $this->SiteModel->getcolumn('sitesetup','ID', array('ID'=>$data['ID']), 'ID DESC', 1,0);			
			 
			 $this->savesiteinfo($data['ID']);	
			 $this->_show_msg($msg, 'sitesetup/'.$data['ID']);
			}
			
			
			
			
			
			   
			    
			
			 
			$data['info']	= $this->crdt;
			               
                        $data['message']	= '';
		   
		   if ($message = $this->session->flashdata('message')) {
			 		     $data['message']	= $message;
			 			  }	 
			    
					   		 $data['menu']	= 2;
							 $data['title']	= "Site Setup";
                             $data['submenu']	= 'sitesetup_list';
                             $data['codemanage']	= "sitesetup_list";
                              $data["nestedsitesetup"] = $id;
                              
                              
			
			
			   
   $data['javascriptfile'] =  array( 
   base_url().'assets/plugins/jquery-1.10.2.min.js',
   base_url().'assets/plugins/jquery-migrate-1.2.1.min.js',
   base_url().'assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js',
    base_url().'assets/plugins/bootstrap/js/bootstrap.min.js',
    base_url().'assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
   base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
    base_url().'assets/plugins/jquery.blockui.min.js',
    base_url().'assets/plugins/jquery.cokie.min.js',
    base_url().'assets/plugins/uniform/jquery.uniform.min.js',
      
   
	  base_url().'assets/scripts/core/app.js' 
	);
			
	 
			
		    $this->load->view('head', $data);
                    $this->load->view('sitesetup/sitesetupedit');
			 
			 $this->load->view('foot');				
			
		   
		}
		
		elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/siteadmin/send_again/');

		} 
		
		
		   
		
	}
        
	
		
	function _show_msg($message, $url=null)
	{
		$this->session->set_flashdata('message', '<span style="color:red">'.$message.'</span>');
		//redirect('/siteadmin/');
		
		if($url !=null)
				redirect('/'.$url);    
		
		redirect('/record/recordlist');    
		
	}
	
		
	
	   
        function savesiteinfo($member_id, $folder="sitesetup")

	{
		
		
        $uploadDir = $this->config->item('root_dir')."assets/records/".$folder;

		

	
	  if( !file_exists($uploadDir) || !is_dir($uploadDir))
		 
		mkdir("$uploadDir");
 			

		$uploadDir = $this->config->item('root_dir')."assets/records/".$folder;

		$imageDirectoryUrl = "assets/records/".$folder."/";

		 
		$imageInfo = array();

		 
		$this->initializeUpload($uploadDir);

		 

		if($this->upload->do_upload("SiteBanner"))

		{

			$imageInfo['SiteBanner'] = "$imageDirectoryUrl".$this->renamepdfFile("$member_id"."_1");

			 
		}
 
		

		

		if($this->upload->do_upload("Logo"))

		{

			$imageInfo['Logo'] = "$imageDirectoryUrl".$this->renamepdfFile("$member_id"."_2");

			

			

		}
		
		
		
		if($this->upload->do_upload("FavIcon"))

		{

			$imageInfo['FavIcon'] = "$imageDirectoryUrl".$this->renamepdfFile("$member_id"."_3");

			

			

		}
		

		
 

		if(sizeof($imageInfo) > 0)

		{

			 $this->SiteModel->update('sitesetup',array('id'=>$member_id),$imageInfo);

			//$this->edit_image($imageInfo);

		}
		
	 	
		

	}
	
	
	
		function renamepdfFile($newName)

	{

	

		//$this->load->library('image_lib');

		$uploadInfo = $this->upload->data();

		$newName = "$newName".$uploadInfo["file_ext"];

		if(file_exists($uploadInfo["file_path"].$newName))

		{

			unlink($uploadInfo["file_path"].$newName);

		}		

		 

		rename($uploadInfo["full_path"], $uploadInfo["file_path"].$newName);

		return $newName;

	}

	    
	
}