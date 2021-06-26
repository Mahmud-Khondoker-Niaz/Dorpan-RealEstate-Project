<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include('basecontroller.php');

class user extends basecontroller{
 
    
	 	function __construct()
	{
		parent::__construct();
 
		
	}
  
	
        function login()
	{ 
		
	 	
		 
		$this->data["assets"] = base_url()."assets/";
		 $this->data['title'] = "Login | ". $this->data['siteinfo']["SiteName"];
		 
		 $this->data['description'] = "Login | ". $this->data['siteinfo']["SiteName"];
		 
	  
            $this->data['login_by_username'] = ($this->config->item('login_by_username', 'tank_auth') AND
                    $this->config->item('use_username', 'tank_auth'));
            $this->data['login_by_email'] = $this->config->item('login_by_email', 'tank_auth');

            $this->form_validation->set_rules('login', 'Login', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
            $this->form_validation->set_rules('remember', 'Remember me', 'integer');

            // Get login for counting attempts to login
            if ($this->config->item('login_count_attempts', 'tank_auth') AND ( $login = $this->input->post('login'))) {
                $login = $this->security->xss_clean($login);
            } else {
                $login = '';
            }

            $this->data['use_recaptcha'] = $this->config->item('use_recaptcha', 'tank_auth');
            if ($this->tank_auth->is_max_login_attempts_exceeded($login)) {

            }
            $this->data['errors'] = array();

            if ($this->form_validation->run()) {       
               
			    if ($this->tank_auth->login( $this->form_validation->set_value('login'), $this->form_validation->set_value('password'), $this->form_validation->set_value('remember'), $this->data['login_by_username'], $this->data['login_by_email'])) 
				
				{       
                      $date_raw =date('Y-m-d H:i:s');
                      $timein =(date('Y-m-d H:i:s', strtotime('- 10 minutes', strtotime($date_raw))));

	             
				 
				 
				 
				 
				 
				 
				 	  
				  
				  

                    redirect('mypage');
                } else {
                    $errors = $this->tank_auth->get_error_message();
                    if (isset($errors['banned'])) {        // banned user
                        $this->_show_message($this->lang->line('auth_message_banned') . ' ' . $errors['banned']);
                    } elseif (isset($errors['not_activated'])) {    // not activated user
                        $this->_show_message($errors['not_activated']);

                        //redirect('/registration/send_again/');
                    } else {             // fail
                        foreach ($errors as $k => $v)
                            $this->data['errors'][$k] = $this->lang->line($v);
                    }
                }
            }



            $this->data['show_captcha'] = FALSE;
            if ($this->tank_auth->is_max_login_attempts_exceeded($login)) {
                $this->data['show_captcha'] = TRUE;
                if ($this->data['use_recaptcha']) {
                    $this->data['recaptcha_html'] = $this->_create_recaptcha();
                } else {
                    $this->data['captcha_html'] = $this->_create_captcha();
                }
            }
        
	 
	 
	  
	 
	 
	 
	 
	 
	 
	 
	 
	 
		$this->load->view('header.php', $this->data);
		$this->load->view('user/login.php');	 
		$this->load->view('footer.php');
	}
        
        
		
		
		
		
		
		
		
		
		
	/**
	 * Logout user
	 *
	 * @return void
	 */
	function logout()
	{
		$this->tank_auth->logout();
		$this->session->sess_create();	
		redirect('');  
              //redirect($_SERVER['HTTP_REFERER']);     
		//$this->_show_logout($this->lang->line('auth_message_logged_out'));
	}
	
		
		
		
		
		
		
		function _show_logout($message)
	{
		$this->session->set_flashdata('message', $message);
		redirect('');
	}

		
 
         	
    function registration()
	{ 
		
			
	 $this->data['title'] = "Registration | ". $this->data['siteinfo']["SiteName"];
		 
		 $this->data['description'] = "Registration | ". $this->data['siteinfo']["SiteName"];
		 
	  	
		
		
		
		if ($this->tank_auth->is_logged_in()) {									// logged in
			redirect('');

		} elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/auth/send_again/');

		} elseif (!$this->config->item('allow_registration', 'tank_auth')) {	// registration is off
			$this->_show_message($this->lang->line('auth_message_registration_disabled'));

		}
		
		
		 else { 
		
		
			$use_username = $this->config->item('use_username', 'tank_auth');
			if ($use_username) {
				$this->form_validation->set_rules('Username', 'Username', 'trim|required|xss_clean|min_length['.$this->config->item('username_min_length', 'tank_auth').']|max_length['.$this->config->item('username_max_length', 'tank_auth').']|alpha_dash');
			}
			$this->form_validation->set_rules('Email', 'Email', 'trim|required|xss_clean|valid_email');
			$this->form_validation->set_rules('Password', 'Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean|matches[Password]');
			$this->form_validation->set_rules('Name', 'First Name', 'trim|required|xss_clean|min_length[4]');
                        $this->form_validation->set_rules('Name2', 'Last Name', 'trim|required|xss_clean|min_length[4]');
			$this->form_validation->set_rules('captcha_id', 'captcha_id', 'trim|required|xss_clean');

			$captcha_registration	= $this->config->item('captcha_registration', 'tank_auth');
			$use_recaptcha			= $this->config->item('use_recaptcha', 'tank_auth');
			if ($captcha_registration) {
				
				
				if ($use_recaptcha) {
		    $this->form_validation->set_rules('recaptcha_response_field', 'Confirmation Code', 'trim|xss_clean|required|callback__check_recaptcha');
								} 
				
				else {
			
		 

			$captcha_id = isset($_POST['captcha_id']) ? $_POST['captcha_id'] : '';
			$this->form_validation->set_rules('captcha', 'Confirmation Code', 'trim|xss_clean|required|callback_check_captcha['.$captcha_id.']');
					
				}
			}
			$this->data['errors'] = array();

			$email_activation = $this->config->item('email_activation', 'tank_auth');
 
			if ($this->form_validation->run()) {							// validation ok
			 
		
				if (!is_null($data = $this->tank_auth->create_user(
						$this->form_validation->set_value('Name'),
                                                 $this->form_validation->set_value('Name2'),
						$use_username ? $this->form_validation->set_value('Username') : '',
						$this->form_validation->set_value('Email'),
						
						$this->form_validation->set_value('Password'),
						$email_activation))) {									// success

					$this->data['site_name'] = $this->config->item('website_name', 'tank_auth');
					
					$data['site_name'] = $this->config->item('website_name', 'tank_auth');
                                        
                                       
					
				$uploadDir = substr($this->config->item('root_dir'), 0, -2)."assets/uploaded/".$data['Username'];
                                
				//$uploadDir = "../desktop/assets/uploaded/".$this->data['Username'];
		
				if( !file_exists($uploadDir) || !is_dir($uploadDir))
		
						mkdir("$uploadDir");			 
							
					
					
					
					
					if ($email_activation) {	 								// send "activate" email
						$this->data['activation_period'] = $this->config->item('email_activation_expire', 'tank_auth') / 3600;
                        
					$data['activation_period'] = $this->config->item('email_activation_expire', 'tank_auth') / 3600;
					
					
						$this->_send_email('activate', $this->form_validation->set_value('Email'), $data);

						unset($this->data['Password']); // Clear password (just for any case)

						 $this->_show_message($this->lang->line('auth_message_registration_completed_1'));

					} else {
						if ($this->config->item('email_account_details', 'tank_auth')) {	// send "welcome" email

							$this->_send_email('welcome', $data['Email'], $data);
						}
						unset($this->data['Password']); // Clear password (just for any case)

						$this->_show_message($this->lang->line('auth_message_registration_completed_2').' '.anchor('/auth/login/', 'Login'));
					}
				} else {
					$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v)	$this->data['errors'][$k] = $this->lang->line($v);
				}
			}
			if ($captcha_registration) {
				if ($use_recaptcha) {
					$this->data['recaptcha_html'] = $this->_create_recaptcha();
				} else {
					$captcha_array = $this->create_captcha();
					
					$this->data['captcha_html'] = $captcha_array['0'];
					$this->data['captcha_id'] = $captcha_array['1'];
				}
			}
			 
			$this->data['use_username'] = $use_username;
			 
			$this->data['captcha_registration'] = $captcha_registration;
			$this->data['use_recaptcha'] = $use_recaptcha;
			
		 
				$this->load->view('header.php', $this->data);
				$this->load->view('user/registration.php');
                 $this->load->view('footer.php');
		 
			
		}
		
		
		
		
		
		
		
		
		
		
		
	 
	
	}
        
		
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
     
		
		
		
		
        
         function profileupdate()
	{ 
	
	 
	 
	 
		if (!$this->tank_auth->is_logged_in()) {								// not logged in or not activated
			redirect('');

		} else {
		
		 $this->data['title'] = "Profile Update | ". $this->data['siteinfo']["SiteName"];	
		 
		$this->data["assets"] = base_url()."assets/";
	    $this->data["message"] = $this->session->flashdata('message');;
		$this->data['info']	= $this->crdt;
	 	
		
		
		
		 
		$this->data['userinfoedit'] = $this->SiteModel->getfirstrow('siteuser', '*', array('SiteuserID' => $this->crdt['user_id']), 'SiteuserID DESC', 1, 0);
		
		if(!isset($_POST) || empty($_POST)) {
			 
			 $this->data['selected_country'] = $this->data['userinfoedit']['Country'];
				
			  $this->data['selected_gender'] = $this->data['userinfoedit']['Gender'];
			$this->data['selected_religion'] = $this->data['userinfoedit']['Religion'];
			$this->data['selected_profession'] = $this->data['userinfoedit']['Profession'];
			 
			 
			
			}
		 
		 else{
			 
			 
			 $this->data['selected_country'] = $_POST['Country'];
			 $this->data['selected_gender'] = $_POST['Gender'];
			 $this->data['selected_religion'] = $_POST['Religion'];
			 $this->data['selected_profession'] = $_POST['Profession'];
			 
		  
			 
			 
			 
			 
			 
			 }
		 
		$this->form_validation->set_rules('Name', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('Name2', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('Country', 'Country', 'trim|required|xss_clean');
		
		$this->form_validation->set_rules('Organization', 'Organization', 'trim|xss_clean');
	 	$this->form_validation->set_rules('Profession', 'Profession', 'trim|xss_clean');
		$this->form_validation->set_rules('AcademicBackground', 'Academic Background', 'trim|xss_clean');
		$this->form_validation->set_rules('Gender', 'Gender', 'trim|xss_clean');
		$this->form_validation->set_rules('Religion', 'Religion', 'trim|xss_clean');
	 
	 	if ($this->form_validation->run()) {	
		
		$this->SiteModel->update('siteuser', array('SiteuserID' => $this->crdt['user_id']), array("Name" => $_POST["Name"], "Name2" => $_POST["Name2"], "Country" => $_POST["Country"], "Organization" => $_POST["Organization"], "Profession" => $_POST["Profession"], "AcademicBackground" => $_POST["AcademicBackground"], "Religion" => $_POST["Religion"], "Gender" => $_POST["Gender"] ));
		
		
		
		
		
		
				 
		
		
		
		
		
			 $this->_show_message("Your Profile has been updated.", 'message');
		}
	 
	 
	 
	 
	 
	 }
	 
	 
	   $this->data['countrylist']  = $this->dropdown($this->SiteModel->getlist('country','CountryName  as ID, CountryName as Name', array('IsActive' =>1),'CountryName ASC', 1000, 0));       
				   $this->data['genderlist']  = 	 array(""=>"Select","Male"=>"Male","Female"=>"Female", "Other"=>"Other");
					 $this->data['religionlist']  = 	 array(""=>"Select","Islam"=>"Islam","Christianity"=>"Christianity","Hinduism"=>"Hinduism","Chinese traditional religion"=>"Chinese traditional religion", "Buddhism"=>"Buddhism", "Other"=>"Other");
					 $this->data['professionlist']  = 	array(""=>"Select","Doctor"=>"Doctor","Engr."=>"Engr.","Lawyer"=>"Lawyer","Nurse"=>"Nurse","Other"=>"Other");	   
					
	  
	 
		$this->load->view('header.php', $this->data);
		$this->load->view('user/profileupdate.php');	
        $this->load->view('footer.php');
		 
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
	 
	 
		
		
		
		
		
		
		
		
          function password()
	{ 
		
		
		
		if ($this->tank_auth->is_logged_in()) {									// logged in
			redirect('');

		} elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/auth/send_again/');

		} else {
		
		
		
		$this->form_validation->set_rules('login', 'Email or login', 'trim|required|xss_clean');

		$this->data['errors'] = array();
			
			if ($this->form_validation->run()) {								// validation ok
				if (!is_null($this->data = $this->tank_auth->forgot_password(
						$this->form_validation->set_value('login')))) {

					$this->data['site_name'] = $this->config->item('website_name', 'tank_auth');

					// Send email with password activation link
					$this->_send_email('forgot_password', $this->data['Email'], $this->data);

					$this->_show_message($this->lang->line('auth_message_new_password_sent'));

				} else {
					$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v)	$this->data['errors'][$k] = $this->lang->line($v);
				}
			}
				
			
			 $this->data['title'] = "Password Retrieve | ". $this->data['siteinfo']["SiteName"];
		 
		 $this->data['description'] = "Password Retrieve | ". $this->data['siteinfo']["SiteName"];
		
                  
	 
		$this->load->view('header.php', $this->data);
		$this->load->view('user/passwordretrieve.php');
        $this->load->view('footer.php');
		
		}
		
		
		
		 
	}
        
        
     
        
        
         function savebanner()
	{ 
	 $this->load->library('session');
	 $info = pathinfo($_FILES['BannerImage']['name']);
	 $ext = $info['extension']; // get the extension of the file
	
	$user_id = $this->crdt['user_id'];
	$username = $this->crdt['username'];
	$newname = $user_id."_".time()."_".$username.".".$ext; 
		
		$uploadDir = $this->config->item('root_dir')."assets/banner";
		if( !file_exists($uploadDir) || !is_dir($uploadDir))
		   mkdir("$uploadDir");


 		$target =  $this->config->item('root_dir').'assets/banner/'.$newname;
 move_uploaded_file( $_FILES['BannerImage']['tmp_name'], $target);

$this->session->set_userdata("bannerImage",base_url().'assets/banner/'.$newname);
 
						 
						 
  

 redirect("blogger/bannerimage");
 
                 
		 
	}
        
		
		
		
		
		 
		
		
		
		
		
		
        
         
    
        
        
         function saveimage()
	{ 
		// requires php5  
	$target = substr($this->config->item('root_dir'),0,-2).'assets/uploaded/'. $this->crdt['username'].'/';
	define('UPLOAD_DIR', $target);
	$img = $_POST['imgBase64'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$uniqid = 	uniqid();
	$file = UPLOAD_DIR . $uniqid . '.png';
	
	$success = file_put_contents($file, $data);
	
	
	
 	if($this->SiteModel->update('siteuser', array('SiteuserID' => $this->crdt['user_id']), array("BannerImage"=>'assets/uploaded/'. $this->crdt['username'].'/'.$uniqid . '.png'))){
                        $this->session->set_userdata(array("bannerImage"=>'assets/uploaded/'. $this->crdt['username'].'/'.$uniqid . '.png'));
  						$this->session->set_userdata(array("user_banner"=>'assets/uploaded/'. $this->crdt['username'].'/'.$uniqid . '.png'));
   
                         }
						 
	
	
	
	
	print $success ? $this->config->item('assets_url').'assets/uploaded/'. $this->crdt['username'].'/'.$uniqid . '.png' : 'failed';
		 
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/**
	 * Send email message of given type (activate, forgot_password, etc.)
	 *
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	void
	 */
	function _send_email($type, $email, &$data)
	{
 
 

		$this->load->library('email');
                $this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		 
	        $this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->to($email);
		$this->email->subject(sprintf($this->lang->line('auth_subject_'.$type), $this->config->item('website_name', 'tank_auth')));

 
		 $this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));
		 $this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
                 $this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));
		$this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
		$this->email->send();

//echo $this->email->print_debugger();
	}

	/**
	 * Create CAPTCHA image to verify user as a human
	 *
	 * @return	string
	 */
	function _create_captcha()
	{
		$this->load->helper('captcha');

		$cap = create_captcha(array(
			'img_path'		=> './'.$this->config->item('captcha_path', 'tank_auth'),
			'img_url'		=> base_url().$this->config->item('captcha_path', 'tank_auth'),
			'font_path'		=> './'.$this->config->item('captcha_fonts_path', 'tank_auth'),
			'font_size'		=> $this->config->item('captcha_font_size', 'tank_auth'),
			'img_width'		=> $this->config->item('captcha_width', 'tank_auth'),
			'img_height'	=> $this->config->item('captcha_height', 'tank_auth'),
			'show_grid'		=> $this->config->item('captcha_grid', 'tank_auth'),
			'expiration'	=> $this->config->item('captcha_expire', 'tank_auth'),
		));

		// Save captcha params in session
		$this->session->set_flashdata(array(
				'captcha_word' => $cap['word'],
				'captcha_time' => $cap['time'],
		));

		return $cap['image'];
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	function create_captcha()
	{
		$this->load->helper('captcha');

		$cap = create_captcha(array(
			'img_path'		=> './'.$this->config->item('captcha_path', 'tank_auth'),
			'img_url'		=> base_url().$this->config->item('captcha_path', 'tank_auth'),
			'font_path'		=> './'.$this->config->item('captcha_fonts_path', 'tank_auth'),
			'font_size'		=> $this->config->item('captcha_font_size', 'tank_auth'),
			'img_width'		=> $this->config->item('captcha_width', 'tank_auth'),
			'img_height'	=> $this->config->item('captcha_height', 'tank_auth'),
			'show_grid'		=> $this->config->item('captcha_grid', 'tank_auth'),
			'expiration'	=> $this->config->item('captcha_expire', 'tank_auth'),
		));

		// Save captcha params in session
		$this->session->set_flashdata(array(
				'captcha_word' => $cap['word'],
				'captcha_time' => $cap['time'],
		));
		$id = $this->SiteModel->insert('captcha',array('captcha_word'=>$cap['word'],'creat_time'=>$cap['time']));
		return array($cap['image'], $id);
	}

	/**
	 * Callback function. Check if CAPTCHA test is passed.
	 *
	 * @param	string
	 * @return	bool
	 */
	function _check_captcha($code)
	{
		$time = $this->session->flashdata('captcha_time');
		$word = $this->session->flashdata('captcha_word');

		list($usec, $sec) = explode(" ", microtime());
		$now = ((float)$usec + (float)$sec);

	if (($this->config->item('captcha_case_sensitive', 'tank_auth') AND
				$code != $word) OR
				strtolower($code) != strtolower($word)) {
			$this->form_validation->set_message('_check_captcha', $time.'>>');
			return FALSE;
		}
		return TRUE;
	}
	
	
	
	
	
	
	
	
	
	
	function check_captcha($code, $captcha_id)
	{
		/*$time = $this->session->flashdata('captcha_time');
		$word = $this->session->flashdata('captcha_word');
*/
		$captcha = $this->SiteModel->getfirstrow('captcha','*', array('captcha_id'=>$captcha_id), 'captcha_id DESC',1,0);
		 
		 $time = $captcha['creat_time'];
		 $word = $captcha['captcha_word'];
		 
		list($usec, $sec) = explode(" ", microtime());
		$now = ((float)$usec + (float)$sec);

		if ($now - $time > $this->config->item('captcha_expire', 'tank_auth')) {
			$this->form_validation->set_message('check_captcha', $this->lang->line('auth_captcha_expired'));
			return FALSE;

		} elseif (($this->config->item('captcha_case_sensitive', 'tank_auth') AND
				$code != $word) OR
				strtolower($code) != strtolower($word)) {
			$this->form_validation->set_message('check_captcha', $this->lang->line('auth_incorrect_captcha'));
			return FALSE;
		}
		return TRUE;
	}

	/**
	 * Create reCAPTCHA JS and non-JS HTML to verify user as a human
	 *
	 * @return	string
	 */
	function _create_recaptcha()
	{
		$this->load->helper('recaptcha');

		// Add custom theme so we can get only image
		$options = "<script>var RecaptchaOptions = {theme: 'custom', custom_theme_widget: 'recaptcha_widget'};</script>\n";

		// Get reCAPTCHA JS and non-JS HTML
		$html = recaptcha_get_html($this->config->item('recaptcha_public_key', 'tank_auth'));

		return $options.$html;
	}

	/**
	 * Callback function. Check if reCAPTCHA test is passed.
	 *
	 * @return	bool
	 */
	function _check_recaptcha()
	{
		$this->load->helper('recaptcha');

		$resp = recaptcha_check_answer($this->config->item('recaptcha_private_key', 'tank_auth'),
				$_SERVER['REMOTE_ADDR'],
				$_POST['recaptcha_challenge_field'],
				$_POST['recaptcha_response_field']);

		if (!$resp->is_valid) {
			$this->form_validation->set_message('_check_recaptcha', $this->lang->line('auth_incorrect_captcha'));
			return FALSE;
		}
		return TRUE;
	}
	
	function _create_newblogger_file(){
		$data1["newbloggerlist"] = $this->SiteModel->getlist('siteuser','SiteuserID, Name,  Image, RecieveDate', array('activated'=>1),'SiteuserID DESC', 10,0);		
		
	    $this->load->view('writefile/writetofile.php', $data1);
		
		
		}
		
		
		 
		
		
		
		
		
	function convertoarray($arr = array()) {

        $arrinfo = array();


        foreach ($arr as $row) {
            $arrinfo[$row['BlogpostID']] = array('AllLike' => $row['AllLike'], 'TotalComment' => $row['TotalComment'], 'TotalVisit' => $row['TotalVisit']);
        }

        return $arrinfo;
    }
	
	
	/**
	 * Activate user account.
	 * User is verified by user_id and authentication code in the URL.
	 * Can be called by clicking on link in mail.
	 *
	 * @return void
	 */
	function activate()
	{
		$user_id		= $this->uri->segment(3);
		$new_email_key	= $this->uri->segment(4);

		// Activate user
		if ($this->tank_auth->activate_user($user_id, $new_email_key)) {		// success
			$this->tank_auth->logout();
			$this->session->sess_create();	
			
			//create new bloger file
			//$this->_create_newblogger_file();
			// $this->_create_blogger_info($user_id);

			$this->_show_message($this->lang->line('auth_message_activation_completed').' '.anchor('/user/login/', 'Login'));

		} else {																// fail
			$this->_show_message($this->lang->line('auth_message_activation_failed'));
		}
	}
        
        
      
	  
	  
	  
	  
	  
	  
	/**
	 * Replace user password (forgotten) with a new one (set by user).
	 * User is verified by user_id and authentication code in the URL.
	 * Can be called by clicking on link in mail.
	 *
	 * @return void
	 */
	function reset_password()
	{
		$user_id		= $this->uri->segment(3);
		$new_pass_key	= $this->uri->segment(4);

		$this->form_validation->set_rules('new_password', 'New Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
		$this->form_validation->set_rules('confirm_new_password', 'Confirm new Password', 'trim|required|xss_clean|matches[new_password]');

		$this->data['errors'] = array();

		if ($this->form_validation->run()) {								// validation ok
			if (!is_null($this->data = $this->tank_auth->reset_password( $user_id, $new_pass_key, $this->form_validation->set_value('new_password')))) {	// success
					
				 

				$this->data['site_name'] = $this->config->item('website_name', 'tank_auth');

				// Send email with new password
				$this->_send_email('reset_password', $this->data['Email'], $this->data);

				$this->_show_message($this->lang->line('auth_message_new_password_activated').' '.anchor('/user/login/', 'Login'));

			} else {														// fail
				$this->_show_message($this->lang->line('auth_message_new_password_failed'));
			}
		} else {
			// Try to activate user by password key (if not activated yet)
			if ($this->config->item('email_activation', 'tank_auth')) {
				$this->tank_auth->activate_user($user_id, $new_pass_key, FALSE);
			}

			if (!$this->tank_auth->can_reset_password($user_id, $new_pass_key)) {
				$this->_show_message($this->lang->line('auth_message_new_password_failed'));
			}
		}
		
		
		
	    $this->data['title'] = "Password Reset | ". $this->data['siteinfo']["SiteName"];
		$this->data["assets"] = base_url()."assets/";
	 
	 
			$this->load->view('header.php', $this->data);
		$this->load->view('user/reset_password_form.php');
        $this->load->view('footer.php');
		
		
		
		
		
		//$this->load->view('auth/reset_password_form', $data);
		
		
		
		
		
		
	}  
	  
	  
	  
	  
	public function profile($id=null)
	{
		
            if (!$this->tank_auth->is_logged_in()) {									// logged in
			redirect('');

		} elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/auth/send_again/');

		} else {
   		 
                if($id)
                {$this->data['pagedetail'] = $this->SiteModel->getfirstrow('page','*',array('PageID'=>$id));
                $this->data['title'] = "My Page | ". $this->data['siteinfo']["SiteName"];
		 
		 $this->data['description'] = "My Page | ". $this->data['siteinfo']["SiteName"]; 
		
                }
	 	
            else {
                $this->data['title'] = "My Page | ". $this->data['siteinfo']["SiteName"];
		 
		 $this->data['description'] = "My Page | ". $this->data['siteinfo']["SiteName"]; 
		 $this->data['pagedetail']['Detail'] = "";        
                }
		
             
		 
		 
		 $this->data['menuprofile'] = $this->SiteModel->getlist('menu', 'MenuID as id,Caption as name,MenuLink,ParentID as parent_menu_id,LinkType', array('MenuGroup' => 6), 'Priority ASC', 100, 0);
		 
		
		         
		 $this->load->view('header.php',$this->data);
		 
		 $this->load->view('user/pageprofile.php');
 		 
                $this->load->view('footer.php');
                
                
                
            }
                
	}  
	    
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */