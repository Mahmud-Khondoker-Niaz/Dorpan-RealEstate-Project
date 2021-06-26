<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class basicsetup extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
 
		 $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		$this->load->model(array('SiteModel'));
		$this->load->model('tank_auth/users');
		
	}

        
       
		
		
	 
		
		
	 
	
	function sitesetup()
	{
		 
		 if ($this->tank_auth->is_logged_in()  && ( $this->tank_auth->get_userlevel() ==9 ) ) {
			 
			 
			 $data = $this->SiteModel->getfirstrow('sitesetup','*', array('ID >'=>0), 'ID DESC', 1,0);
			
			
			 
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['user_name']	= $this->tank_auth->get_username();
			$data['user_level']	= $this->tank_auth->get_userlevel();
			$data['message']	= '&nbsp;';
		   
		  	
		    
			  $data['Menusection'] = $this->SiteModel->getlist('menusection','MenuSectionID as ID, Caption as Name', array('MenuSectionID  >' =>0),'MenuSectionID DESC', 100, 0);  	
				 
			
		   
		   if ($message = $this->session->flashdata('message')) {
			 		     $data['message']	= $message;
			 			  }	 
			  
			  $data['menu']	= 2;
		    $this->load->view('head', $data);
			$this->load->view('basicsetup/sitesetup');
			$this->load->view('foot');				
			
		   
		}
		
		elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/siteadmin/send_again/');

		} 
		
		
		   
		
	}
	
	
	function sitesetupedit()
	{
		 
		 if ($this->tank_auth->is_logged_in()  && ( $this->tank_auth->get_userlevel() ==9 ) ) {
			 
			if(!isset($_POST) || empty($_POST)) { 
			 $data = $this->SiteModel->getfirstrow('sitesetup','*', array('ID >'=>0), 'ID DESC', 1,0);
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
				 
			 $this->SiteModel->update('sitesetup',array('ID >'=>0), $data);
			 $msg = 'Updated Successfully'; 
			$id = $this->SiteModel->getcolumn('sitesetup','ID', array('ID >'=>0), 'ID DESC', 1,0);			
			 
			 $this->savesiteinfo($id);	
			 $this->_show_msg($msg, 'sitesetup');
			}
			
			
		  
		  
		  
		  
		  
		  
		  
		  
		  
		      
		  $data['Menusection'] = $this->SiteModel->getlist('menusection','MenuSectionID as ID, Caption as Name', array('MenuSectionID  >' =>0),'MenuSectionID DESC', 100, 0);  
		  
		  
		  	$data['user_id']	= $this->tank_auth->get_user_id();
			$data['user_name']	= $this->tank_auth->get_username();
			$data['user_level']	= $this->tank_auth->get_userlevel();
			$data['message']	= '&nbsp;';
			$data['menu']	= 2;
		  
		   if ($message = $this->session->flashdata('message')) {
			 		     $data['message']	= $message;
			 			  }	 
			  
			  
			  
			  
			  
		
		    $this->load->view('head', $data);
			$this->load->view('basicsetup/sitesetupedit');
			$this->load->view('foot');				
			
		   
		}
		
		elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/siteadmin/send_again/');

		} 
		
		
		   
		
	}
	
 
  
	
	
	
	
	
	
	
	
	function msg()
	{
		 
		 	$data['message']	= '&nbsp;';
		   
		   if ($message = $this->session->flashdata('message')) {
			 		     $data['message']	= $message;
			 			  }	 
			  
			 $data['user_id']	= $this->tank_auth->get_user_id();
			$data['user_name']	= $this->tank_auth->get_username();
			$data['user_level']	= $this->tank_auth->get_userlevel();
		 
			
		 
			  $data['menu']	= 2;
		    $this->load->view('head', $data);
			$this->load->view('user/msg');
			$this->load->view('foot');				
			
		 
	}
	
	
	
	
	
	function success()
	{   
	
	
	     $data['title'] = ': Successfully registered.';
	  
	     if ($message = $this->session->flashdata('message')) {
			 		     $data['message']	= $message;
			 			  }	 
		 else  {
			   $data['message']	= "";
			 }
		 
		 
		 if ($this->tank_auth->is_logged_in()) {
			 
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['user_name']	= $this->tank_auth->get_username();
			$data['user_level']	= $this->tank_auth->get_userlevel();
			$data['message']	= '&nbsp;';
		   
		  
			   $data['menu']	= 2;
			  
		    $this->load->view('head', $data);
			$this->load->view('user/success');
			$this->load->view('foot');				
			
		   
		}
		
		elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/siteadmin/send_again/');

		} 
		
		else {
			
			 $data['menu']	= 2;
			$this->load->view('head', $data);
			$this->load->view('user/success');
			$this->load->view('foot');				
			
			
			}
		
		   
		
	}
	
	
	
	
	
	
	
	
	function _show_msg($message, $url=null)
	{
		$this->session->set_flashdata('message', '<span style="color:red">'.$message.'</span>');
		//redirect('/siteadmin/');
		
		if($url !=null)
				redirect($url);    
		
		redirect('/basicsetup/district');    
		
	}
	
	function _show_general($message)
	{
		$this->session->set_flashdata('message', $message);
		//redirect('/siteadmin/');
		
		redirect('/basicsetup/msg');   //lokman
	}
	
	 	 
 
	
		 
	 
	/**
	 * edit user on the site
	 *
	 * 
	 */
	function edit($id)
	{
		if (!$this->tank_auth->is_logged_in()) {								// not logged in or not activated
			redirect('/siteadmin/login/');

		} 
		
		
		
		else 
		
		{
		 
		  $userinfo = $this->users->getuserByid($id);
		  
		if( ( $this->tank_auth->get_user_id()==$id ) || $this->tank_auth->get_userlevel() == 9 /* || user_level 6 allowed $id */ ) {
				
				
			
		 
	  
			 $data['user_id']	= $this->tank_auth->get_user_id();
			$data['user_name']	= $this->tank_auth->get_username();
			$data['user_level']	= $this->tank_auth->get_userlevel();
			$data['message']	= '&nbsp;';
			
			
				//username  email password confirm_password  banned  activated
			
			$data['username']	= $userinfo->username;
			$data['email']	= $userinfo->email;
			$data['banned']	= $userinfo->banned;
			$data['activated']	= $userinfo->activated;
			 $data['id']	= $userinfo->id;
			
			 
		 
			   $data['prioritylist'] = $this->SiteModel->getlist('category','CategoryID as ID, CategoryName as Name', array('CategoryID  >' =>0),'CategoryID DESC', 100, 0);
			
			 $data['menu']	= 2;
			
			$this->load->view('head', $data);
			$this->load->view('auth/register_form_edit');
			$this->load->view('foot');
			
			
				
				}
		  
			
			
			else {
				
				$this-> _show_general('Wrong Request');
				
				}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		 
		}
	}


function save()
	{
		if (!$this->tank_auth->is_logged_in()) {								// not logged in or not activated
			redirect('/siteadmin/login/');

		} 
		
		
		
		else 
		
		{
		 
		   $data = $_POST;
		 $id = $_POST['id'];
		 
		  $userinfo = $this->users->getuserByid($id);
			
		 
		 if( ( $this->tank_auth->get_user_id()==$id ) || $this->tank_auth->get_userlevel() == 9 /* || user_level 6 allowed $id */ ) 
		  
		  {
		  
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length['.$this->config->item('username_min_length', 'tank_auth').']|max_length['.$this->config->item('username_max_length', 'tank_auth').']|alpha_dash');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
		 
			 
			$this->form_validation->set_rules('banned', 'Banned?', 'trim|required|xss_clean');
			 
			
			$data['errors'] = array();

			 

			if ($this->form_validation->run()) {								// validation ok
				
				 
			 
				 
				 
				if (!is_null($datares = $this->tank_auth->edit_user(
						 $_POST['username'],
						 $_POST['email'],
						 ($this->tank_auth->get_userlevel() == 9) ? $_POST['banned'] : $userinfo->banned,
						  $id 
					       ))) {									// success
                      
					 
					  
					$data['site_name'] = $this->config->item('website_name', 'tank_auth');

					
					$this->saveImages($id);
				 

						//$this->_show_message($this->lang->line('auth_message_registration_completed_2').' '.anchor('/siteadmin/login/', 'Login'));
						 $this->_show_msg($this->lang->line('auth_message_success_edit'));

					 
				} else {
					
					 
					$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
				}
			}
		 
		 
		 
			 
		 	
			
			 $data['user_id']	= $this->tank_auth->get_user_id();
		    $data['user_name']	= $this->tank_auth->get_username();;
			$data['user_level']	= $this->tank_auth->get_userlevel();
			$data['message']	= '&nbsp;';
			
			   $data['prioritylist'] = $this->SiteModel->getlist('category','CategoryID as ID, CategoryName as Name', array('CategoryID  >' =>0),'CategoryID DESC', 100, 0);
		
			 $data['menu']	= 2;
			$this->load->view('head', $data);
			$this->load->view('auth/register_form_edit');
			$this->load->view('foot');
			
		
		 
		  }
		 
		 
		  else{
			
			$this-> _show_general('Wrong Request');
			
			  }
		 
		 
		 
		 
		 
		 
		 
		
		}
	}





















	
	
	
	function initializeUpload($uploadDir = null)

	{

		$config['upload_path'] = $uploadDir;

		$config['allowed_types'] = 'gif|jpg|jpeg|png|ico';

		$config['max_size'] = '0';

		

		/*$config['max_width'] = '1600';

		$config['max_height'] = '1200';*/

		

		$this->load->library('upload', $config);

		$this->upload->initialize($config);

	}

	

	

	

	/*

	Image handleing starts

	*/

	

	function saveImages($member_id)

	{
		
		
        $uploadDir = "assets/records/user";

		

				if( !file_exists($uploadDir) || !is_dir($uploadDir))

		

		mkdir("$uploadDir");

				

		$uploadDir = "./assets/records/user";

		$imageDirectoryUrl = "assets/records/user/";

		 
		$imageInfo = array();

		

		$this->initializeUpload($uploadDir);

		 

		if($this->upload->do_upload("image"))

		{

			$imageInfo['image'] = "$imageDirectoryUrl".$this->renamepdfFile("$member_id"."_1");

			 
		}
 
		

		

		if($this->upload->do_upload("image"))

		{

			$imageInfo['Thumbimage'] = "$imageDirectoryUrl".$this->renameUploadedFile("$member_id"."_2");

			

			

		}

		
 

		if(sizeof($imageInfo) > 0)

		{

			 $this->SiteModel->update('users',array('id'=>$member_id),$imageInfo);

			//$this->edit_image($imageInfo);

		}

	}

	

	

	
function savesiteinfo($member_id)

	{
		
		
        $uploadDir = "records/sitesetup";

		

				if( !file_exists($uploadDir) || !is_dir($uploadDir))

		

		mkdir("$uploadDir");

				

		$uploadDir = "./records/sitesetup";

		$imageDirectoryUrl = "records/sitesetup/";

		 
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

	









function renameUploadedFile($newName)

	{

		$this->load->library('image_lib');

		$uploadInfo = $this->upload->data();

		$newName = "$newName".$uploadInfo["file_ext"];

		if(file_exists($uploadInfo["file_path"].$newName))

		{

			unlink($uploadInfo["file_path"].$newName);

		}		

		 $config['image_library']  = 'gd2';

		 $config['source_image']=	$uploadInfo['full_path'] ;

		 $config['maintain_ratio'] = FALSE;

		 $config['width']          = 84;

		 $config['height']         = 73;

		

		 $this->image_lib->initialize($config);

		 if ( ! $this->image_lib->resize())

		 {

		  return $this->_errors = $this->image_lib->display_errors('<div class="message error"><p>', '</p></div>');

		 }

		rename($uploadInfo["full_path"], $uploadInfo["file_path"].$newName);

		return $newName;

	}

 
	
function email_ajax(){
	
	
	 
	   $q = strtolower($_GET["q"]);
	  if (!$q) return;
	if (  $this->tank_auth->is_logged_in()) {			 
	
	  $data["Visit"]  =$this->SiteModel->getlist('users','email', array('email Like' =>'%'.$q.'%'),'id DESC', 1000, 0);	
	    
	   }
	
	 
			
	   
			
		  foreach( $data["Visit"] as $row){
			$email = $row['email'];  
	 	echo "$email \n";
		  }
		 
	
	
	}	
	


function dropdown($array){
	$dropdownlist = array();
	  
	  $dropdownlist[''] = 'Select';
	  foreach($array as $row)
	  {
		  $dropdownlist[$row['ID']]=$row['Name'];
		  }
	 
	return $dropdownlist;
	
	}
	
	
	
	
	
function email_check($email){
	
	$emailfromusers  = $this->SiteModel->getfirstrow('users','id', array('email' => $email ),'id DESC', 1, 0);	
	
	
	if(count($emailfromusers) > 0)
	{
				$userid  = $this->SiteModel->getfirstrow('representative','UserID', array('UserID' =>$emailfromusers['id']), 'RepresentativeID DESC', 1, 0);	
				 
				  
								 if (count($userid) > 0)
							  {
							   $this->form_validation->set_message('email_check', 'He/She is already a representative.');
							  
							   return false;
							  }
							  else{
								
							   return true;
								 }	 
	}
	
	 
	else {
		$this->form_validation->set_message('email_check', 'This email ID is not available.');
  
   return false;
		}
	
  
	 
	}
	
	
	
	
	
	 
	
function email_checkwithid($email, $id){
	
	$emailfromusers  = $this->SiteModel->getfirstrow('users','id', array('email' => $email ),'id DESC', 1, 0);	
	
	
	if(count($emailfromusers) > 0)
	{
				$userid  = $this->SiteModel->getfirstrow('representative','UserID,RepresentativeID', array('UserID' =>$emailfromusers['id'], 'RepresentativeID !=' => $id), 'RepresentativeID DESC', 1, 0);	
				 
				  
								 if (count($userid) > 0)
							  {
							   $this->form_validation->set_message('email_checkwithid', 'He/She is already a representative.');
							  
							   return false;
							  }
							  else{
								 
							   return true;
								 }	 
	}
	
	 
	else {
		$this->form_validation->set_message('email_checkwithid', 'This email ID is not available.');
  
   return false;
		}
	
  
	 
	}	
	
	
	
}
