<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class blogpost extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
 
		 $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		$this->load->model(array('SiteModel'));
		$this->load->model('tank_auth/users');
		
	}

	function index()
	{
		 
		 if ($this->tank_auth->is_logged_in() && ( $this->tank_auth->get_userlevel() ==9 )) {
			 
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['user_name']	= $this->tank_auth->get_username();
			$data['user_level']	= $this->tank_auth->get_userlevel();
			$data['user_image']	= $this->tank_auth->get_image();
			$data['message']	= '';
		   
		   if ($message = $this->session->flashdata('message')) {
			 		     $data['message']	= $message;
			 			  }	 
			    $data['prioritylist'] = $this->SiteModel->getlist('category','CategoryID as ID, CategoryName as Name', array('CategoryID  >' =>0),'CategoryID DESC', 100, 0);
				$data['Menusection'] = $this->SiteModel->getlist('menusection','MenuSectionID as ID, Caption as Name', array('MenuSectionID  >' =>0),'MenuSectionID DESC', 100, 0);  
			   $data['menu']	= 5;
			   
			   
    $data['javascriptfile'] =  array( 
    base_url().'assets/plugins/jquery-migrate-1.2.1.min.js',
    base_url().'assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js',
    base_url().'assets/plugins/bootstrap/js/bootstrap.min.js',
    base_url().'assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js',
    base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
    base_url().'assets/plugins/jquery.blockui.min.js',
    base_url().'assets/plugins/jquery.cookie.min.js',
    base_url().'assets/plugins/uniform/jquery.uniform.min.js',   
    base_url().'assets/scripts/app.js'
	);
	
	
	
	
			 
		    $this->load->view('head', $data);
			$this->load->view('blogpost/index');
			$this->load->view('foot');				
			
		   
		}
		
		elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/siteadmin/send_again/');

		} 
		
		
		   
		
	}
	
	 
	 







 
	
	
function entry($id=null)
	{
			
			$user_email = $this->tank_auth->get_user_email();
			$user_level =$this->tank_auth->get_userlevel();
 				 $user_id =  $this->tank_auth->get_user_id(); 
				 
		 
		if (!$this->tank_auth->is_logged_in()) {									// logged in
			redirect('');

		} elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/siteadmin/send_again/');

		}
		 
		 else  {
			 
			 
			 	
			if(!isset($_POST) || empty($_POST)) {
				if(!is_null($id))  //while edit
				 {
			   $data = $this->SiteModel->getfirstrow('blogpost','*', array('BlogpostID'=>$id), 'BlogpostID DESC', 1,0);
				//if(   !( ( $user_level == 6 && $data['RepresentativeID'] == $user_id) || ($user_id==$data['UserID']) || ($user_level == 9) ) )
				if (!$this->tank_auth->is_logged_in())
					{
						$msg = 'Wrong Request';
						$this->_show_msg($msg, 'blogger');
					}
				 }
				 	 else
			 		{
						$data = array(
						'BlogpostID'=>'',	 
						"UserID" => $user_id,   
						"Heading" => "",
						"Tagword" => "",
						"Detail" => "",
						"TotalVisit" => "",
						"CategoryID" => "",
						"IsPublish" => "Yes",
						"TotalPlus" => "",
						"TotalMinus" => "1",
						"IsActive" => 1,
						"EmbeddedCode" => "",
						"IsSelected" => "No",
						"sDate" => "",
						"Date" => date("Y-m-d H:i:s")
                     );			  
			   }
			}
			  
			 else
			 {  
				 $data = $_POST;
				 $url = $data['EmbeddedCode'];
                 parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
                 $video_id =  $my_array_of_vars['v'];
                 $img = "http://img.youtube.com/vi/".$video_id."/mqdefault.jpg";
				 
				 $base =  basename($img); 
                 $base2 =   explode('.',$base);
				 $imneme=$user_id.'_'.time();
				 $base = $imneme.'.'.$base2[1];
                 copy($img, $_SERVER['DOCUMENT_ROOT'].'/broadcast/cmsupdate/records/video_image/'.$base);
				 $data['Image'] ='records/video_image/'.$base;
			     }
				$id = $data['BlogpostID'];
				
		 		$this->form_validation->set_rules('Heading', 'Heading', 'trim|required|xss_clean'); 
				$this->form_validation->set_rules('Detail', 'Detail', 'trim|required|xss_clean');
		  	 	$this->form_validation->set_rules('Category', 'Category', 'trim|xss_clean'); 
			 	$this->form_validation->set_rules('Tagword', 'Tagword', 'trim|xss_clean'); 
			 	     
			if ($this->form_validation->run()) {	
			 
             unset($data['BlogpostID']);		 
			
			$data['UserID'] = $this->tank_auth->get_user_id();
		 
				if($id == null || $id == "")
						{
							$id=$this->SiteModel->insert('blogpost',$data);
							$datainfo['BlogpostID'] = $id;
							$id=$this->SiteModel->insert('allinfo',$datainfo);
							$msg = 'Saved Successfully';
						}
						else
						{
							$this->SiteModel->update('blogpost',array('BlogpostID'=>$id), $data);
						$msg = 'Updated Successfully';
						}
			
			 // $this->saveImages($id);
			  $this->_show_msg($msg, 'blogpost');
			}
			
			
			
			
			
			
			
			
			$data['Menusection'] = $this->SiteModel->getlist('menusection','MenuSectionID as ID, Caption as Name', array('MenuSectionID  >' =>0),'MenuSectionID DESC', 100, 0);  
				
				
			
			
			
			$data['selected_item'] = $data['CategoryID'];
			
			$data['CategoryList'] = $this->SiteModel->getlist('postcategory','ID, CategoryName as Name', array('ID  >' =>0),'ID DESC', 100, 0); 
					
						 
			$data['user_id']	= $user_id;
			$data['user_name']	= $this->tank_auth->get_username();
			$data['user_email']	= $user_email;
			$data['user_level']	= $user_level;
			$data['user_image']	= $this->tank_auth->get_image();
			$data['menu']	= 5;
			
			 
				 
				 
			 $data['javascriptfile'] =  array( 
   base_url().'assets/plugins/jquery-migrate-1.2.1.min.js',
   base_url().'assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js',
    base_url().'assets/plugins/bootstrap/js/bootstrap.min.js',
    base_url().'assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js',
   base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
    base_url().'assets/plugins/jquery.blockui.min.js',
    base_url().'assets/plugins/jquery.cookie.min.js',
    base_url().'assets/plugins/uniform/jquery.uniform.min.js',
     
	  base_url().'assets/plugins/jquery.pulsate.min.js',
	  base_url().'assets/plugins/bootstrap-daterangepicker/moment.min.js',
	  base_url().'assets/plugins/bootstrap-daterangepicker/daterangepicker.js',
	  base_url().'assets/plugins/gritter/js/jquery.gritter.js',
	  base_url().'assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js',
	  base_url().'assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js',
	   base_url().'assets/plugins/jquery.sparkline.min.js',
		   base_url().'assets/plugins/select2/select2.min.js',
		   
		      base_url().'assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js',
			     base_url().'assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js',
				    base_url().'assets/plugins/ckeditor/ckeditor.js',
	    base_url().'assets/scripts/app.js',
		 base_url().'assets/scripts/index.js',
		  base_url().'assets/scripts/tasks.js'
		  
		   
		   
	);
			
			$this->load->view('head', $data);
			$this->load->view('blogpost/recordentryblogpost');
			$this->load->view('foot');
			
		 }
		}
	
	
	
	 
	
	 function blogpostlist()
	{
	$this->load->database();
	
	$user_level = $this->tank_auth->get_userlevel(); 
	$user_id = $this->tank_auth->get_user_id(); 
	
	$condition = "UserID >=0 ";
	if($user_level==9){
		$condition = "UserID >=0 ";
		}
		
	else if($user_level==6){
	 
		$condition = "UserID >= 0 ";
		}
		
	else if($user_level==5){
	 
		$condition = "UserID >= 0 ";
		}		
	  
	$pagenum = $_GET['pagenum'];
	$pagesize = $_GET['pagesize'];
	/*$pagenum = 0;
	$pagesize = 10;*/
	$start = $pagenum * $pagesize;
	 
	 
	$query = $this->db->query("SELECT SQL_CALC_FOUND_ROWS BlogpostID, Date,   Heading, IsPublish, IsSelected  FROM blogpost WHERE $condition ORDER BY BlogpostID DESC LIMIT $start, $pagesize");
	
	$total_rows = $this->db->query("SELECT FOUND_ROWS() AS  found_rows")->row()->found_rows;
	 
	
	$filterquery = "";
	
	// filter data.
	if (isset($_GET['filterscount']))
	{
		$filterscount = $_GET['filterscount'];
		
		if ($filterscount > 0)
		{
			$where = " WHERE $condition AND (";
			$tmpdatafield = "";
			$tmpfilteroperator = "";
			
			/*$return = '';*/
			for ($i=0; $i < $filterscount; $i++)
		    {
				// get the filter's value.
				$filtervalue = $_GET["filtervalue" . $i];
				/*if($_GET["filterdatafield" . $i] == 'ShippedDate')
				$return  = $filtervalue;*/
				// get the filter's condition.
				$filtercondition = $_GET["filtercondition" . $i];
				// get the filter's column.
				$filterdatafield = $_GET["filterdatafield" . $i];
				// get the filter's operator.
				$filteroperator = $_GET["filteroperator" . $i];
				
				if ($tmpdatafield == "")
				{
					$tmpdatafield = $filterdatafield;			
				}
				else if ($tmpdatafield <> $filterdatafield)
				{
					$where .= ")AND(";
				}
				else if ($tmpdatafield == $filterdatafield)
				{
					if ($tmpfilteroperator == 0)
					{
						$where .= " AND ";
					}
					else $where .= " OR ";	
				}
				
				
		 
					
				 	
				
				if($filterdatafield=='Date')
					{
						$filterdatafield = "date(".$filterdatafield.")";
						
						$string = $filtervalue;   // 'Tue Jul 16 1996 23:59:59 GMT+0600 (Central Asia Standard Time)';
						list($firstWord) = explode('GMT', $string);
						$old_date = trim($firstWord);
						
						
						 $format = "Y-m-d";
 						 $filtervalue = date($format, strtotime($old_date));   //$filtervalue = '1996-07-16';
 
					 
					}	
			 	
					
				
				// build the "WHERE" clause depending on the filter's condition, value and datafield.
				switch($filtercondition)
				{
					
					
					
					case "CONTAINS":
						$where .= " " . $filterdatafield . " LIKE '%" . $filtervalue ."%'";
						break;
					case "DOES_NOT_CONTAIN":
						$where .= " " . $filterdatafield . " NOT LIKE '%" . $filtervalue ."%'";
						break;
					case "EQUAL":
						$where .= " " . $filterdatafield . " = '" . $filtervalue ."'";
						break;
					case "NOT_EQUAL":
						$where .= " " . $filterdatafield . " <> '" . $filtervalue ."'";
						break;
					case "GREATER_THAN":
						$where .= " " . $filterdatafield . " > '" . $filtervalue ."'";
						break;
					case "LESS_THAN":
						$where .= " " . $filterdatafield . " < '" . $filtervalue ."'";
						break;
					case "GREATER_THAN_OR_EQUAL":
						$where .= " " . $filterdatafield . " >= '" . $filtervalue ."'";
						break;
					case "LESS_THAN_OR_EQUAL":
						$where .= " " . $filterdatafield . " <= '" . $filtervalue ."'";
						break;
					case "STARTS_WITH":
						$where .= " " . $filterdatafield . " LIKE '" . $filtervalue ."%'";
						break;
					case "ENDS_WITH":
						$where .= " " . $filterdatafield . " LIKE '%" . $filtervalue ."'";
						break;
				}
								
				if ($i == $filterscount - 1)
				{
					$where .= ")";
				}
				
				$tmpfilteroperator = $filteroperator;
				$tmpdatafield = $filterdatafield;			
			}
			 
		
		
		$sql_query = "SELECT   BlogpostID, Date,   Heading, IsPublish, IsSelected  FROM blogpost ".$where;
		$query = $this->db->query("SELECT  BlogpostID, Date,   Heading, IsPublish, IsSelected  FROM blogpost ".$where);
		$filterquery = $sql_query ;
		 
		
		$new_total_rows = $this->db->query("SELECT FOUND_ROWS() AS found_rows")->row()->found_rows;
		$query = $this->db->query("SELECT  BlogpostID, Date,   Heading, IsPublish, IsSelected  FROM blogpost ".$where." LIMIT $start, $pagesize");	
		$total_rows = $new_total_rows;
 
		
		
		
		}
	}
	
	if (isset($_GET['sortdatafield']))
	{
	
		$sortfield = $_GET['sortdatafield'];
		$sortorder = $_GET['sortorder'];
		
		if ($sortorder != '')
		{
			if ($_GET['filterscount'] == 0)
			{
				if ($sortorder == "desc")
				{
					$query = "SELECT  BlogpostID, Date,   Heading, IsPublish, IsSelected  FROM blogpost WHERE $condition ORDER BY" . " " . $sortfield . " DESC LIMIT $start, $pagesize";
				}
				else if ($sortorder == "asc")
				{
					$query = "SELECT  BlogpostID, Date,   Heading, IsPublish, IsSelected  FROM blogpost  WHERE $condition ORDER BY" . " " . $sortfield . " ASC LIMIT $start, $pagesize";
				}
			}
			else
			{
				if ($sortorder == "desc")
				{
					$filterquery .= " ORDER BY" . " " . $sortfield . " DESC LIMIT $start, $pagesize";
				}
				else if ($sortorder == "asc")	
				{
					$filterquery .= " ORDER BY" . " " . $sortfield . " ASC LIMIT $start, $pagesize";
				}
				$query = $filterquery;
			}	
			
			$query = $this->db->query($query);	
		}
		
		
		
	}
	
	
	
	
	
	$result = $query->result_array();

	$orders = null;
	// get data and store in a json array
	
	
	 	 
	 
 
	 
	 
	 
 
	 
	  
	foreach ($result as $row) {
		$orders[] = array(
			'ID' => $row['BlogpostID'],
			'ViewID' => $row['BlogpostID'],
			 
			'Heading' => $row['Heading'],
			  	'DeleteID' => $row['BlogpostID'],
			 'BlogpostID' => $row['BlogpostID'],
	 
			  'Date' => date("Y-m-d", strtotime($row['Date'])),
			'IsPublish' => $row['IsPublish'],
			'IsSelected' => $row['IsSelected']
			 
			
		  );  
	}      
      $data[] = array(
       'TotalRows' => $total_rows,
	   'Rows' => $orders/*,
	   'daterangle'=>$return*/
	);

	echo json_encode($data);
		
		
		}
	
	
 
	
	
 
	
	 
	
	 
	
	
	
	
	function infodetail($id)
	{
			
	 
      // sleep(4);blogpost
	    $data['detailblogpost'] =  $this->SiteModel->getfirstrow('blogpost','*', array('BlogpostID' =>$id),'BlogpostID DESC', 1, 0);
	   
	  $data['detailinfo'] =  $this->SiteModel->getfirstrow('users','*', array('id' =>$data['detailblogpost']['UserID']),'UserID DESC', 1, 0);
	
	  $data['otherinfo'] =   array('TotalBlog'=>'Unknown','TotalVisit'=>'Demo');
	  
	     
	   
	header("Content-type: application/json; charset=utf-8");	  
	 echo json_encode($data); 
	 
	die;
	
	
		 
			
	  
		
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
	
function subcategoryoption()
        {
            
			$district_id = $_POST['id'];
			$thanalist = $this->SiteModel->getlist('subcategory','SubcategoryID as ID, SubcategoryName as Name', array('CategoryID' =>$_POST['id']),'SubcategoryID DESC', 50, 0);
			
			 	 
            $type = '<option value="">choose...</option>';
           
		   
		   foreach($thanalist as $row){
		      $type .= '<option value="' . $row['ID'] . '">' . $row['Name'] . '</option>';
            }
			
			header("Content-type: text/html; charset=utf-8");
            echo  $type;
			die;
       
	   
	   
	   
	    }
	
	
	
	
 
 	
	
		
	function _show_msg($message, $url=null)
	{
		$this->session->set_flashdata('message', '<span style="color:red">'.$message.'</span>');
		//redirect('/siteadmin/');
		
		if($url !=null)
				redirect('/'.$url);    
		
		redirect('/record/recordlist');    
		
	}
	
	
	
	
	
	
	
	 
	
	
	
	
 
	

	

	

 
	

	

	

 


 
	function infodelete($id)
	{
		/* if ( ( $this->tank_auth->get_userlevel() ==9 ) &&  $this->tank_auth->is_logged_in()) {	*/
		 if (   $this->tank_auth->is_logged_in()) {					  
						  $msg = $this->SiteModel->delete('blogpost',array("BlogpostID"=>$id));	
						if($msg == TRUE)
							$this-> _show_msg('Deleted successfully','blogpost');	
						elseif($msg == FALSE)
							$this-> _show_msg('Wrong Request', 'blogpost');			 
						 	
		 }
 		else
		{
			$this-> _show_general('Wrong Request');
		}		

		}
	
	
	
	function infodeleterow()
	{
		header('Content-Type: text/plain');
		/*if ( ( $this->tank_auth->get_userlevel() ==9 ) &&  $this->tank_auth->is_logged_in()) {	*/
		if (  $this->tank_auth->is_logged_in()) {	
		 $msg = $this->SiteModel->delete('blogpost',array("BlogpostID"=>$_POST['Item_ID']));		
	 
 		if($msg == TRUE)
			echo 'OKAY';
		else 
		   echo 'error_message';
		    
		}
		
		
		else 
		   echo 'error_message';
		    
	      }
	
	
	
	
	
	
	
	
	
	
	function view($id){
		
				 $user_level = $this->tank_auth->get_userlevel(); 
				 $user_id =  $this->tank_auth->get_user_id(); 
				 
				  
				   
				 $data['blogdetail'] = $this->SiteModel->getfirstrow('blogpost','*', array('BlogpostID'=>$id), 'BlogpostID DESC', 1,0);
				 $data['bloggerinfo'] = $this->SiteModel->getfirstrow('users','*', array('id'=>$data['blogdetail']['UserID']), 'id DESC', 1,0);
				 
				
			   
				  
	 
	 
	   	
	 
	 
	 
	 
	 		
				
				if($this->tank_auth->is_logged_in())  
				
				{
					
					$data['user_id']	= $user_id;
			$data['user_name']	= $this->tank_auth->get_username();
			$user_email = $this->tank_auth->get_user_email();
			$data['user_level']	= $user_level;
			$data['user_image']	= $this->tank_auth->get_image();
			$data['menu']	= 5;
			
			$data['user_image']	= $this->tank_auth->get_image(); 
				 
			$data['javascriptfile'] =  array( 
   base_url().'assets/plugins/jquery-migrate-1.2.1.min.js',
   base_url().'assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js',
    base_url().'assets/plugins/bootstrap/js/bootstrap.min.js',
    base_url().'assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js',
   base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
    base_url().'assets/plugins/jquery.blockui.min.js',
    base_url().'assets/plugins/jquery.cookie.min.js',
    base_url().'assets/plugins/uniform/jquery.uniform.min.js',
	    base_url().'assets/scripts/app.js' 
		   
	);
	
	
	
	 
	
	
			$this->load->view('head', $data);
			$this->load->view('blogpost/detailinfo', $data);
			$this->load->view('foot');
					
						
					
					}
		
		
		
				else{
					
					 $this->_show_msg($msg, '');
					 
					
					}
		
		
		}
	

function emailcheck($email, $id)
 {
  
   
  $rowcount =  $this->SiteModel->getcolumn('siteuser','COUNT(SiteuserID)', array('SiteuserID !=' =>$id, 'Email'=>$email),'SiteuserID DESC', 1, 0);
  
 if ($rowcount > 0)
  {
   
  $this->form_validation->set_message('emailcheck', 'Anotherone has used this email.');
   return false;
  
  }
  else{
     return true;
	
 	 }
 }	


function namecheck($name, $id)
 {
  
   
  $rowcount =  $this->SiteModel->getcolumn('siteuser','COUNT(SiteuserID)', array('SiteuserID !=' =>$id, 'Name'=>$name),'SiteuserID DESC', 1, 0);
  

 if ($rowcount > 0)
  {
   
  $this->form_validation->set_message('namecheck', 'Anotherone has used this name.');
   return false;
  
  }
  else{
     return true;
	
  }
 }	
	
	
	
	function usernamecheck($username, $id)
 {
  
   $rowcount =  $this->SiteModel->getcolumn('siteuser','COUNT(SiteuserID)', array('SiteuserID !=' =>$id, 'Username'=>$username),'SiteuserID DESC', 1, 0);
  

 if ($rowcount > 0)
  {
   $this->form_validation->set_message('usernamecheck', 'Anotherone has used this username.');
   return false;
  
 
  }
  else{
  return true;	
  }
 }	
	
	
}