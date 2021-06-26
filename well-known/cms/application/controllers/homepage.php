<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
include('basecontroller.php');

class homepage extends basecontroller{
 

	function index()
	{
		
		
		 $data['info']	= $this->crdt; 
	 
		
		if (!$this->tank_auth->is_logged_in()) {
			/*$data['user_id']	= 100;
			$data['username']	= 'Guest';
			$data['user_level']	= '100';*/
			 redirect('/siteadmin/login');
		} else {
			 
                        
                        $data['user_id']	= $this->tank_auth->get_user_id();
			$data['user_name']	= $this->tank_auth->get_username();
			$data['user_level']	= $this->tank_auth->get_userlevel();
			$data['user_image']	= $this->tank_auth->get_image();
		}
		   
		  $data['menu']	= 1;
		   $data['submenu']	= '';
                   
                   $data['site_name'] = $this->config->item('website_name', 'tank_auth');
					$data['title'] = "Dashboard";
	
			   
			 
			  $data['javascriptfile'] =  array(
    base_url().'assets/plugins/jquery-1.10.2.min.js',
    base_url().'assets/plugins/jquery-migrate-1.2.1.min.js',
    base_url().'assets/plugins/bootstrap/js/bootstrap.min.js',
    base_url().'assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
    base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
    base_url().'assets/plugins/jquery.blockui.min.js',
    base_url().'assets/plugins/jquery.cokie.min.js',
    base_url().'assets/plugins/uniform/jquery.uniform.min.js',
	
	
    	
	 base_url().'assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js',//////////
	  base_url().'assets/plugins/flot/jquery.flot.min.js',/////////
	   base_url().'assets/plugins/flot/jquery.flot.resize.min.js',   ////
	 base_url().'assets/plugins/flot/jquery.flot.categories.min.js',   ////
    base_url().'assets/scripts/core/app.js',
	 base_url().'assets/scripts/custom/index.js'//////////
	);
			 
			 
			 
			 
			 
			 
		   $data['menu']	= 1;
		    $this->load->view('head', $data);
			$this->load->view('index');
		 
		
	}
}
