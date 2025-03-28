<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/siteadmin/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['user_name']	= $this->tank_auth->get_username();
			
			$this->load->view('head', $data);
			$this->load->view('welcome');
			$this->load->view('foot');
			 
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */