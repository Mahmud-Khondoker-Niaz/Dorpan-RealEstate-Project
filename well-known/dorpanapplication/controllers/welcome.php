<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include('basecontroller.php');

class Welcome extends basecontroller {

 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	public function index()
	{
		
   
   
   
	     $this->data['welcome'] = $this->SiteModel->getfirstrow('page','*',array('PageID'=>26),'PageID DESC',1,0);
	  
	  
		  $this->data['latestnews'] = $this->SiteModel->getlist('news','NewsID, NewsTitle,MediumImage,Thumbimage,NewsSummary',array('IsActive'=>1),'NewsID DESC',3,0);
		  $this->data['offer'] = $this->SiteModel->getfirstrow('page','*',array('PageID'=>24),'PageID DESC',1,0);
		  $this->data['projectlist'] = $this->SiteModel->getlist('project','*',array('IsActive'=>1),'ProjectID DESC',6,0);
		  $this->data['enterpriselist'] = $this->SiteModel->getlist('enterprise','*',array('IsActive'=>1),'Priority ASC',6,0);
		  $this->data['chairmanmessage'] = $this->SiteModel->getfirstrow('page','*',array('PageID'=>21),'PageID DESC',1,0);
		  $this->data['mdmessage'] = $this->SiteModel->getfirstrow('page','*',array('PageID'=>20),'PageID DESC',1,0);
		  $this->data['chairmaninfo'] = $this->SiteModel->getfirstrow('writer','*',array('Category'=>1),'WriterID DESC',1,0);
		  
		  $this->data['partnerlist'] = $this->SiteModel->getlist('partner','*',array('IsActive'=>1),'Priority ASC',4,0);
		  	
 $this->data['latestnews'] = $this->SiteModel->getlist('news','NewsID, NewsTitle,MediumImage,Thumbimage,NewsSummary',array('IsActive'=>1),'NewsID DESC',3,0);
     
		 $this->load->view('common/header.php',$this->data);
		 $this->load->view('index.php');
		 $this->load->view('common/footer.php');
	}
	
	
	
	
						
						
						
						
						
						
						
						
						
						
						
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */