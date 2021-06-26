<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include('basecontroller.php');

class project extends basecontroller{
 
    
  
    
   function view($id)
	{   
	
	//sleep(5);
	 $data = $this->SiteModel->getfirstrow('project','*', array('ProjectID'=>$id), 'ProjectID ASC', 1,0);
	 
        
         $data["uploader"] = $this->SiteModel->getfirstrow('users','*', array('id'=>$data["UserID"]), 'id ASC', 1,0);
         
         
	$this->load->view('project/view', $data);
	}
      
	  

	function index()
	{
		 
            
            
		 if ($this->tank_auth->is_logged_in() && ( $this->tank_auth->get_userlevel() > 0 )) {
			 
			 $data['message']	= '';
		   
		   if ($message = $this->session->flashdata('message')) {
			 		     $data['message']	= $message;
			 			  }	 
			    
			 
	$data['info']	= $this->crdt;
	
				 
			   $data['menu']	= 101;
			 $data['title']	= "Project List";
                            $data['submenu']	= 'project_list1';
                           
                            $data['codemanage']	= "project_list1";
			   
			   
   $data['javascriptfile'] =  array( 
   $this->config->item('cdn').'assets/plugins/jquery-1.10.2.min.js',
  $this->config->item('cdn').'assets/plugins/jquery-migrate-1.2.1.min.js',
  $this->config->item('cdn').'assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js',
   $this->config->item('cdn').'assets/plugins/bootstrap/js/bootstrap.min.js',
   $this->config->item('cdn').'assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
  $this->config->item('cdn').'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
   $this->config->item('cdn').'assets/plugins/jquery.blockui.min.js',
   $this->config->item('cdn').'assets/plugins/jquery.cokie.min.js',
   $this->config->item('cdn').'assets/plugins/uniform/jquery.uniform.min.js',
      
  
	 $this->config->item('cdn').'assets/plugins/select2/select2.min.js',
	 $this->config->item('cdn').'assets/plugins/data-tables/jquery.dataTables.js',
	  $this->config->item('cdn').'assets/plugins/data-tables/DT_bootstrap.js',
	  
	 $this->config->item('cdn').'assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
	  
	  base_url().'assets/scripts/core/app.js',
	$this->config->item('cdn').'assets/scripts/core/datatable.js',
	   base_url().'assets/scripts/custom/ajaxdatatable/table-ajax.js' 
	 
	);
			
	
	
	  
			$data['user_image']	= $this->tank_auth->get_image(); 
		        $this->load->view('head', $data);
			$this->load->view('project/index');
			$this->load->view('foot');				
			
		   
		}
		
		elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/siteadmin/send_again/');

		} 
		
		
		   
		
	}
	
	 




  
        
	

function projectentry($id=null)
	{
    
    
          $update_id = "";
                              
    
		$this->load->helper('text');
                
		if (!$this->tank_auth->is_logged_in()) {									// logged in
			redirect('');

		} elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/auth/send_again/');

		}
		 
		 else  {
			         
			 	
			if(!isset($_POST) || empty($_POST)) {
			
				if(!is_null($id))  //while edit
				 {
			  
			  
			  
			       $data = $this->SiteModel->getfirstrow('project','*', array('ProjectID'=>$id), 'ProjectID ASC', 1,0);
                               
                               
                        
                               
                               
			      
                        $data['categorylist']  = $this->dropdown($this->SiteModel->getlist('category','CategoryID as ID, Caption as Name, ParentID', array('ParentID' =>0),'Priority ASC', 1000, 0));
			$data['subcategorylist']  = $this->SiteModel->getlist('category','CategoryID as ID, Caption as Name, ParentID', array('ParentID !=' =>0),'Priority ASC', 1000, 0);
			 
                                                          
			
			$data['selected_item_category'] = $data['ParentCategoryID'];
			$data['selected_item_subcategory'] = $data['SubCategoryID'];
			 
			
				$data['selected_item_ProjectType'] = $data['ProjectType'];
			$data['selected_item_ProjectStatus'] = $data['ProjectStatus'];
                        
                    
  	 	
				
				  }
			
			 else
			 	{
					
					
								$selectedcategory =  $this->session->userdata("selectedcategory");
                               $selectedsubcategory =  $this->session->userdata("selectedsubcategory");
                              
					 
                              
							 
				 $data['categorylist']  = $this->dropdown($this->SiteModel->getlist('category','CategoryID as ID, Caption as Name, ParentID', array('ParentID' =>0),'Priority ASC', 1000, 0));			  
                             
						$data = array(
						'ProjectID'=>'',	 
						"IsActive" => 1,
						 "IsSelected" => 1,

						"ProjectTitle" => "",
						"Detail" => "",
						"ProjectImages" => "",
						 	"Description" => "",
							"Amenities" => "",
							"AreaSF" => "",
							"Bath" => "",
							"Price" => "",
							
							"Bed" => "",
							"Parking" => "",
							"Location" => "",
						"Date" =>  date("Y-m-d H:i:s"),
						 
                        'ImageTitle'=>'',
                                                
					'ProjectType'=>'',	
					'ProjectStatus'=>'',	
												
						"ParentCategoryID" => "",
						"SubCategoryID" => "",
						 
						'categorylist' => $this->dropdown($this->SiteModel->getlist('category','CategoryID as ID, Caption as Name, ParentID', array('ParentID' =>0),'Priority ASC', 1000, 0)),
						
						'subcategorylist' => $this->SiteModel->getlist('category','CategoryID as ID, Caption as Name, ParentID', array('ParentID !=' =>0),'Priority ASC', 1000, 0),
					
					     'Typelist' => array(''=>'','Residential'=>'Residential','Commercial'=>'Commercial'),
						 'Statuslist' => array(''=>'','Sale'=>'For Sale','Rent'=>'For Rent'),
						 
						"selected_item_category" => "", 
						"selected_item_subcategory" => "",
						"selected_item_ProjectType" => "",
						"selected_item_ProjectStatus" => "",
						
						 
				);			     
				}	
			 
			 
			}
			 
			 else
			 {  
                             
                       
						
                        
	 
	 
	 
	 
			$data = $_POST;
			$data['categorylist']  = $this->dropdown($this->SiteModel->getlist('category','CategoryID as ID, Caption as Name, ParentID', array('ParentID' =>0),'Priority ASC', 1000, 0));
			$data['subcategorylist']  = $this->SiteModel->getlist('category','CategoryID as ID, Caption as Name, ParentID', array('ParentID !=' =>0),'Priority ASC', 1000, 0);
			 
			
			$data['selected_item_category'] = isset($_POST['ParentCategoryID']) ?  $_POST['ParentCategoryID'] : "";    
			$data['selected_item_subcategory'] = isset($_POST['SubCategoryID']) ?  $_POST['SubCategoryID'] : "";
		 
	
			 }
			
			$id = $data['ProjectID'];
			 
			 
			$this->form_validation->set_rules('ProjectTitle', 'Heading', 'trim|required|xss_clean');
            $this->form_validation->set_rules('Detail', 'Detail', 'trim|xss_clean');
			
			$this->form_validation->set_rules('Amenities', 'Amenities', 'trim|xss_clean');
			$this->form_validation->set_rules('Description', 'Description', 'trim|xss_clean');
			$this->form_validation->set_rules('AreaSF', 'AreaSF', 'trim|xss_clean'); 
		 	$this->form_validation->set_rules('ImageTitle', 'ImageTitle', 'trim|xss_clean');		
			 
				if ($this->form_validation->run()) {	
	 
                                    
                                    if(isset($_POST['SubCategoryID']) && $_POST['SubCategoryID']!=""){
                                      $data['ProjectCategoryID'] =  $_POST['SubCategoryID'] ; 
                                        
                                    }
                                    
                                    else {
                                         $data['ProjectCategoryID'] =  $_POST['ParentCategoryID'] ; 
                                          }
	 
	 
			$data['CategoryName'] = $this->SiteModel->getcolumn('category','Caption', array('CategoryID' => $data['ProjectCategoryID']),'CategoryID DESC', 1, 0);	    
		   
	         
			 
			 unset($data['ProjectID'],$data['categorylist'], $data['subcategorylist'], $data['selected_item_category'], $data['selected_item_subcategory'], $data['Submit']); 
		 		
				$data['UserID'] = $this->crdt['user_id'];
				
				        
                                
                            
                        

 			      
                                   
                  
						              
                                    
                                    
				if($id == null || $id == "")
						{
                   
			 		
							$id=$this->SiteModel->insert('project',$data);
							  
                    	$msg = 'Saved Successfully';
							
					
                        
                        
                        
                        
                                    }
						else
						{
                            $update_id = $id;
							
							
							$currentrecord = $this->SiteModel->getfirstrow('project','*', array('ProjectID'=>$id), 'ProjectID ASC', 1,0);
							
							 		
							
			 $this->SiteModel->update('project',array('ProjectID'=>$id), $data);
 			 			
                           
   
							$msg = 'Updated Successfully'; 
						}
			
                             
			 
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                      //image resizing & copying  
                         $arr = array(
                             "tableid"=>"ProjectID", 
                             "table"=>"project", 
                             "ratio"=>FALSE,
                             "width"=>"540",
                             "height"=>"360",
                             "member_id"=>$id,
                             "resize"=>TRUE, 
                             "folder"=>"project/".date("Ym"),
                             
                             "thumb"=>TRUE,
                             "t_ratio"=>TRUE,
                             "t_width"=>"150",
                             "t_height"=>"100",
                             "mediumthumb"=>TRUE,
                             "m_ratio"=>TRUE,
                             "m_width"=>"300",
                             "m_height"=>"200",
							    
                                 );
                         
		 	  $this->saveImages($arr);
                          
                        //image resizing & copying  ends    
                          
                          
                          
                          
                          
                    
                          
                          
                          
                          
                          
                          
                         //redirect after successfull insertion/modification
                         if($id == $update_id) 
                               // redirect('/project/projectentry/'.$id); 
							    $this->_show_msg($msg, 'project');
                             
                         else     
			        $this->_show_msg($msg, 'project');
			 
                         //redirect ends
                          
                          
                          
                          
                          
                          
                          
                                                          
                                                          
                                                          
			}
			
			
			   $data['info']	= $this->crdt;
                           $data['menu']	= 101;
			   $data['title']	= "Project List";
                           $data['submenu']	= 'project_list';
                           $data['codemanage']	= "project_list";
			   		      
             $data['Typelist']  =array(''=>'','Residential'=>'Residential','Commercial'=>'Commercial');
			$data['Statuslist']  = array(''=>'','Sale'=>'For Sale','Rent'=>'For Rent');
			 
			    
			    
			 
                              $data['javascriptfile'] =  array( 
  $this->config->item('cdn').'assets/plugins/jquery-1.10.2.min.js',
  $this->config->item('cdn').'assets/plugins/jquery-migrate-1.2.1.min.js',
    $this->config->item('cdn').'assets/plugins/bootstrap/js/bootstrap.min.js',
   $this->config->item('cdn').'assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
  $this->config->item('cdn').'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
    $this->config->item('cdn').'assets/plugins/jquery.blockui.min.js',
   $this->config->item('cdn').'assets/plugins/jquery.cokie.min.js',
    $this->config->item('cdn').'assets/plugins/uniform/jquery.uniform.min.js',
      
  
	 $this->config->item('cdn').'assets/plugins/jquery-validation/dist/jquery.validate.min.js',
	 $this->config->item('cdn').'assets/plugins/jquery-validation/dist/additional-methods.min.js',
	 $this->config->item('cdn').'assets/plugins/select2/select2.min.js',
	  $this->config->item('cdn').'assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
	$this->config->item('cdn').'assets/scripts/custom/components-pickers.js',
	   $this->config->item('cdn').'assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
	   
	 /* base_url().'assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js',
	  base_url().'assets/plugins/bootstrap-markdown/lib/markdown.js' ,*/
	  
	  
	  base_url().'assets/scripts/core/app.js',
	  $this->config->item('cdn').'assets/scripts/custom/form-validation.js',
	 $this->config->item('cdn').'assets/scripts/extra/jquery.chained.min.js'
	);     
                             
                              $data['message']	= "";
                            if ($message = $this->session->flashdata('message')) {
			 		     $data['message']	= $message;
			 			  }	   
                             
			$this->load->view('head', $data);
			$this->load->view('project/recordentryproject');
			$this->load->view('foot');
			
		 }
		 
		 
		 
		}
	
   
	

    
                
                
 


	

		
	
	
	
	
	
 


 	
	
	
 
	
	
	
	
	
	
	function getlist()
	{
		
		if($this->tank_auth->is_logged_in()):
		
		 $this->load->database();
		
		 
		  /* Array of database columns which should be read and sent back to DataTables.)
         */
        $aColumns = array('ProjectID', 'ProjectTitle', 'AreaSF' ,'Bath', 'CategoryName', 'IsActive' );
        
        // DB table to use
        $sTable = 'project';
        //
    
	
	
	
	
	///////////////////deleting records
		$flag = "";
		
		if (isset($_REQUEST["sAction"]) && $_REQUEST["sAction"] == "group_action" && $_REQUEST["sGroupActionName"] == "Cancel") {
			
			foreach($_REQUEST["id"] as $record_id){
				  $this->db->delete($sTable, array('ProjectID' => $record_id));
                                  $this->db->delete("projectdetail", array('ProjectID' => $record_id));
			$flag=1;
				}
			
			
			 
                        
                        
                 
                          
 			 }
		
	

            ///////////////////Activating records
		 
		
		if (isset($_REQUEST["sAction"]) && $_REQUEST["sAction"] == "group_action" && $_REQUEST["sGroupActionName"] == "IsActive") {
			
			foreach($_REQUEST["id"] as $record_id){
				  $this->db->update($sTable, array("IsActive"=>1), array('ProjectID' => $record_id));
			$flag=10;
				}
			 
                                
                             
                          
                          
                          
 			 }
	
	
	
	
	
	///////////////////InActivating records
		 
		
		if (isset($_REQUEST["sAction"]) && $_REQUEST["sAction"] == "group_action" && $_REQUEST["sGroupActionName"] == "InActive") {
			
			foreach($_REQUEST["id"] as $record_id){
				  $this->db->update($sTable, array("IsActive"=>0), array('ProjectID' => $record_id));
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
            
		 	$row[] = '<input type="checkbox" name="id[]" value="'.$aRow['ProjectID'].'">'; 
	 		
            foreach($aColumns as $col)
            {
		
		
				if($col=="ProjectTitle")
               	 $row[] =  mb_substr($aRow[$col],0,20, 'UTF-8');
				 
			 		 
			   else      
                $row[] = ($col=="IsActive") ? '<span class="label label-sm label-'.($status_list[$aRow[$col]]).'">'.($IsActive[$aRow[$col]]).'</span>' : $aRow[$col];
				
				
            } 
		  	
			 
			  $row[] = '<a href="'.site_url("project/projectentry/".$aRow['ProjectID']).'" class="btn btn-xs default"><i class="fa fa-edit"></i> Edit</a> <a data-target="#ajax" data-toggle="modal" href="'.site_url("project/view/".$aRow['ProjectID']).'" class="btn btn-xs default"><i class="fa fa-search"></i> View</a>';
    		  
	  
	       
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
		
		
		
		
		
		
		
		//header("Content-type: application/json; charset=utf-8");	
		header("Content-type: text/html; charset=utf-8");  
        echo json_encode($output);
		 
		 die;
		 
		 
		 
		 
		 
		 endif;
		
		}
	
	
	
	
	
	
	
	
	 function imageremove($id)
	{   
              if ($this->tank_auth->is_logged_in()){
	header("Content-type: text/html; charset=utf-8");  
      
        $this->SiteModel->update('project',array('ProjectID'=>$id), array("Image"=>"", "Thumbimage"=>"", "MediumImage"=>""));
        echo "Removed";
       	 
		 die;
		 
	 }	 
		 
	 
	}
	
	
 

 
      
 
	 
 
	
}