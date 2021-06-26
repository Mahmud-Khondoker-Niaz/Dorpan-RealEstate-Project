<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


include('basecontroller.php');

class home extends basecontroller{
 
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
		$this->load->model(array('SiteModel'));
		
	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			 
			 redirect('/siteadmin/login/');
		}  
		  $data['info']	= $this->crdt; 
		
		   $data['menu']	= 1;
		   $data['submenu']	= '';
		  
		  $data['javascriptfile'] =  array(
    base_url().'assets/plugins/jquery-1.10.2.min.js',
    base_url().'assets/plugins/jquery-migrate-1.2.1.min.js',
    base_url().'assets/plugins/bootstrap/js/bootstrap.min.js',
    base_url().'assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
    base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
    base_url().'assets/plugins/jquery.blockui.min.js',
    base_url().'assets/plugins/jquery.cokie.min.js',
    base_url().'assets/plugins/uniform/jquery.uniform.min.js',
	
 
    base_url().'assets/scripts/core/app.js',
	 base_url().'assets/scripts/custom/index.js'//////////
 

	);
			   
     	  
                   $data['site_name'] = $this->config->item('website_name', 'tank_auth');
                   
                  	$data['title'] = "Dashboard";
		    $this->load->view('head', $data);
		 
		
			$this->load->view('index');
			 
			$this->load->view('foot');
		
	}
}
