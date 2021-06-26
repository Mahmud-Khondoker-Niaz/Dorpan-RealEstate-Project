<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include('basecontroller.php');
class Welcome extends basecontroller {

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
	public function index()
	{
		
            
			
			
	  	$this->data['slideist'] =  $this->SiteModel->getlist('page', '*', array('IsActive'=>1,'CHAR_LENGTH(ProjectLink) > '=>10), 'PageID DESC', 5, 0); 
		
		$project8 = array();
		foreach($this->data['slideist'] as $slideist) {
		
		 
		$project8[] = substr($slideist["ProjectLink"], (strrpos($slideist["ProjectLink"],'/') + 1));

 
		
		}
		  
		 
		if(count($project8) > 0)	
		  $this->data['projectinfo'] =  $this->SiteModel->getwherein('project', '*', array('IsActive'=>1), 'ProjectID', $project8, 'ProjectID DESC', 20, 0); 
		   
		 
		 $this->data['projectlist'] =  $this->SiteModel->getlist('project', '*', array('IsActive'=>1), 'ProjectID DESC', 20, 0); 
	 
        $this->data['pagedetail'] = $this->SiteModel->getfirstrow('page','*',array('PageID'=>30));
        
		 $this->data['offer'] = $this->SiteModel->getfirstrow('page','*',array('PageID'=>24),'PageID DESC',1,0);
		
		 $this->load->view('common/header.php',$this->data);
		 $this->load->view('index.php');
		 $this->load->view('common/footer.php');
		 
		 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */