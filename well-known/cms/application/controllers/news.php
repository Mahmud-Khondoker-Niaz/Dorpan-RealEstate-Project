<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include('basecontroller.php');

class news extends basecontroller{
 
    
    function delete($id){
         if ($this->tank_auth->is_logged_in() && ( $this->tank_auth->get_userlevel() > 0 )) {
          
             
             
          $this->db->delete('news', array('NewsID' => $id));
          $this->db->delete("newsdetail", array('NewsID' => $id));  
          
             
          
           $this->_show_msg("Deleted Successfully", 'news/newshtml');
         }
    }
    
   function view($id)
	{   
	
	//sleep(5);
	 $data = $this->SiteModel->getfirstrow('news','*', array('NewsID'=>$id), 'NewsID ASC', 1,0);
	 $data["Detail"] = $this->SiteModel->getcolumn('newsdetail','Detail', array('NewsID'=>$id), 'NewsID ASC', 1,0);
	
         $data["visitor"] = $this->SiteModel->getcolumn('newsinfo','VisitNumber', array('NewsID'=>$id), 'NewsID ASC', 1,0);
         
         $data["uploader"] = $this->SiteModel->getfirstrow('users','*', array('id'=>$data["UserID"]), 'id ASC', 1,0);
         
         
	$this->load->view('news/view', $data);
	}
      
	  

	function index()
	{
		 
            
            
		 if ($this->tank_auth->is_logged_in() && ( $this->tank_auth->get_userlevel() > 0 )) {
			 
			 $data['message']	= '';
		   
		   if ($message = $this->session->flashdata('message')) {
			 		     $data['message']	= $message;
			 			  }	 
			    
			 
	$data['info']	= $this->crdt;
	
				 
			   $data['menu']	= 3;
			 $data['title']	= "News List";
                            $data['submenu']	= 'news_list1';
                           
                            $data['codemanage']	= "news_list";
			   
			   
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
			$this->load->view('news/index');
			$this->load->view('foot');				
			
		   
		}
		
		elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/siteadmin/send_again/');

		} 
		
		
		   
		
	}
	
	 




  
        
	

function newsentry($id=null)
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
			  
			  
			  
			       $data = $this->SiteModel->getfirstrow('news','*', array('NewsID'=>$id), 'NewsID ASC', 1,0);
                               
                               
                        
                               
                               
			       $data["DetailNews"] = $this->SiteModel->getcolumn('newsdetail','Detail', array('NewsID' => $id),'NewsID DESC', 1, 0);	
			     
                      
                        
                        
  	 	
				
				  }
			
			 else
			 	{
					 
								 $selecteddate =  date("Y-m-d H:i:s"); 	 
                             
							 
				              
						$data = array(
						'NewsID'=>'',	 
						"IsActive" => 1,
						 

						"NewsTitle" => "",
						"DetailNews" => "",
						 	"NewsSummary" => "",

						"Date" => ( isset($selecteddate) && !empty($selecteddate)) ? $selecteddate : date("Y-m-d H:i:s"),
						"Priority" => 15,
                                                		'ImageTitle'=>'' 
						
				 
						 
				);			     
				}	
			 
			 
			}
			 
			 else
			 {  
                             
                             
					 
	 
	 
	 
	 
			$data = $_POST;
		 	 
	
			 }
			
			$id = $data['NewsID'];
			 
			 
			$this->form_validation->set_rules('NewsTitle', 'Heading', 'trim|required|xss_clean');
             $this->form_validation->set_rules('DetailNews', 'Detail', 'trim|xss_clean');
			$this->form_validation->set_rules('NewsSummary', 'NewsSummary', 'trim|xss_clean');
		 
		 	$this->form_validation->set_rules('ImageTitle', 'ImageTitle', 'trim|xss_clean');		
			 
				if ($this->form_validation->run()) {	
	  
	 
	 
			     $detail = $data['DetailNews'];
			 
			 unset($data['NewsID'],$data['DetailNews'], $data['Submit']); 
		 		
				$data['UserID'] = $this->crdt['user_id'];
				
				        
                                
                            
                        

 					      
                        
                                   
                                
                              if(strlen(trim($data["NewsSummary"]))<1){
                                  $data["NewsSummary"] = (strlen(trim($detail)) > 1) ?  word_limiter(strip_tags($detail),25,"...") : "";
                                  
                                  
                              }     
                                    
                                    
				if($id == null || $id == "")
						{
                   
			 		
							$id=$this->SiteModel->insert('news',$data);
							$this->SiteModel->insert('newsdetail',array("NewsID"=>$id, "Detail"=>$detail));
                            
							
				 
                       
                         
                        
                         
 
                         
                    	$msg = 'Saved Successfully';
							
					
                        
                        
                        
                        
                                    }
						else
						{
                            $update_id = $id;
							
							
							$currentrecord = $this->SiteModel->getfirstrow('news','*', array('NewsID'=>$id), 'NewsID ASC', 1,0);
							
							 
							 
							
				 
				 
							
							
							
							
							
			 $this->SiteModel->update('news',array('NewsID'=>$id), $data);
 			 			
                          $getid =  $this->SiteModel->getcolumn('newsdetail','COUNT(NewsID)', array('NewsID' =>$id),'NewsID DESC', 1, 0);
  
                                                        if( $getid > 0)
                                                                 $this->SiteModel->update('newsdetail',array('NewsID'=>$id), array("NewsID"=>$id, "Detail"=>$detail));
                                                        
                                                        else 
                                                                $this->SiteModel->insert('newsdetail',array("NewsID"=>$id, "Detail"=>$detail));
                                           
							$msg = 'Updated Successfully'; 
						}
			
                             
			 
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                      //image resizing & copying  
                         $arr = array(
                             "tableid"=>"NewsID", 
                             "table"=>"news", 
                             "ratio"=>TRUE,
                             "width"=>"900",
                             "height"=>"600",
                             "member_id"=>$id,
                             "resize"=>TRUE, 
                             "folder"=>"news/".date("Ym"),
                             
                             "thumb"=>TRUE,
                             "t_ratio"=>TRUE,
                             "t_width"=>"200",
                             "t_height"=>"150",
                             "mediumthumb"=>TRUE,
                             "m_ratio"=>TRUE,
                             "m_width"=>"450",
                             "m_height"=>"300",
							    
                                 );
                         
		 	  $this->saveImages($arr);
                          
                        //image resizing & copying  ends    
                          
                          
                          
                          
                          
                    
                          
                          
                          
                          
                          
                          
                         //redirect after successfull insertion/modification
                     
			        $this->_show_msg($msg, 'news');
			 
                         //redirect ends
                          
                          
                          
                          
                          
                          
                          
                                                          
                                                          
                                                          
			}
			
			
			   $data['info']	= $this->crdt;
                           $data['menu']	= 3;
			   $data['title']	= "News List";
                           $data['submenu']	= 'news_list';
                           $data['codemanage']	= "news_list";
			   
			    
			    
			 
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
			$this->load->view('news/recordentrynews');
			$this->load->view('foot');
			
		 }
		 
		 
		 
		}
	
   
	

    
 

		
	
	
	
	
	
 


 	
	
	
 
	
	
	
	
	
	
	function getlist()
	{
		
		if($this->tank_auth->is_logged_in()):
		
		 $this->load->database();
		
		 
		  /* Array of database columns which should be read and sent back to DataTables.)
         */
        $aColumns = array('NewsID', 'NewsTitle', 'Date' , 'IsActive' );
        
        // DB table to use
        $sTable = 'news';
        //
    
	
	
	
	
	///////////////////deleting records
		$flag = "";
		
		if (isset($_REQUEST["sAction"]) && $_REQUEST["sAction"] == "group_action" && $_REQUEST["sGroupActionName"] == "Cancel") {
			
			foreach($_REQUEST["id"] as $record_id){
				  $this->db->delete($sTable, array('NewsID' => $record_id));
                                  $this->db->delete("newsdetail", array('NewsID' => $record_id));
			$flag=1;
				}
			
			
			 
                        
                        
                 
                          
 			 }
		
	

            ///////////////////Activating records
		 
		
		if (isset($_REQUEST["sAction"]) && $_REQUEST["sAction"] == "group_action" && $_REQUEST["sGroupActionName"] == "IsActive") {
			
			foreach($_REQUEST["id"] as $record_id){
				  $this->db->update($sTable, array("IsActive"=>1), array('NewsID' => $record_id));
			$flag=10;
				}
			 
                                
                             
                          
                          
                          
 			 }
	
	
	
	
	
	///////////////////InActivating records
		 
		
		if (isset($_REQUEST["sAction"]) && $_REQUEST["sAction"] == "group_action" && $_REQUEST["sGroupActionName"] == "InActive") {
			
			foreach($_REQUEST["id"] as $record_id){
				  $this->db->update($sTable, array("IsActive"=>0), array('NewsID' => $record_id));
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
							if($field == 'DateFrom')
							   {
								   
								   $this->db->where("DATE(Date) >=", $row);
								   }
							elseif($field == 'DateTo')
							   {
								   
								   $this->db->where("DATE(Date) <=", $row);
								   }	   
							   
							  else 
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
            
		 	$row[] = '<input type="checkbox" name="id[]" value="'.$aRow['NewsID'].'">'; 
	 		
            foreach($aColumns as $col)
            {
		
		
				if($col=="NewsTitle")
               	 $row[] =  mb_substr($aRow[$col],0,20, 'UTF-8');
				 
			elseif($col=="Date")
               	 $row[] =  date("d M,Y",strtotime($aRow[$col]));
					 
			   else      
                $row[] = ($col=="IsActive") ? '<span class="label label-sm label-'.($status_list[$aRow[$col]]).'">'.($IsActive[$aRow[$col]]).'</span>' : $aRow[$col];
				
				
            } 
		  	
			 
			  $row[] = '<a href="'.site_url("news/newsentry/".$aRow['NewsID']).'" class="btn btn-xs default"><i class="fa fa-edit"></i> Edit</a> <a data-target="#ajax" data-toggle="modal" href="'.site_url("news/view/".$aRow['NewsID']).'" class="btn btn-xs default"><i class="fa fa-search"></i> View</a>';
    		  
	  
	       
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
      
        $this->SiteModel->update('news',array('NewsID'=>$id), array("Image"=>"", "Thumbimage"=>"", "MediumImage"=>""));
        echo "Removed";
       	 
		 die;
		 
	 }	 
		 
	 
	}
	
	
 
 
        
        
	
	
}