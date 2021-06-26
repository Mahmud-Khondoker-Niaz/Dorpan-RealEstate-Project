<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


include('basecontroller.php');

class user extends basecontroller{

 
	 

	function index()
	{
	
		 $data['info']	= $this->crdt;	 
		 if ($this->tank_auth->is_logged_in() && ( $this->tank_auth->get_userlevel() ==9 )) {
			 
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['user_name']	= $this->tank_auth->get_username();
			$data['user_level']	= $this->tank_auth->get_userlevel();
			$data['user_image']	= $this->tank_auth->get_image();
			$data['message']	= '';
		   
		   if ($message = $this->session->flashdata('message')) {
			 		     $data['message']	= $message;
			 			  }	 
			   
			    $data['userlist'] = $this->SiteModel->query('SELECT * FROM users');
			   
			   
			      $data['menu']	= 2;
                            $data['submenu']	= 'user_list';
                           
                            $data['codemanage']	= "user_list";
			   
			   
  $data['javascriptfile'] =  array( 
   base_url().'assets/plugins/jquery-1.10.2.min.js',
   base_url().'assets/plugins/jquery-migrate-1.2.1.min.js',
    base_url().'assets/plugins/bootstrap/js/bootstrap.min.js',
    base_url().'assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
   base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
    base_url().'assets/plugins/jquery.blockui.min.js',
    base_url().'assets/plugins/jquery.cokie.min.js',
    base_url().'assets/plugins/uniform/jquery.uniform.min.js',
      
  
	  base_url().'assets/plugins/select2/select2.min.js',
	  base_url().'assets/plugins/data-tables/jquery.dataTables.js',
	  base_url().'assets/plugins/data-tables/DT_bootstrap.js',
	  base_url().'assets/scripts/core/app.js',
	  base_url().'assets/scripts/custom/table-managed.js'
	);
	
	
	
	
	
	
	 
					$data['title'] = "User Register";
	
			   
                        $this->load->view('head', $data);
			$this->load->view('user/index');
		        $this->load->view('foot');				
			 
		   
		}
		
		elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/siteadmin/send_again/');

		} 
		
		
		
                
                
  
         
                
                
                
                
                
                
                
                
		
	}
	
	  
	
	
	
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	
	
	
	
	
	
	function _show_msg($message)
	{
		$this->session->set_flashdata('message', $message);
		//redirect('/siteadmin/');
		
		redirect('/user');   //lokman
	}
	
	function _show_general($message)
	{
		$this->session->set_flashdata('message', $message);
		//redirect('/siteadmin/');
		
		redirect('/user/msg');   //lokman
	}
	
	 
	
	 
	
	
	
			function userdelete()
	{
		 if ( ( $this->tank_auth->get_userlevel() ==9 ) &&  $this->tank_auth->is_logged_in()) {	
						  
						   
						   foreach($_POST["id"] as $row){
							   
						    $this->SiteModel->delete('users',array("id"=>$row, "userlevel !="=>9));	
							
							
						   }
						  //214042319   naples
							 $this->_show_msg('Deleted successfully', 'user');
							 
						 		 
						 	
		 }
 		else
		{
			$this-> _show_general('Wrong Request');
		}		

}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	  
	
	/**
	 * edit user on the site
	 *
	 * 
	 */
	function edit($id)
	{
		$data['info']	= $this->crdt;	 
		
		if (!$this->tank_auth->is_logged_in()) {								// not logged in or not activated
			redirect('/siteadmin/login/');

		} 
		
		
		
		else 
		
		{
		 
		  $userinfo = $this->users->getuserByid($id);
		  
		if( ( $this->tank_auth->get_user_id()==$id ) || $this->tank_auth->get_userlevel() == 9 /* || user_level 6 allowed $id */ ) {
				
				
			
 			$data['message']	= '';
			
			
				//username  email password confirm_password  banned  activated
			
			$data['username']	= $userinfo->username;
			$data['email']	= $userinfo->email;
			$data['banned']	= $userinfo->banned;
			$data['activated']	= $userinfo->activated;
			 $data['id']	= $userinfo->id;
			
			  
			 
			  
                          
                            $data['menu']	= 2;
                            $data['submenu']	= 'user_list';
                           
                            $data['codemanage']	= "user_list";
                          
               
					$data['title'] = "User Register";
	

                          
                          
  $data['javascriptfile'] =  array( 
   base_url().'assets/plugins/jquery-1.10.2.min.js',
   base_url().'assets/plugins/jquery-migrate-1.2.1.min.js',
    base_url().'assets/plugins/bootstrap/js/bootstrap.min.js',
    base_url().'assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
   base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
    base_url().'assets/plugins/jquery.blockui.min.js',
    base_url().'assets/plugins/jquery.cokie.min.js',
    base_url().'assets/plugins/uniform/jquery.uniform.min.js',
      
  
	  base_url().'assets/plugins/jquery-validation/dist/jquery.validate.min.js',
	  base_url().'assets/plugins/jquery-validation/dist/additional-methods.min.js',
	  
	 
	  base_url().'assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js',
	  base_url().'assets/plugins/bootstrap-markdown/lib/markdown.js' ,
	  base_url().'assets/scripts/core/app.js',
	  base_url().'assets/scripts/custom/form-validation.js'
	); 
	
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

					
					//$this->saveImages($id);
				 

						//$this->_show_message($this->lang->line('auth_message_registration_completed_2').' '.anchor('/siteadmin/login/', 'Login'));
						 $this->_show_msg($this->lang->line('auth_message_success_edit'));

					 
				} else {
					
					 
					$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
				}
			}
		 
		 
		 
			 
		 	 
			$data['message']	= '&nbsp;';
			
			
			$data['info']	= $this->crdt;	 
			
			 $data['menu']	= 3;
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

		$config['allowed_types'] = 'gif|jpg|jpeg|png';

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

	

	




	
	
}