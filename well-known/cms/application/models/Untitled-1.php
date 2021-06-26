<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class record extends CI_Controller
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
			redirect('/auth/login/');
		} else {
			
			
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['user_name']	= $this->tank_auth->get_username();
			
			
			 $data['menu']	= 5;
			$this->load->view('head', $data);
			$this->load->view('recordlist');
			$this->load->view('foot');
			
			
			
			
			
			
		}
	}
	
	
	
	
	
	
	function recordlist()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			
			
			
			$data['message']	= '&nbsp;';
		   
		   if ($message = $this->session->flashdata('message')) {
			 		     $data['message']	= $message;
			 			  }	
			
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['user_name']	= $this->tank_auth->get_username();
			
				 $data['menu']	= 5;
			
			$this->load->view('head', $data);
			$this->load->view('userinfo/recordlist');
			$this->load->view('foot');
			
			
			
			
			
			
		}
	}
	
	
	
	
	
	
	function entry($id=null)
	{
			
			$user_email = $this->tank_auth->get_user_email();
			$user_level =$this->tank_auth->get_userlevel();

		if (!$this->tank_auth->is_logged_in()) {									// logged in
			redirect('');

		} elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/auth/send_again/');

		}
		 
		 else  {
			 
			 
			 	
			if(!isset($_POST) || empty($_POST)) {
			
				if(!is_null($id))  //while edit
				 {
			  
			  
			  
			   $data = $this->SiteModel->getfirstrow('hajjiinfo','*', array('InfoID'=>$id), 'InfoID DESC', 1,0);
				
				 $user_level = $this->tank_auth->get_userlevel(); 
				 $user_id =  $this->tank_auth->get_user_id(); 
				
				if(   !( ( $user_level == 6 && $data['RepresentativeID'] == $user_id) || ($user_id==$data['UserID']) || ($user_level == 9) ) )
					{
					
						$msg = 'Wrong Request';
						$this->_show_msg($msg, 'record/recordlist');
					}
				
				$data["Email"] = $this->SiteModel->getcolumn('users','email', array('id' =>$data['UserID']),'id DESC', 1, 0); 
				$data["selected_item"] = $data["DistrictID"]; 
				$data["selected_item_thana"] = $data["ThanaID"]; 
				$data["selected_item_blood"] = $data["BGroup"]; 
				$data["selected_item_representative"] = $data["RepresentativeID"];  
				$data["selected_item_area"] = $data["AreaID"]; 
				$data["Districtlist"] = $this->dropdown($this->SiteModel->getlist('district','DistrictID as ID, DistrictName as Name', array('DistrictID >' =>0),'DistrictID DESC', 1000, 0)); 
				$data["Thanalist"] =  $this->dropdown($this->SiteModel->getlist('thana','ThanaID as ID, ThanaName as Name', array('DistrictID' =>$data["DistrictID"]),'ThanaID DESC', 1000, 0)); 
				$data["Representativelist"] = $this->dropdown($this->SiteModel->getlist('representative','UserID as ID, RepresentativeName as Name', array('RepresentativeID >' =>0),'RepresentativeID DESC', 1000, 0)); 
				$data["Arealist"] = $this->dropdown($this->SiteModel->getlist('area','AreaID as ID, AreaName as Name', array('AreaID >' =>0),'AreaID DESC', 1000, 0)) ; 
			 
				 	
				
				 }
			
			 else
			 		{
						$data = array(
						'InfoID'=>'',	 
						"Email" => $user_email,
						"PID" => "",
						"Name" => "",
						"GName" => "", 
						"MName" => "",
						"Nationality" => "Bangladeshi",
						"BDate" => "",
						"EQualification" => "",
						"Profession" => "",
						"MStatus" => "Married",
						"Gender" => "Male",
						"PAddress" => "",
						"DistrictID" => "",    //
						"ThanaID" => "",      //
						"Village" => "",
						"PostOffice" => "",
						"Mobile" => "",
						"LHajj" => "",
						"LTravel" => "",
						"BGroup" => "",     //
						"Moharram" => "",
						"Relation" => "",
						
						"NomineeName" => "",
						"NRelation" => "",
						"NMobile" => "",
						"NEmail" => "",
						"RepresentativeID" => "",     //
						"AreaID" => "",                //    
						
						"FAmount" => "",
						"FBranch" => "",
						"FDate" => "",
						
						"SAmount" => "",
						"SBranch" => "",
						"SDate" => "",
						
						"TAmount" => "",
						"TBranch" => "",
						"TDate" => "",
						
						
						"PassportNo" => "",
						"IssueDate" => "",
						"ExpireDate" => "",
						'selected_item' =>'',
						'selected_item_thana' =>'',
						'selected_item_blood'=>'',
						'selected_item_representative'=>'',
						'selected_item_area'=>'',
						'Districtlist' => $this->dropdown($this->SiteModel->getlist('district','DistrictID as ID, DistrictName as Name', array('DistrictID >' =>0),'DistrictID DESC', 1000, 0)),
						'Thanalist' => array(''=>'Select Thana'),
						'Representativelist' => $this->dropdown($this->SiteModel->getlist('representative','UserID as ID, RepresentativeName as Name', array('RepresentativeID >' =>0),'RepresentativeID DESC', 1000, 0)),
						'Arealist' => $this->dropdown($this->SiteModel->getlist('area','AreaID as ID, AreaName as Name', array('AreaID >' =>0),'AreaID DESC', 1000, 0)) 
);			     }	
			 
			 
			}
			 
			 else
			 {  
			$data = $_POST;
			$data['selected_item'] = $_POST['DistrictID'];
			$data['selected_item_thana'] = $_POST['ThanaID'];
			$data['selected_item_blood'] = $_POST['BGroup'];
			$data['selected_item_representative'] = $_POST['RepresentativeID'];
			$data['selected_item_area'] = $_POST['AreaID'];
			$data['Districtlist'] =$this->dropdown($this->SiteModel->getlist('district','DistrictID as ID, DistrictName as Name', array('DistrictID >' =>0),'DistrictID DESC', 1000, 0)); 
			
			$data['Thanalist'] = $this->dropdown($this->SiteModel->getlist('thana','ThanaID as ID, ThanaName as Name', array('DistrictID' =>$_POST['DistrictID']),'ThanaID DESC', 1000, 0)); 
			
			$data['Representativelist'] = $this->dropdown($this->SiteModel->getlist('representative','RepresentativeID as ID, RepresentativeName as Name', array('RepresentativeID >' =>0),'RepresentativeID DESC', 1000, 0)); 		 
					 
						 
				$data['Arealist'] = $this->dropdown($this->SiteModel->getlist('area','AreaID as ID, AreaName as Name', array('AreaID >' =>0),'AreaID DESC', 1000, 0)); 
			
			
			
		 
			
			
			 }
			
			$id = $data['InfoID'];
			$email = $data['Email'];
			
			$this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email|xss_clean');
			
			if($id == null || $id == ""){
					$this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email|callback_email_check|xss_clean'); 
			}
			
			else
				{
				$this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email|callback_email_checkwithid['.$id.']|xss_clean'); 
				}
			
			
			if($id == null || $id == ""){
			$this->form_validation->set_rules('PID', 'PID', 'trim|required|callback_pid|xss_clean');
			}
			
			
			else {
			$this->form_validation->set_rules('PID', 'PID', 'trim|required|callback_pidwithid['.$id.']|xss_clean');
			}
			
			
		 
			$this->form_validation->set_rules('Name', 'Name', 'trim|required|xss_clean'); 
			$this->form_validation->set_rules('GName', 'Father/Husband\'s Name', 'trim|required|xss_clean'); 
			$this->form_validation->set_rules('MName', 'Mother\'sName', 'trim|required|xss_clean'); 
		  	 
			 $this->form_validation->set_rules('Nationality', 'Nationality', 'trim|required|xss_clean'); 
			   $this->form_validation->set_rules('BDate', 'Birth Date', 'trim|required|xss_clean'); 			 
			 $this->form_validation->set_rules('EQualification', 'EQualification', 'trim|xss_clean'); 		 
			 $this->form_validation->set_rules('Profession', 'Profession', 'trim|xss_clean'); 		 
			 $this->form_validation->set_rules('PAddress', 'Present Address', 'trim|required|xss_clean'); 		 
			$this->form_validation->set_rules('DistrictID', 'District', 'trim|required|xss_clean'); 		 
			$this->form_validation->set_rules('ThanaID', 'Thana', 'trim|required|xss_clean'); 		 
			$this->form_validation->set_rules('Village', 'Village', 'trim|xss_clean'); 		 
			$this->form_validation->set_rules('PostOffice', 'Post Office', 'trim|xss_clean'); 		
			$this->form_validation->set_rules('Mobile', 'Mobile', 'trim|required|xss_clean'); 		
			$this->form_validation->set_rules('LHajj', 'Last Hajj', 'trim|xss_clean'); 		
			$this->form_validation->set_rules('LTravel', 'Last Travel', 'trim|xss_clean'); 		
			$this->form_validation->set_rules('Village', 'Village', 'trim|xss_clean'); 				 
			$this->form_validation->set_rules('Moharram', 'Moharram', 'trim|xss_clean'); 				 
			$this->form_validation->set_rules('Relation', 'Relation', 'trim|xss_clean'); 				 
			
			$this->form_validation->set_rules('NomineeName', 'Nominee Name', 'trim|xss_clean'); 			 
			$this->form_validation->set_rules('NRelation', 'Nominee Relation', 'trim|xss_clean'); 	  	
			$this->form_validation->set_rules('NMobile', 'Nominee Mobile', 'trim|xss_clean'); 	
			$this->form_validation->set_rules('NEmail', 'Nominee Email', 'trim|valid_email|xss_clean'); 		
			$this->form_validation->set_rules('RepresentativeID', 'Representative', 'trim|required|xss_clean'); 	 
			$this->form_validation->set_rules('AreaID', 'Area', 'trim|required|xss_clean'); 	 
			$this->form_validation->set_rules('FAmount', 'Amount', 'trim|is_numeric|xss_clean');			 
			$this->form_validation->set_rules('FBranch', 'Branch', 'trim|xss_clean');			 
			$this->form_validation->set_rules('FDate', 'Date', 'trim|xss_clean');			 
			
			$this->form_validation->set_rules('SAmount', 'Amount', 'trim|is_numeric|xss_clean');			 
			$this->form_validation->set_rules('SBranch', 'Branch', 'trim|xss_clean');			 
			$this->form_validation->set_rules('SDate', 'Date', 'trim|xss_clean');			 
			
			$this->form_validation->set_rules('TAmount', 'Amount', 'trim|is_numeric|xss_clean');			 
			$this->form_validation->set_rules('TBranch', 'Branch', 'trim|xss_clean');			 
			$this->form_validation->set_rules('TDate', 'Date', 'trim|xss_clean');			 
						 
			$this->form_validation->set_rules('PassportNo', 'Passport No', 'trim|xss_clean');	
			$this->form_validation->set_rules('IssueDate', 'Issue Date', 'trim|xss_clean');	
			$this->form_validation->set_rules('ExpireDate', 'Expire Date', 'trim|xss_clean');				 
						
			 
				if ($this->form_validation->run()) {	
			
			//unset(array($data['InfoID'],$data['selected_item'],$data['selected_item_thana'],$data['selected_item_blood'],$data['selected_item_representative'],$data['selected_item_area'],$data['Districtlist'],$data['Thanalist'],$data['Representativelist'],$data['Arealist']));
			 unset($data['InfoID'], $data['Email'], $data['selected_item'],$data['selected_item_thana'],$data['selected_item_blood'],$data['selected_item_representative'],$data['selected_item_area'],$data['Districtlist'],$data['Thanalist'],$data['Representativelist'],$data['Arealist']); 
		 
		 $email = $this->SiteModel->getfirstrow('users','id', array('email'=>$email), 'id DESC', 1,0);
			$data['UserID'] = $email["id"];
			$data['EntryDate'] = date("Y-m-d H:i:s");
			$data['EntryMan'] = $this->tank_auth->get_user_id();
				if($id == null || $id == "")
						{
							$id=$this->SiteModel->insert('hajjiinfo',$data);
							$msg = 'Saved Successfully';
						}
						else
						{
							$this->SiteModel->update('hajjiinfo',array('InfoID'=>$id), $data);
							$msg = 'Updated Successfully'; 
						}
			
			$this->saveImages($id);
			
			
			
			 $this->_show_msg($msg, 'record/recordlist');
			}
			
			
			
						 
				$data['user_id']	= $this->tank_auth->get_user_id();
			$data['user_name']	= $this->tank_auth->get_username();
			$data['user_email']	= $user_email;
			$data['user_level']	= $user_level;
			
				 $data['menu']	= 5;
			
			$this->load->view('head', $data);
			$this->load->view('userinfo/recordentry');
			$this->load->view('foot');
			
		 }
		 
		 
		 
		 
		 
		 
		 
		
		}
	
	
	
	function serverdata()
	{
		
		
		#Include the connect.php file
	 $hostname = "localhost";
$database = "northwind";
$username = "root";
$password = "";
	#Connect to the database
	//connection String
	$connect = mysql_connect($hostname, $username, $password)
	or die('Could not connect: ' . mysql_error());
	//Select The database
	$bool = mysql_select_db($database, $connect);
	if ($bool === False){
	   print "can't find $database";
	}
	
	$pagenum = $_GET['pagenum'];
	$pagesize = $_GET['pagesize'];
	$start = $pagenum * $pagesize;
	$query = "SELECT SQL_CALC_FOUND_ROWS * FROM Orders LIMIT $start, $pagesize";
	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
	$sql = "SELECT FOUND_ROWS() AS `found_rows`;";
	$rows = mysql_query($sql);
	$rows = mysql_fetch_assoc($rows);
	$total_rows = $rows['found_rows'];
	$filterquery = "";
	
	// filter data.
	if (isset($_GET['filterscount']))
	{
		$filterscount = $_GET['filterscount'];
		
		if ($filterscount > 0)
		{
			$where = " WHERE (";
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
				
				
				
				if($filterdatafield=='ShippedDate')
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
			$query = "SELECT * FROM Orders ".$where;
			$filterquery = $query;
			$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
			$sql = "SELECT FOUND_ROWS() AS `found_rows`;";
			$rows = mysql_query($sql);
			$rows = mysql_fetch_assoc($rows);
			$new_total_rows = $rows['found_rows'];		
			$query = "SELECT * FROM Orders ".$where." LIMIT $start, $pagesize";		
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
					$query = "SELECT * FROM Orders ORDER BY" . " " . $sortfield . " DESC LIMIT $start, $pagesize";
				}
				else if ($sortorder == "asc")
				{
					$query = "SELECT * FROM Orders ORDER BY" . " " . $sortfield . " ASC LIMIT $start, $pagesize";
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
		}
	}
	
	
	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());

	$orders = null;
	// get data and store in a json array
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$orders[] = array(
			'OrderDate' => $row['OrderDate'],
			'ShippedDate' => $row['ShippedDate'],
			'ShipName' => '<a href="##">'.$row['ShipName'].'</a>',
			'ShipAddress' => $row['ShipAddress'],
			'ShipCity' => $row['ShipCity'],
			'ShipCountry' => $row['ShipCountry']
		  );
	}
      $data[] = array(
       'TotalRows' => $total_rows,
	   'Rows' => $orders/*,
	   'daterangle'=>$return*/
	);

	echo json_encode($data);
		
		
		}
	
	
	 function userlist()
	{
	$this->load->database();
	
	$user_level = $this->tank_auth->get_userlevel(); 
	$condition = "RepresentativeID >=0 ";
	if($user_level==9){
		$condition = "RepresentativeID >=0 ";
		}
		
	else if($user_level==6){
		$user_id =  $this->tank_auth->get_user_id(); 
		$condition = "( RepresentativeID = $user_id OR UserID = $user_id ) ";
		}
		
	else if($user_level==5){
	    $user_id =  $this->tank_auth->get_user_id(); 
		$condition = "UserID = $user_id ";
		}		
	
	$pagenum = $_GET['pagenum'];
	$pagesize = $_GET['pagesize'];
	$start = $pagenum * $pagesize;
	/*$query = "SELECT SQL_CALC_FOUND_ROWS InfoID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo LIMIT $start, $pagesize";
	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
	$sql = "SELECT FOUND_ROWS() AS `found_rows`;";
	$rows = mysql_query($sql);
	$rows = mysql_fetch_assoc($rows);
	$total_rows = $rows['found_rows'];*/
	
	$query = $this->db->query("SELECT SQL_CALC_FOUND_ROWS InfoID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo WHERE $condition LIMIT $start, $pagesize");
	
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
				
				
				
				if($filterdatafield=='EntryDate')
					{
						$filterdatafield = "date(".$filterdatafield.")";
						
						$string = $filtervalue;   // 'Tue Jul 16 1996 23:59:59 GMT+0600 (Central Asia Standard Time)';
						list($firstWord) = explode('GMT', $string);
						$old_date = trim($firstWord);
						
						
						 $format = "Y-m-d";
 						 $filtervalue = date($format, strtotime($old_date));   //$filtervalue = '1996-07-16';
 
					 
					}
					
				if($filterdatafield=='AreaID')
					{
						$area_id = $this->SiteModel->getfirstrow('area','AreaID', array('AreaName' =>  $filtervalue ),'AreaID DESC', 1, 0);
						 
						// echo  $area_id['AreaID'];
 						 $filtervalue = $area_id['AreaID'];	
 
					 
					}	
					
				if($filterdatafield=='RepresentativeID')
					{
						
						$area_id = $this->SiteModel->getfirstrow('representative','UserID', array('RepresentativeName' =>  $filtervalue ),'RepresentativeID DESC', 1, 0);
						 
						// echo  $area_id['AreaID'];
 						 $filtervalue = $area_id['UserID'];	
 
					 
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
			/*$query = "SELECT InfoID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo ".$where;
			$filterquery = $query;
			$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
			$sql = "SELECT FOUND_ROWS() AS `found_rows`;";
			$rows = mysql_query($sql);
			$rows = mysql_fetch_assoc($rows);
			$new_total_rows = $rows['found_rows'];		
			$query = "SELECT InfoID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo ".$where." LIMIT $start, $pagesize";		
			$total_rows = $new_total_rows;	*/
		
		
		$sql_query = "SELECT InfoID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo ".$where;
		$query = $this->db->query("SELECT InfoID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo ".$where);
		$filterquery = $sql_query ;
		$result = $query->result_array();
		
		$new_total_rows = $this->db->query("SELECT FOUND_ROWS() AS found_rows")->row()->found_rows;
		$query = $this->db->query("SELECT InfoID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo ".$where." LIMIT $start, $pagesize");	
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
					$query = "SELECT InfoID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo WHERE $condition ORDER BY" . " " . $sortfield . " DESC LIMIT $start, $pagesize";
				}
				else if ($sortorder == "asc")
				{
					$query = "SELECT InfoID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo  WHERE $condition ORDER BY" . " " . $sortfield . " ASC LIMIT $start, $pagesize";
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
	
	
	 $area_list =  $this->SiteModel->getlist('area','AreaID, AreaName', array('AreaID >' =>0),'AreaID DESC', 1000, 0);
	 $repre_list =  $this->SiteModel->getlist('representative','UserID, RepresentativeName', array('UserID >' =>0),'RepresentativeID DESC', 1000, 0);
	 
	 
	$icount = 0; 
	$area_array = array();
	 foreach($area_list  as $area_row){
		 
		 $area_array[$area_row['AreaID']] = $area_row['AreaName'];
		 
		 }
	 
	 
	 
	$icountre = 0; 
	$repre_array = array();
	 foreach($repre_list  as $repre_row){
		 
		 $repre_array[$repre_row['UserID']] = $repre_row['RepresentativeName'];
		 
		 }
	 
	 
	  
	 
	foreach ($result as $row) {
		$orders[] = array(
			'ID' => $row['InfoID'],
			'InfoID' => $row['InfoID'],
			'DeleteID' => $row['InfoID'],
			'PID' => $row['PID'],
			'EntryDate' => date("Y-m-d", strtotime($row['EntryDate'])),
			'Name' =>  $row['Name'],
			'DistrictID' => $row['DistrictID'],
			'Mobile' => $row['Mobile'],
			'AreaID' => $area_array[$row['AreaID']],
			'RepresentativeID' => $repre_array[$row['RepresentativeID']]
		  );
	}     
      $data[] = array(
       'TotalRows' => $total_rows,
	   'Rows' => $orders/*,
	   'daterangle'=>$return*/
	);

	echo json_encode($data);
		
		
		}
	
	
	function userlist_imp()
	{
		$this->load->database();
		
		#Include the connect.php file
	 $hostname = "localhost";
$database = "northwind";
$username = "root";
$password = "";
	#Connect to the database
	//connection String
	$connect = mysql_connect($hostname, $username, $password)
	or die('Could not connect: ' . mysql_error());
	//Select The database
	$bool = mysql_select_db($database, $connect);
	if ($bool === False){
	   print "can't find $database";
	}
	
	$pagenum = $_GET['pagenum'];
	$pagesize = $_GET['pagesize'];
	$start = $pagenum * $pagesize;
	$query = "SELECT SQL_CALC_FOUND_ROWS InfoID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo LIMIT $start, $pagesize";
	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
	$sql = "SELECT FOUND_ROWS() AS `found_rows`;";
	$rows = mysql_query($sql);
	$rows = mysql_fetch_assoc($rows);
	$total_rows = $rows['found_rows'];
	$filterquery = "";
	
	// filter data.
	if (isset($_GET['filterscount']))
	{
		$filterscount = $_GET['filterscount'];
		
		if ($filterscount > 0)
		{
			$where = " WHERE (";
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
				
				
				
				if($filterdatafield=='EntryDate')
					{
						$filterdatafield = "date(".$filterdatafield.")";
						
						$string = $filtervalue;   // 'Tue Jul 16 1996 23:59:59 GMT+0600 (Central Asia Standard Time)';
						list($firstWord) = explode('GMT', $string);
						$old_date = trim($firstWord);
						
						
						 $format = "Y-m-d";
 						 $filtervalue = date($format, strtotime($old_date));   //$filtervalue = '1996-07-16';
 
					 
					}
					
				if($filterdatafield=='AreaID')
					{
						$area_id = $this->SiteModel->getfirstrow('area','AreaID', array('AreaName' =>  $filtervalue ),'AreaID DESC', 1, 0);
						 
						// echo  $area_id['AreaID'];
 						 $filtervalue = $area_id['AreaID'];	
 
					 
					}	
					
				if($filterdatafield=='RepresentativeID')
					{
						
						$area_id = $this->SiteModel->getfirstrow('representative','RepresentativeID', array('RepresentativeName' =>  $filtervalue ),'RepresentativeID DESC', 1, 0);
						 
						// echo  $area_id['AreaID'];
 						 $filtervalue = $area_id['RepresentativeID'];	
 
					 
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
			$query = "SELECT InfoID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo ".$where;
			$filterquery = $query;
			$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
			$sql = "SELECT FOUND_ROWS() AS `found_rows`;";
			$rows = mysql_query($sql);
			$rows = mysql_fetch_assoc($rows);
			$new_total_rows = $rows['found_rows'];		
			$query = "SELECT InfoID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo ".$where." LIMIT $start, $pagesize";		
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
					$query = "SELECT InfoID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo ORDER BY" . " " . $sortfield . " DESC LIMIT $start, $pagesize";
				}
				else if ($sortorder == "asc")
				{
					$query = "SELECT InfoID, PID,Name,DistrictID, Mobile,AreaID,RepresentativeID,EntryDate FROM hajjiinfo ORDER BY" . " " . $sortfield . " ASC LIMIT $start, $pagesize";
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
		}
	}
	
	
	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());

	$orders = null;
	// get data and store in a json array
	
	
	 $area_list =  $this->SiteModel->getlist('area','AreaID, AreaName', array('AreaID >' =>0),'AreaID DESC', 1000, 0);
	 $repre_list =  $this->SiteModel->getlist('representative','RepresentativeID, RepresentativeName', array('RepresentativeID >' =>0),'RepresentativeID DESC', 1000, 0);
	 
	 
	$icount = 0; 
	$area_array = array();
	 foreach($area_list  as $area_row){
		 
		 $area_array[$area_row['AreaID']] = $area_row['AreaName'];
		 
		 }
	 
	 
	 
	$icountre = 0; 
	$repre_array = array();
	 foreach($repre_list  as $repre_row){
		 
		 $repre_array[$repre_row['RepresentativeID']] = $repre_row['RepresentativeName'];
		 
		 }
	 
	 
	  
	 
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$orders[] = array(
			'ID' => $row['InfoID'],
			'InfoID' => $row['InfoID'],
			'DeleteID' => $row['InfoID'],
			'PID' => $row['PID'],
			'EntryDate' => date("Y-m-d", strtotime($row['EntryDate'])),
			'Name' =>  $row['Name'],
			'DistrictID' => $row['DistrictID'],
			'Mobile' => $row['Mobile'],
			'AreaID' => $area_array[$row['AreaID']],
			'RepresentativeID' => $repre_array[$row['RepresentativeID']]
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
	
	function arealist()
	{
			
	 
       
	   
	  $data['Visit'] =  $this->SiteModel->getlist('area','AreaName', array('AreaID >' =>0),'AreaID DESC', 1000, 0);
	  
	header("Content-type: application/json; charset=utf-8");	  
	 echo json_encode($data['Visit']); 
	 
	die;
	
	
		 
			
	  
		
	}
	
	
	function representativelist()
	{
			
	 
       
	   
	  $data['Visit'] =  $this->SiteModel->getlist('representative','RepresentativeName', array('RepresentativeID >' =>0),'RepresentativeID DESC', 1000, 0);
	  
	header("Content-type: application/json; charset=utf-8");	  
	 echo json_encode($data['Visit']); 
	 
	die;
	
	
		 
			
	  
		
	}
	
	
	
	
	function infodetail($id)
	{
			
	 
      // sleep(4);
	   
	  $data['detailinfo'] =  $this->SiteModel->getfirstrow('hajjiinfo','*', array('InfoID' =>$id),'InfoID DESC', 1, 0);
	 
	  //$data['users'] =   $this->SiteModel->getcolumn('users','Thumbimage', array('id' =>$data['detailinfo']['UserID']),'id DESC', 1, 0);
	  $data['users'] =   $this->SiteModel->getfirstrow('users','Thumbimage, email', array('id' =>$data['detailinfo']['UserID']),'id DESC', 1, 0);
	   $data['district'] =   $this->SiteModel->getfirstrow('district','DistrictName', array('DistrictID' =>$data['detailinfo']['DistrictID']),'DistrictID DESC', 1, 0);
	   $data['thana'] =   $this->SiteModel->getfirstrow('thana','ThanaName', array('ThanaID' =>$data['detailinfo']['ThanaID']),'ThanaID DESC', 1, 0);
	   
	   
	header("Content-type: application/json; charset=utf-8");	  
	 echo json_encode($data); 
	 
	die;
	
	
		 
			
	  
		
	}
	
	
	
	function listitem()
	{
			
	 
        $data['user_id']	= $this->tank_auth->get_user_id();
		$data['user_name']	= $this->tank_auth->get_username();;
			
				 $data['menu']	= 5;
			$this->load->view('head', $data);
			$this->load->view('recorditem');
			$this->load->view('foot');
	
	
		 
			
	  
		
	}
	
	
	
	
	
	
	
	function dataget()
	{
		
		#Include the connect.php file
$hostname = "localhost";
$database = "northwind";
$username = "root";
$password = "";
#Connect to the database
//connection String
$connect = mysql_connect($hostname, $username, $password)
or die('Could not connect: ' . mysql_error());
//Select The database
$bool = mysql_select_db($database, $connect);
if ($bool === False){
	print "can't find $database";
}
// get data and store in a json array
$query = "SELECT * FROM customers";
if (isset($_GET['customerid']))
{
	$query = "SELECT SQL_CALC_FOUND_ROWS * FROM orders WHERE CustomerID='" .$_GET['customerid'] . "'";
	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
	// get data and store in a json array
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$orders[] = array(
			'OrderDate' => $row['OrderDate'],
			'ShippedDate' => $row['ShippedDate'],
			'ShipName' => $row['ShipName'],
			'ShipAddress' => $row['ShipAddress'],
			'ShipCity' => $row['ShipCity'],
			'ShipCountry' => $row['ShipCountry']
		  );
	}
	echo json_encode($orders);    	
}
else
{
	$pagenum = $_GET['pagenum'];
	$pagesize = $_GET['pagesize'];
	$start = $pagenum * $pagesize;
	$query = "SELECT SQL_CALC_FOUND_ROWS * FROM customers LIMIT $start, $pagesize";
	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
	$sql = "SELECT FOUND_ROWS() AS `found_rows`;";
	$rows = mysql_query($sql);
	$rows = mysql_fetch_assoc($rows);
	$total_rows = $rows['found_rows'];
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$customers[] = array(
			'CustomerID' => $row['CustomerID'],
			'CompanyName' => $row['CompanyName'],
			'ContactName' => $row['ContactName'],
			'ContactTitle' => $row['ContactTitle'],
			'Address' => $row['Address'],
			'City' => $row['City'],
			'Country' => $row['Country']
		  );
	}
    $data[] = array(
       'TotalRows' => $total_rows,
	   'Rows' => $customers
	);
	echo json_encode($data);
}
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
	
function thanaoption()
        {
            
			$district_id = $_POST['id'];
			$thanalist = $this->SiteModel->getlist('thana','ThanaID as ID, ThanaName as Name', array('DistrictID' =>$_POST['id']),'ThanaID DESC', 50, 0);
			
			 	 
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
				$userid  = $this->SiteModel->getfirstrow('hajjiinfo','UserID', array('UserID' =>$emailfromusers['id']), 'InfoID DESC', 1, 0);	
				 
				  
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
				$userid  = $this->SiteModel->getfirstrow('hajjiinfo','UserID,InfoID', array('UserID' =>$emailfromusers['id'], 'InfoID !=' => $id), 'InfoID DESC', 1, 0);	
				 
				  
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
	
	
	
	
	
	
	
	
	
function pid($pid){
	
	  
				$userpid  = $this->SiteModel->getfirstrow('hajjiinfo','UserID', array('PID' =>$pid), 'InfoID DESC', 1, 0);	
				 
				  
								 if (count($userpid) > 0)
							  {
							   $this->form_validation->set_message('pid', 'This PID is already exist.');
							  
							   return false;
							  }
							  else{
								
							   return true;
								 }	 
	 
 
	
  
	 
	}
	
	
	
	
	
	 
	
function pidwithid($pid, $id){
	
	 
 
				$userid  = $this->SiteModel->getfirstrow('hajjiinfo','UserID,InfoID', array('PID' =>$pid, 'InfoID !=' => $id), 'InfoID DESC', 1, 0);	
				 
				  
								 if (count($userid) > 0)
							  {
							   $this->form_validation->set_message('email_checkwithid', 'This PID is already exist.');
							  
							   return false;
							  }
							  else{
								 
							   return true;
								 }	 
	
  
	 
	}		
	
	
	
	
	
	
	
	
		
	function _show_msg($message, $url=null)
	{
		$this->session->set_flashdata('message', '<span style="color:red">'.$message.'</span>');
		//redirect('/auth/');
		
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
		
		
        $uploadDir = "records/user";

		

				if( !file_exists($uploadDir) || !is_dir($uploadDir))

		

		mkdir("$uploadDir");

				

		$uploadDir = "./records/info";

		$imageDirectoryUrl = "records/info/";

		 
		$imageInfo = array();

		

		$this->initializeUpload($uploadDir);

		 

		if($this->upload->do_upload("Passport"))

		{

			$imageInfo['File1'] = "$imageDirectoryUrl".$this->renameFile("$member_id"."_1");

			 
		}
 
		

		

		if($this->upload->do_upload("Visa"))

		{

			$imageInfo['File2'] = "$imageDirectoryUrl".$this->renameFile("$member_id"."_2");

			

			

		}

		
 

		if(sizeof($imageInfo) > 0)

		{

			 $this->SiteModel->update('hajjiinfo',array('InfoID'=>$member_id),$imageInfo);

			//$this->edit_image($imageInfo);

		}

	}

	

	

	

	

	

	function renameFile($newName)

	{

	

		//$this->load->library('image_lib');

		$uploadInfo = $this->upload->data();

		$newName = "$newName".$uploadInfo["file_ext"];

		if(file_exists($uploadInfo["file_path"].$newName))

		{

			unlink($uploadInfo["file_path"].$newName);

		}		

		 

		rename($uploadInfo["full_path"], $uploadInfo["file_path"].$newName);

		return $newName;

	}

	




 
	function infodelete($id)
	{
		 if ( ( $this->tank_auth->get_userlevel() ==9 ) &&  $this->tank_auth->is_logged_in()) {	
						  
						  $msg = $this->SiteModel->delete('hajjiinfo',array("InfoID"=>$id));	
						if($msg == TRUE)
							$this-> _show_msg('Deleted successfully','record/recordlist');	
						elseif($msg == FALSE)
							$this-> _show_msg('Wrong Request', 'record/recordlist');			 
						 	
		 }
 		else
		{
			$this-> _show_general('Wrong Request');
		}		

		}
	
	
	
	function infodeleterow()
	{
		 header('Content-Type: text/plain');
		if ( ( $this->tank_auth->get_userlevel() ==9 ) &&  $this->tank_auth->is_logged_in()) {	
		
		 $msg = $this->SiteModel->delete('hajjiinfo',array("InfoID"=>$_POST['Item_ID']));		
	 
 		if($msg == TRUE)
			echo 'OKAY';
		else 
		   echo 'error_message';
		    
		}
		
		
		else 
		   echo 'error_message';
		    
	      }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
