<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class article extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('url','form'));
		$this->load->library('tank_auth');
			$this->load->library('form_validation');
		$this->load->model(array('SiteModel'));
	}

	 
	
	
	
	
	
	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/siteadmin/login/');
		} else {
			
			
			
			$data['message']	= '&nbsp;';
		   
		   if ($message = $this->session->flashdata('message')) {
			 		     $data['message']	= $message;
			 			  }	
			
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['user_name']	= $this->tank_auth->get_username();
			
				 $data['menu']	= 4;
			
			
			 $data['Menusection'] = $this->SiteModel->getlist('menusection','MenuSectionID as ID, Caption as Name', array('MenuSectionID  >' =>0),'MenuSectionID DESC', 100, 0);  
			
			$this->load->view('head', $data);
			$this->load->view('article/recordlist');
			$this->load->view('foot');
			
			
			
			
			
			
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
			  
			  
			  
			   $data = $this->SiteModel->getfirstrow('article','*', array('ArticleID'=>$id), 'ArticleID DESC', 1,0);
				
				 
				//if(   !( ( $user_level == 6 && $data['RepresentativeID'] == $user_id) || ($user_id==$data['UserID']) || ($user_level == 9) ) )
				if (!$this->tank_auth->is_logged_in())
					{
					
						$msg = 'Wrong Request';
						$this->_show_msg($msg, 'article/recordlist');
					}
				
		 
				
				
		 
			$data['selected_item_category'] = $data['CategoryID'];
			$data['selected_item_subcategory'] = $data['SubcategoryID'];
				 
				  
				$data['prioritylist'] = $this->SiteModel->getlist('category','CategoryID as ID, CategoryName as Name', array('CategoryID  >' =>0),'CategoryID DESC', 100, 0);
				
				$data['Categorylist'] = $this->dropdown($data['prioritylist']); 
				
				
				$data['Subcategorylist'] = $this->dropdown($this->SiteModel->getlist('subcategory','SubcategoryID as ID, SubcategoryName as Name', array('CategoryID' =>$data['CategoryID']),'SubcategoryID DESC', 1000, 0)); 
				 	
				
				 }
			
			 else
			 		{
						$data = array(
						'ArticleID'=>'',	 
						"UserID" => $user_id,
						"Heading" => "",
						"Summary" => "",
						"Detail" => "", 
						  
						
						
						"CategoryID" => "",
						"SubcategoryID" => "",
						"Category" => "Article",
						"IsActive" => 1,
						"Latestnews" => 'No',
						"Breaking" => 'No',
						"FocusArticle" => 'No',
						"SpecialArticle" => 'No',
						
						"MainDayArticle" => 'No',	
						"Selected" => 'No',	
						
									
						"Date" => date("Y-m-d H:i:s"),
						"Priority" => "100",
						 
						 "Shoulder" => "",
						 "ImageCaption" => "",
						 "ArticleSource" => "",
						 "DistrictID" => "",
						 
						'selected_item_district' =>'',
						 
						'selected_item_category'=>'',
						'selected_item_subcategory'=>'',
						 
						'prioritylist' => $this->SiteModel->getlist('category','CategoryID as ID, CategoryName as Name', array('CategoryID  >' =>0),'CategoryID DESC', 100, 0),
						'Subcategorylist' => array(''=>'Select'),
						'Categorylist' => $this->dropdown($this->SiteModel->getlist('category','CategoryID as ID, CategoryName as Name', array('CategoryID  >' =>0),'CategoryID DESC', 1000, 0)) 
						
						
						
					 
);			     }	
			 
			 
			}
			  
			 else
			 {  
			$data = $_POST;
			 
			$data['selected_item_category'] = $_POST['CategoryID'];
			$data['selected_item_subcategory'] = $_POST['SubcategoryID'];
		 
			 
			
			$data['prioritylist'] = $this->SiteModel->getlist('category','CategoryID as ID, CategoryName as Name', array('CategoryID  >' =>0),'CategoryID DESC', 100, 0);
				
				$data['Categorylist'] = $this->dropdown($data['prioritylist']); 
			
			 
			
			
			
			$data['Subcategorylist'] = $this->dropdown($this->SiteModel->getlist('subcategory','SubcategoryID as ID, SubcategoryName as Name', array('CategoryID' =>$_POST['CategoryID']),'SubcategoryID DESC', 1000, 0)); 
			
			 
						 
				 
			
			
		 
			
			
			 }
			
			$id = $data['ArticleID'];
			 
			
			 
		 
						  
						
						
					  
						 
					  
		 
			 		$this->form_validation->set_rules('Heading', 'Heading', 'trim|required|xss_clean'); 
			$this->form_validation->set_rules('Summary', 'Summary', 'trim|required|xss_clean'); 
			$this->form_validation->set_rules('Detail', 'Detail', 'trim|required|xss_clean'); 
		  	 $this->form_validation->set_rules('Priority', 'Priority', 'trim|required|xss_clean'); 
			  $this->form_validation->set_rules('ImageCaption', 'ImageCaption', 'trim|xss_clean'); 
			    
			  $this->form_validation->set_rules('Date', 'Date', 'trim|required|xss_clean'); 			 
			 	 
			 			$this->form_validation->set_rules('CategoryID', 'Catagory', 'trim|xss_clean'); 
				$this->form_validation->set_rules('SubcategoryID', 'Sub catagory', 'trim|xss_clean'); 	 
				
			    
			 
				if ($this->form_validation->run()) {	
			
			 
			 unset($data['ArticleID'],   $data['selected_item_category'],$data['selected_item_subcategory'],$data['Categorylist'],$data['Subcategorylist'],$data['prioritylist']); 
		 
		     
			$district = $this->SiteModel->getfirstrow('subcategory','SubcategoryName', array('SubcategoryID'=>$_POST['SubcategoryID']), 'SubcategoryID DESC', 1,0);
			$data['SubcategoryName'] = isset($district["SubcategoryName"])? $district["SubcategoryName"] :'';
			
			
			$data['UserID'] = $this->tank_auth->get_user_id();
			$data['EntryDate'] = date("Y-m-d H:i:s");
		 
				if($id == null || $id == "")
						{
							$id=$this->SiteModel->insert('article',$data);
							$msg = 'Saved Successfully';
						}
						else
						{
							$this->SiteModel->update('article',array('ArticleID'=>$id), $data);
							$msg = 'Updated Successfully'; 
						}
			
			$this->saveImages($id);
			
			
			
			 $this->_show_msg($msg, 'article');
			}
			
			
			$data['Menusection'] = $this->SiteModel->getlist('menusection','MenuSectionID as ID, Caption as Name', array('MenuSectionID  >' =>0),'MenuSectionID DESC', 100, 0);  
						 
				$data['user_id']	= $this->tank_auth->get_user_id();
			$data['user_name']	= $this->tank_auth->get_username();
			$data['user_email']	= $user_email;
			$data['user_level']	= $user_level;
			
				 $data['menu']	= 4;
			$data['tinymce']	= TRUE;
			$this->load->view('head', $data);
			$this->load->view('article/recordentryarticle');
			$this->load->view('foot');
			
		 }
		 
		 
		 
		 
		 
		 
		 
		
		}
	
	
	
	 
	
	 function articlelist()
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
	$start = $pagenum * $pagesize;
	/*$query = "SELECT SQL_CALC_FOUND_ROWS ArticleID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo LIMIT $start, $pagesize";
	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
	$sql = "SELECT FOUND_ROWS() AS `found_rows`;";
	$rows = mysql_query($sql);
	$rows = mysql_fetch_assoc($rows);
	$total_rows = $rows['found_rows'];*/
	
	$query = $this->db->query("SELECT SQL_CALC_FOUND_ROWS ArticleID, Heading,SubcategoryName,Category,IsActive,Date,Priority FROM article WHERE $condition LIMIT $start, $pagesize");
	
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
			// build the query.
			/*$query = "SELECT ArticleID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo ".$where;
			$filterquery = $query;
			$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
			$sql = "SELECT FOUND_ROWS() AS `found_rows`;";
			$rows = mysql_query($sql);
			$rows = mysql_fetch_assoc($rows);
			$new_total_rows = $rows['found_rows'];		
			$query = "SELECT ArticleID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo ".$where." LIMIT $start, $pagesize";		
			$total_rows = $new_total_rows;	*/
		
		
		$sql_query = "SELECT  ArticleID, Heading,SubcategoryName,IsActive,Date,Priority  FROM article ".$where;
		$query = $this->db->query("SELECT  ArticleID, Heading,SubcategoryName,IsActive,Date,Priority  FROM article ".$where);
		$filterquery = $sql_query ;
		$result = $query->result_array();
		
		$new_total_rows = $this->db->query("SELECT FOUND_ROWS() AS found_rows")->row()->found_rows;
		$query = $this->db->query("SELECT  ArticleID, Heading,SubcategoryName,IsActive,Category,Date,Priority  FROM article ".$where." LIMIT $start, $pagesize");	
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
					$query = "SELECT  ArticleID, Heading,SubcategoryName,IsActive,Category,Date,Priority  FROM article WHERE $condition ORDER BY" . " " . $sortfield . " DESC LIMIT $start, $pagesize";
				}
				else if ($sortorder == "asc")
				{
					$query = "SELECT  ArticleID, Heading,SubcategoryName,IsActive,Category,Date,Priority  FROM article  WHERE $condition ORDER BY" . " " . $sortfield . " ASC LIMIT $start, $pagesize";
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
			'ID' => $row['ArticleID'],
			'ViewID' => $row['ArticleID'],
			'Heading' => strip_tags($row['Heading']),
			'DeleteID' => $row['ArticleID'],
			 'ArticleID' => $row['ArticleID'],
			'Date' => date("Y-m-d", strtotime($row['Date'])),
			 'SubcategoryName' => $row['SubcategoryName'],
			 'Category' => $row['Category'],
			 
			'IsActive' => $row['IsActive'],
			'Priority' =>  $row['Priority']  
		  );
	}      
      $data[] = array(
       'TotalRows' => $total_rows,
	   'Rows' => $orders/*,
	   'daterangle'=>$return*/
	);

	echo json_encode($data);
		
		
		}
	
	
 
	
	
	function itemlist()
	{
			
	 
       
	    $data['Visit'] = array('0'=>'Masum','1'=>'Rabiul');
	  
	  
	header("Content-type: application/json; charset=utf-8");	  
	  echo json_encode($data['Visit']); 
	 
	die;
	
	
		 
			
	  
		
	}
	
	 
	
	
	
	 
	
	 
	
	
	
	
	function infodetail($id)
	{
			
	 
      // sleep(4);
	   
	  $data['detailinfo'] =  $this->SiteModel->getfirstrow('article','*', array('ArticleID' =>$id),'ArticleID DESC', 1, 0);
	 
	 
	  $data['users'] =   $this->SiteModel->getfirstrow('users','username, email', array('id' =>$data['detailinfo']['UserID']),'id DESC', 1, 0);
	  
	     
	   
	header("Content-type: application/json; charset=utf-8");	  
	 echo json_encode($data); 
	 
	die;
	
	
		 
			
	  
		
	}
	
	
	
	function listitem()
	{
			
	 
        $data['user_id']	= $this->tank_auth->get_user_id();
		$data['user_name']	= $this->tank_auth->get_username();;
			
				 $data['menu']	= 4;
			$this->load->view('head', $data);
			$this->load->view('recorditem');
			$this->load->view('foot');
	
	
		 
			
	  
		
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
	
	
	
	
	
	
	
	
	
	
	
	
	
function email_check($email){
	
	$emailfromusers  = $this->SiteModel->getfirstrow('users','id', array('email' => $email ),'id DESC', 1, 0);	
	
	
	if(count($emailfromusers) > 0)
	{
				$userid  = $this->SiteModel->getfirstrow('hajjiinfo','UserID', array('UserID' =>$emailfromusers['id']), 'ArticleID DESC', 1, 0);	
				 
				  
								 if (count($userid) > 0)
							  {
							   $this->form_validation->set_message('email_check', 'He/She is already added.');
							  
							   return false;
							  }
							  else{
								
							   return true;
								 }	 
	}
	
	 
	else {
		$this->form_validation->set_message('email_check', 'This email ID is not available.');
  
   return false;
		}
	
  
	 
	}
	
	
	
	
	
	 
	
function email_checkwithid($email, $id){
	
	$emailfromusers  = $this->SiteModel->getfirstrow('users','id', array('email' => $email ),'id DESC', 1, 0);	
	
	
	if(count($emailfromusers) > 0)
	{
				$userid  = $this->SiteModel->getfirstrow('hajjiinfo','UserID,ArticleID', array('UserID' =>$emailfromusers['id'], 'ArticleID !=' => $id), 'ArticleID DESC', 1, 0);	
				 
				  
								 if (count($userid) > 0)
							  {
							   $this->form_validation->set_message('email_checkwithid', 'He/She is already added.');
							  
							   return false;
							  }
							  else{
								 
							   return true;
								 }	 
	}
	
	 
	else {
		$this->form_validation->set_message('email_checkwithid', 'This email ID is not available.');
  
   return false;
		}
	
  
	 
	}	
	
	
	
	
	
	
 
	
 
	
	
	
		
	function _show_msg($message, $url=null)
	{
		$this->session->set_flashdata('message', '<span style="color:red">'.$message.'</span>');
		//redirect('/siteadmin/');
		
		if($url !=null)
				redirect('/'.$url);    
		
		redirect('/record/recordlist');    
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	function initializeUpload($uploadDir = null)

	{

		$config['upload_path'] = $uploadDir;

		$config['allowed_types'] = 'gif|pdf|doc|docx|jpg|jpeg|png';

		$config['max_size'] = '0';

		

		/*$config['max_width'] = '1600';

		$config['max_height'] = '1200';*/

		

		$this->load->library('upload', $config);

		$this->upload->initialize($config);

	}

	

	

	

	/*

	Image handleing starts

	*/

	

	function saveImages($member_id)

	{
		
		$folder = date('Ym');
        $uploadDir = "assets/records/article/".$folder;

		

				if( !file_exists($uploadDir) || !is_dir($uploadDir))

		

		mkdir("$uploadDir");

				

		$uploadDir = "./assets/records/article/".$folder;

		$imageDirectoryUrl = "assets/records/article/".$folder."/";

		 
		$imageInfo = array();

		

		$this->initializeUpload($uploadDir);

		 

		if($this->upload->do_upload("Image"))

		{

			$imageInfo['Image'] = "$imageDirectoryUrl".$this->renameFile("$member_id"."_1");

			 
		}
 
		

		

		if($this->upload->do_upload("Image"))

		{

			$imageInfo['Thumbimage'] = "$imageDirectoryUrl".$this->renameUploadedFile("$member_id"."_2");

			

			

		}

		
 

		if(sizeof($imageInfo) > 0)

		{

			 $this->SiteModel->update('article',array('ArticleID'=>$member_id),$imageInfo);

			//$this->edit_image($imageInfo);

		}

	}

	

	

	

	

	

	function renameFile($newName)

	{

	
		$this->load->library('image_lib');
		$uploadInfo = $this->upload->data();
		$newName = "$newName".$uploadInfo["file_ext"];
		if(file_exists($uploadInfo["file_path"].$newName))
		{
			unlink($uploadInfo["file_path"].$newName);
		}		
		 $config['image_library']  = 'gd2';
		 $config['source_image']=	$uploadInfo['full_path'] ;
		 $config['maintain_ratio'] = FALSE;
		 $config['width']          = 635;
		 $config['height']         = 440;
		
		 $this->image_lib->initialize($config);
		 if ( ! $this->image_lib->resize())
		 {
		  return $this->_errors = $this->image_lib->display_errors('<div class="message error"><p>', '</p></div>');
		 }
		rename($uploadInfo["full_path"], $uploadInfo["file_path"].$newName);
		return $newName;

	}

	
function renameUploadedFile($newName)
	{
		$this->load->library('image_lib');
		$uploadInfo = $this->upload->data();
		$newName = "$newName".$uploadInfo["file_ext"];
		if(file_exists($uploadInfo["file_path"].$newName))
		{
			unlink($uploadInfo["file_path"].$newName);
		}		
		 $config['image_library']  = 'gd2';
		 $config['source_image']=	$uploadInfo['full_path'] ;
		 $config['maintain_ratio'] = FALSE;
		 $config['width']          = 120;
		 $config['height']         = 85;
		
		 $this->image_lib->initialize($config);
		 if ( ! $this->image_lib->resize())
		 {
		  return $this->_errors = $this->image_lib->display_errors('<div class="message error"><p>', '</p></div>');
		 }
		rename($uploadInfo["full_path"], $uploadInfo["file_path"].$newName);
		return $newName;
	}



 
	function infodelete($id)
	{
		/* if ( ( $this->tank_auth->get_userlevel() ==9 ) &&  $this->tank_auth->is_logged_in()) {	*/
		 if (   $this->tank_auth->is_logged_in()) {					  
						  $msg = $this->SiteModel->delete('article',array("ArticleID"=>$id));	
						if($msg == TRUE)
							$this-> _show_msg('Deleted successfully','article');	
						elseif($msg == FALSE)
							$this-> _show_msg('Wrong Request', 'article');			 
						 	
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
		 $msg = $this->SiteModel->delete('article',array("ArticleID"=>$_POST['Item_ID']));		
	 
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
				 
				 $data = $this->SiteModel->getfirstrow('article','*', array('ArticleID'=>$id), 'ArticleID DESC', 1,0);
				   
				   
				 
				  
				
				 $data['Category'] = $this->SiteModel->getcolumn('Category','CategoryName', array('CategoryID' =>$data['CategoryID']),'CategoryID DESC', 1, 0);  
				 
				
				 $data['SubCategory'] = $this->SiteModel->getcolumn('subcategory','SubcategoryName', array('SubcategoryID' =>$data['SubcategoryID']),'SubcategoryID DESC', 1, 0); 
				
				if($this->tank_auth->is_logged_in())  
				
				{
					
					
						$this->load->view('article/detailinfo', $data);
					
					}
		
		
		
				else{
					
					 $this->_show_msg($msg, '');
					 
					
					}
		
		
		}
	
	
	
	
	
	
	
}
