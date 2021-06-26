<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class basecontroller extends CI_Controller {

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
	 
	 public $crdt = array();
          public $submenu = array();
	 
	 
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
		
		 	 
			$this->crdt['user_id']	= $this->tank_auth->get_user_id();
			$this->crdt['user_name']	= $this->tank_auth->get_username();
			$this->crdt['user_level']	= $this->tank_auth->get_userlevel();
			$this->crdt['user_image'] = $this->tank_auth->get_image();
                        $this->crdt['site_name'] = $this->config->item('website_name', 'tank_auth');        
                        
                       
                        $this->crdt['nestedmenu'] = $this->SiteModel->getlist('menusection','MenuSectionID as ID, Caption as Name', array('MenuSectionID  >' =>0),'MenuSectionID ASC', 100, 0);  
                        $this->crdt['newscategory'] = $this->SiteModel->getwherenotin('category','CategoryID as ID, Caption as Name, ParentID', array('ParentID' =>0), 'CategoryID',array(38,39,40),'Caption ASC', 1000, 0);  
                        
                        //function getwherein($table, $item, $where, $con_field=null, $where_in=null, $order = null, $limit=null,$offset=null)
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
	 
	 
	 
	 
	 
	 
	 
	
	function initializeUpload($uploadDir = null)

	{

		$config['upload_path'] = $uploadDir;

		$config['allowed_types'] = 'gif|jpg|jpeg|png|ico';

		$config['max_size'] = '0';

		

		/*$config['max_width'] = '1600';

		$config['max_height'] = '1200';*/

		

		$this->load->library('upload', $config);

		$this->upload->initialize($config);

	}

	
	
	
        
        
 
 
function saveImages( $arr=array())

	{
		
    
		          
        $folder = $arr["folder"];   
                
        $member_id = $arr["member_id"]; 
        
                
	$uploadDir = str_replace("ndcms/","",$this->config->item('root_dir'))."assets/records/".$folder;	

				if( !file_exists($uploadDir) || !is_dir($uploadDir))

		

		mkdir("$uploadDir");

			$uploadDir = str_replace("ndcms/","",$this->config->item('root_dir'))."assets/records/".$folder;

		$imageDirectoryUrl = "assets/records/".$folder."/";
	 
		$imageInfo = array();

		

		$this->initializeUpload($uploadDir);

		   

		if($this->upload->do_upload("Image"))

		{
                       if(isset($arr["resize"]) && $arr["resize"]==TRUE){   
                           
                       
                       $imageInfo['Image'] = "$imageDirectoryUrl".$this->renamenresizeFile("$member_id"."_1".rand(1,99),array("ratio"=>$arr["ratio"],"width"=>$arr["width"],"height"=>$arr["height"]));
                       
                       
                       }
                       
                       else         
                            $imageInfo['Image'] = "$imageDirectoryUrl".$this->renamefile("$member_id"."_1".rand(1,99));
                        
		}
 
                
                
                
                 if(isset($arr["thumb"]) && $arr["thumb"]==TRUE)  
                     
                 if($this->upload->do_upload("Image"))

		{          
                            $imageInfo['ThumbImage'] = "$imageDirectoryUrl".$this->renamenresizeFile("$member_id"."_2".rand(1,99), array("ratio"=>$arr["t_ratio"],"width"=>$arr["t_width"],"height"=>$arr["t_height"]));
                         
		}
 
 
 
 	 if(isset($arr["mediumthumb"]) && $arr["mediumthumb"]==TRUE)  
                     
                 if($this->upload->do_upload("Image"))

		{          
                            $imageInfo['MediumImage'] = "$imageDirectoryUrl".$this->renamenresizeFile("$member_id"."_3".rand(1,99), array("ratio"=>$arr["m_ratio"],"width"=>$arr["m_width"],"height"=>$arr["m_height"]));
                         
		}
                
                
                
                
                
                
                
		 

		if(sizeof($imageInfo) > 0)

		{

			 $this->SiteModel->update($arr["table"],array($arr["tableid"]=>$member_id),$imageInfo);

			//$this->edit_image($imageInfo);

		}

	}

        
        
        
        
        
        
        
	 
	 	function renamefile($newName)

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
       
	   function _show_msg($message, $url=null)
	{
		$this->session->set_flashdata('message', '<span style="color:red">'.$message.'</span>');
		//redirect('/siteadmin/');
		
		if($url !=null)
				redirect('/'.$url);    
		
		redirect('/record/recordlist');    
		
	}
	
	
	
	
	
	
	
	
	
	
	
	  

	/*

	Image handleing starts

	*/

	

	

	

	

	

	function renamenresizeFile($newName, $arr = array())

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
		 $config['maintain_ratio'] = $arr["ratio"];
		 $config['width']          = $arr["width"];
		 $config['height']         = $arr["height"];
		
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
  function parseJsonArray($jsonArray, $parentID = 0)
			{
			  $return = array();
			  foreach ($jsonArray as $subArray) {
				 $returnSubSubArray = array();
				 if (isset($subArray['children'])) {
				   $returnSubSubArray = $this->parseJsonArray($subArray['children'], $subArray['id']);
				 }
				 $return[] = array('id' => $subArray['id'], 'parentID' => $parentID);
				 $return = array_merge($return, $returnSubSubArray);
			  }
			
			  return $return;
			}
                        
                        
                        
                        
                        
                        function callurl($url){
                            
                              if ($this->tank_auth->is_logged_in()) {                             
                                  
                        // create a new cURL resource
                                $ch = curl_init();

                                // set URL and other appropriate options
                                curl_setopt($ch, CURLOPT_URL, $url);
                                curl_setopt($ch, CURLOPT_HEADER, 0);

                                // grab URL and pass it to the browser
                                curl_exec($ch);

                                // close cURL resource, and free up system resources
                                curl_close($ch);
                                
                              }
                            
                        }
                        
                        
                        
                        
                        
                        
                        
                        
            
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */