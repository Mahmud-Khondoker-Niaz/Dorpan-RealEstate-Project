<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


include('basecontroller.php');

class comments extends basecontroller{
      
  
        
       	function index()
	{
		 
		 if ($this->tank_auth->is_logged_in() && ( $this->tank_auth->get_userlevel() > 0 )) {
			 
			 $data['message']	= '';
		   
		   if ($message = $this->session->flashdata('message')) {
			 		     $data['message']	= $message;
			 			  }	 
			    
			 
	$data['info']	= $this->crdt;
	
				 
			   $data['menu']	= 6;
							 $data['title']	= "NewsPaper List";
                            $data['submenu']	= 'comment_list';
                           
                            $data['codemanage']	= "comment_list";
			   
			   
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
			$this->load->view('commentsnews/index');
			$this->load->view('foot');				
			
		   
		}
		
		elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/siteadmin/send_again/');

		} 
		
		
		   
		
	}
	
	 

	 
	 
function view($CommentsnewsID,$id=null, $type=null)
	{ 

if($type=="News")
 {	$data = $this->SiteModel->getfirstrow('news','*', array('NewsID'=>$id), 'NewsID DESC', 1,0);
    
}


elseif($type=="Motamot")
 {	
 
	$data = $this->SiteModel->getfirstrow('motamot','*', array('MotamotID'=>$id), 'MotamotID DESC', 1,0);
  	
}

elseif($type=="Opinion")
 {	
 
	$data = $this->SiteModel->getfirstrow('opinion','*', array('OpinionID'=>$id), 'OpinionID DESC', 1,0);
   
}

elseif($type=="Interview")
 {	
 
	$data = $this->SiteModel->getfirstrow('interview','*', array('InterviewID'=>$id), 'InterviewID DESC', 1,0);
  	
}

$data["comments"] = $this->SiteModel->getfirstrow('commentsnews','*', array('CommentsnewsID'=>$id), 'CommentsnewsID DESC', 1,0);

 $this->load->view('commentsnews/view.php',$data);
}


	
function commentsentry($id=null)
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
			  
			   $data = $this->SiteModel->getfirstrow('commentsnews','*', array('CommentsnewsID'=>$id), 'CommentsnewsID DESC', 1,0);
			  
		 
				 	
				
				  }
			
			 
			 
			 
			}
			 
			 else
			 {  
			$data = $_POST;
			 
			 }
			
			$id = $data['CommentsnewsID'];
			 
			 
			$this->form_validation->set_rules('CommentsMessage', 'CommentsMessage', 'trim|required|xss_clean');
                        $this->form_validation->set_rules('CommentsOriginal', 'CommentsOriginal', 'trim|required|xss_clean');
		 			
			 
				if ($this->form_validation->run()) {	
	 
			 unset($data['CommentsnewsID'],  $data['Submit']); 
		 
		
			
				if($id == null || $id == "")
						{
                   
			 		
							$id=$this->SiteModel->insert('commentsnews',$data);
							$msg = 'Saved Successfully';
						}
						else
						{
							$this->SiteModel->update('commentsnews',array('CommentsnewsID'=>$id), $data);
							$msg = 'Updated Successfully'; 
						}
			
                                                
                       
			 $this->_show_msg($msg, 'comments');
			}
			
			
			   $data['info']	= $this->crdt;
                            
                  
				  
				  
				  			   $data['menu']	= 6;
							 $data['title']	= "NewsPaper List";
                            $data['submenu']	= 'commentsnews_list';
                           
                            $data['codemanage']	= "commentsnews_list";
			   
			   
			 
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
			$this->load->view('commentsnews/recordentry');
			$this->load->view('foot');
			
		 }
		 
		 
		 
		}
	
	
	


  
	
	
        
        function getlist()
	{
                
		 if ($this->tank_auth->is_logged_in() && ( $this->tank_auth->get_userlevel() > 0 )):

		 
		 $this->load->database();
		
		
		
		
		
		 
		  /* Array of database columns which should be read and sent back to DataTables.)
         */
       // $aColumns = array('Date',  'CommentsnewsID', 'NewsID', 'Email','Name','CommentType', 'SUBSTR(CommentsMessage,0,100) as Comments');
                  $aColumns = array('NewsID', 'Date',  'CommentsnewsID',  'Name', 'Email', 'CommentsMessage','CommentType');
		             
        // DB table to use
        $sTable = 'commentsnews';
        //
    
	
	
	
	///////////////////deleting records
		$flag = "";
		
		if (isset($_REQUEST["sAction"]) && $_REQUEST["sAction"] == "group_action" && $_REQUEST["sGroupActionName"] == "Cancel") {
			
			foreach($_REQUEST["id"] as $record_id){
				  $this->db->delete($sTable, array('CommentsnewsID' => $record_id));
			$flag=1;
				}
			
			
			
    
 			 }
		
	
	
	
	
		///////////////////approving records
		 
		
		if (isset($_REQUEST["sAction"]) && $_REQUEST["sAction"] == "group_action" && $_REQUEST["sGroupActionName"] == "Approve") {
			
			foreach($_REQUEST["id"] as $record_id){
				  $this->db->update($sTable, array("IsApprove"=>"Yes"), array('CommentsnewsID' => $record_id));
			$flag=10;
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

	else {

		$this->db->order_by('CommentsnewsID','DESC');

		}
        
        /* 
         * Filtering
         * NOTE this does not match the built-in DataTables filtering which does it
         * word by word on any field. It's possible to do here, but concerned about efficiency
         * on very large tables, and MySQL's regex functionality is very limited
         */
		 
	 
                $this->db->where("IsApprove", "No");
        
            
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
		
		
		
		
		 
		//$this->db->group_by(array("GroupID")); 
		
		
        
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
        
		
		
		 
		
        foreach($rResult->result_array() as $aRow)
        {
            $row = array();
            
			 
			
//      '<span class="label label-sm label-'.(key($status)).'">'.(current($status)).'</span>',
 //     '<a href="javascript:;" class="btn btn-xs default"><i class="fa fa-search"></i> View</a>',
			
			$row[] = '<input type="checkbox" name="id[]" value="'.$aRow['CommentsnewsID'].'">'; 
	 		
			
			
            foreach($aColumns as $col)
            {
				 if( $col !="CommentsnewsID") 
                                 {   
                        if($col !="CommentsMessage" && $col !="Name" )             
	                   $row[] = ($col=="Date") ? date("Y-m-d",strtotime($aRow[$col])) : ($aRow[$col]);
                        else 
                            $row[] = mb_substr(strip_tags($aRow[$col]),0,30, 'UTF-8');
                                 }
            } 
		  	
			    
		 
				  
			  $row[] = '<a data-target="#ajax" data-toggle="modal" href="'.site_url("comments/view/".$aRow['CommentsnewsID']."/".$aRow['NewsID']."/".$aRow['CommentType']).'" class="btn btn-xs default"><i class="fa fa-search"></i> View</a>'
 . '&nbsp;<a href="'.site_url("comments/commentsentry/".$aRow['CommentsnewsID']).'" class="btn btn-xs default"><i class="fa fa-edit"></i> Edit</a>';
    		  
	
	       
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
                
	header("Content-type: application/json; charset=utf-8");
        echo json_encode($output);
	die;	 
		




		else: 
			echo "not allowed";

		
		endif; 
		 
		
		}
	
	
        
	
		
	function _show_msg($message, $url=null)
	{
		$this->session->set_flashdata('message', '<span style="color:red">'.$message.'</span>');
		//redirect('/siteadmin/');
		
		if($url !=null)
				redirect('/'.$url);    
		
		redirect('/record/recordlist');    
		
	}
	
		
	
	
	
}