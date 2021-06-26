<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include('basecontroller.php');
 
class video extends basecontroller{
 
   function view($id)
	{   
	 $data = $this->SiteModel->getfirstrow('video','*', array('VideoID'=>$id), 'VideoID ASC', 1,0);
	$this->load->view('video/view',$data);
	}
      
	  

	function index()
	{
		 
		 if ($this->tank_auth->is_logged_in() && ( $this->tank_auth->get_userlevel() > 0 )) {
			 
			 $data['message']	= '';
		   
		   if ($message = $this->session->flashdata('message')) {
			 		     $data['message']	= $message;
			 			  }	 
			    
			 
	$data['info']	= $this->crdt;
	
				 
			   $data['menu']	= 104;
							 $data['title']	= "Video List";
                            $data['submenu']	= 'video_list1';
                           
                            $data['codemanage']	= "video_list";
			   
			   
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
      
  
	  base_url().'assets/plugins/select2/select2.min.js',
	  base_url().'assets/plugins/data-tables/jquery.dataTables.js',
	  base_url().'assets/plugins/data-tables/DT_bootstrap.js',
	  
	  base_url().'assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
	  
	  base_url().'assets/scripts/core/app.js',
	  base_url().'assets/scripts/core/datatable.js',
	   base_url().'assets/scripts/custom/ajaxdatatable/table-ajax.js' 
	 
	);
			
	
	
	  
			$data['user_image']	= $this->tank_auth->get_image(); 
		        $this->load->view('head', $data);
			$this->load->view('video/index');
			$this->load->view('foot');				
			
		   
		}
		
		elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/siteadmin/send_again/');

		} 
		
		
		   
		
	}
	
	 




 
	

function videoentry($id=null)
	{
		 
		if (!$this->tank_auth->is_logged_in() ) {									// logged in
			redirect('');

		} elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/auth/send_again/');

		}
		 
		 else  {
			         
			 	
			if(!isset($_POST) || empty($_POST)) {
			
				if(!is_null($id))  //while edit
				 {
			  
			  
			  
			       $data = $this->SiteModel->getfirstrow('video','*', array('VideoID'=>$id), 'VideoID ASC', 1,0);
			       
			 	 
				 	
				
				  }
			
			 else
			 	{
						$data = array(
						'VideoID'=>'',	 
						"VideoName" => "",
				 'EmbeddedCode'=>'',
						'Detail'=>'',
						'Priority'=>'',
				 
						"IsActive" => 1
						
						 
						
);			     }	
			 
			 
			}
			 
			 else
			 {  
			$data = $_POST;
		 
			 }
			
			$id = $data['VideoID'];
			 
			 	$this->form_validation->set_rules('EmbeddedCode', 'EmbeddedCode', 'trim|required|xss_clean');
			$this->form_validation->set_rules('VideoName', 'Caption', 'trim|required|xss_clean');
                       
			 
				if ($this->form_validation->run()) {	
	 
			 unset($data['VideoID'], $data['Submit']); 
		 
		
			
				if($id == null || $id == "")
						{
                   
			 		
							$id=$this->SiteModel->insert('video',$data);
							$msg = 'Saved Successfully';
						}
						else
						{
							$this->SiteModel->update('video',array('VideoID'=>$id), $data);
							$msg = 'Updated Successfully'; 
						}
			
                      
			  
						 
						                        
                     
			 $this->_show_msg($msg, 'video');
			}
			
			
			   $data['info']	= $this->crdt;
                            
                  
				  
				  
				  			   $data['menu']	= 104;
							 $data['title']	= "Video List";
                            $data['submenu']	= 'video_list';
                           
                            $data['codemanage']	= "video_list";
			   
			   
			 
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
	  base_url().'assets/plugins/select2/select2.min.js',
	  base_url().'assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
	  base_url().'assets/scripts/custom/components-pickers.js',
	  
	  
	  base_url().'assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js',
	  base_url().'assets/plugins/bootstrap-markdown/lib/markdown.js' ,
	  base_url().'assets/scripts/core/app.js',
	  base_url().'assets/scripts/custom/form-validation.js'
	);     
                             
                             
                             
                             
			$this->load->view('head', $data);
			$this->load->view('video/recordentryvideo');
			$this->load->view('foot');
			
		 }
		 
		 
		 
		}
	
  
	
  	
	
	 
	
		


	

		
	
	
	
	
	
  
	
	
	
	
	
	function getlist()
	{
		 $this->load->database();
		
		
		
		
		
		 
		  /* Array of database columns which should be read and sent back to DataTables.)
         */
        $aColumns = array('VideoID', 'VideoName',  'IsActive');
        
        // DB table to use
        $sTable = 'video';
        //
    
	
	
	
	
	///////////////////deleting records
		$flag = "";
		
		if (isset($_REQUEST["sAction"]) && $_REQUEST["sAction"] == "group_action" && $_REQUEST["sGroupActionName"] == "Cancel") {
			
			foreach($_REQUEST["id"] as $record_id){
				  $this->db->delete($sTable, array('VideoID' => $record_id));
			$flag=1;
				}
			
			
			
    
 			 }
		
	

            ///////////////////Activating records
		 
		
		if (isset($_REQUEST["sAction"]) && $_REQUEST["sAction"] == "group_action" && $_REQUEST["sGroupActionName"] == "IsActive") {
			
			foreach($_REQUEST["id"] as $record_id){
				  $this->db->update($sTable, array("IsActive"=>1), array('VideoID' => $record_id));
			$flag=10;
				}
			 
 			 }
	
	
	
	
	
	///////////////////InActivating records
		 
		
		if (isset($_REQUEST["sAction"]) && $_REQUEST["sAction"] == "group_action" && $_REQUEST["sGroupActionName"] == "InActive") {
			
			foreach($_REQUEST["id"] as $record_id){
				  $this->db->update($sTable, array("IsActive"=>0), array('VideoID' => $record_id));
			$flag=20;
				}
			 
 			 }
		
	
	
	
	
	
	
	
	
	
	
        $iDisplayStart = $this->input->get_post('iDisplayStart', true);
        $iDisplayLength = $this->input->get_post('iDisplayLength', true);
        $iSortCol_0 = $this->input->get_post('iSortCol_0', true);
        $iSortingCols = $this->input->get_post('iSortingCols', true);
        $sSearch = $this->input->get_post('sSearch', true);
        $sEcho = $this->input->get_post('sEcho', true);
    
        // Paging
        if(isset($iDisplayStart) && $iDisplayLength != '-1')
        {
            $this->db->limit($this->db->escape_str($iDisplayLength), $this->db->escape_str($iDisplayStart));
        }
        
        // Ordering
        if(isset($iSortCol_0))
        {
            for($i=0; $i<intval($iSortingCols); $i++)
            {
                $iSortCol = $this->input->get_post('iSortCol_'.$i, true);
                $bSortable = $this->input->get_post('bSortable_'.intval($iSortCol), true);
                $sSortDir = $this->input->get_post('sSortDir_'.$i, true);
    
                if($bSortable == 'true')
                {
                    $this->db->order_by($aColumns[intval($this->db->escape_str($iSortCol))-1], $this->db->escape_str($sSortDir));
                }
            }
        }
        
        /* 
         * Filtering
         * NOTE this does not match the built-in DataTables filtering which does it
         * word by word on any field. It's possible to do here, but concerned about efficiency
         * on very large tables, and MySQL's regex functionality is very limited
         */
		 
                 
		if (isset($_REQUEST["sAction"]) && ($_REQUEST["sAction"]=="filter")) {
		
		
			foreach($_POST as $key=>$row){
				
				if (strpos($key,'filter-') !== false && !empty($row)) 
				{
							$field = str_replace('filter-','',$key);
						 
							   $this->db->like($field, $this->db->escape_like_str($row));
							 
							 
							
				}
				}
			 
			
	 		
			
			
			}
		
		
		
		
		
		
		
		
		
        
        // Select Data
        $this->db->select('SQL_CALC_FOUND_ROWS '.str_replace(' , ', ' ', implode(', ', $aColumns)), false);
        $rResult = $this->db->get($sTable);
    
        // Data set length after filtering
        $this->db->select('FOUND_ROWS() AS found_rows');
        $iFilteredTotal = $this->db->get()->row()->found_rows;
    
        // Total data set length
        $iTotal = $this->db->count_all($sTable);
    
        // Output
        $output = array(
            'sEcho' => intval($sEcho),
            'iTotalRecords' => $iTotal,
            'iTotalDisplayRecords' => $iFilteredTotal,
            'aaData' => array()
        );
        
		
		 $status_list = array(1 => "success", 0 => "danger");
		 $IsActive = array(1 => "Yes", 0 => "No");
  
  
  
  
  
		
        foreach($rResult->result_array() as $aRow)
        { 
            $row = array();
            
		 	$row[] = '<input type="checkbox" name="id[]" value="'.$aRow['VideoID'].'">'; 
	 		
            foreach($aColumns as $col)
            {
		
                 
                    $row[] = ($col=="IsActive") ? '<span class="label label-sm label-'.($status_list[$aRow[$col]]).'">'.($IsActive[$aRow[$col]]).'</span>' : $aRow[$col];
            } 
		  	
			 
			  $row[] = '<a href="'.site_url("video/videoentry/".$aRow['VideoID']).'" class="btn btn-xs default"><i class="fa fa-edit"></i> Edit</a> <a data-target="#ajax" data-toggle="modal" href="'.site_url("video/view/".$aRow['VideoID']).'" class="btn btn-xs default"><i class="fa fa-search"></i> View</a>';
    		  
	  
	       
                         $output['aaData'][] = $row;
		
		 
		
		
		
		
			
        }
		
		if($flag==1){
    $output["sStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
    $output["sMessage"] = "Deleted successfully."; // pass custom message(useful for getting status of group actions)
		}
                
                
           elseif($flag==10){
    $output["sStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
    $output["sMessage"] = "Updated successfully."; // pass custom message(useful for getting status of group actions)
		}         
                       
                
           elseif($flag==20){
    $output["sStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
    $output["sMessage"] = "Updated successfully."; // pass custom message(useful for getting status of group actions)
		}    
		
		
		
		
		
		
	  header("Content-type: application/json; charset=utf-8");          
        echo json_encode($output);
	 die;	
		 
		 
		 
		 
		 
		
		}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}