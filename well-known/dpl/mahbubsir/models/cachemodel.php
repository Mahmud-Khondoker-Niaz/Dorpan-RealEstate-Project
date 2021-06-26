<?php
class CacheModel extends CI_Model {

    function CacheModel()
    {
         parent::__construct();
		$this->load->database();
    }
    
   function cachehome()
    {
	
	     $this->db->cache_delete_all();
	    // $this->db->cache_delete('Welcome', 'index');
		 $this->output->clear_all_cache();
		
    }
	

   function deletecachequery($class='default',$method='index')
    {
	$this->db->cache_delete($class, $method);
	      
	}
 
 
 function deletecachepage($page='')
    {
	
	     $this->output->clear_path_cache($page);
		// $this->output->clear_all_cache();
		
    }
 
 function cachequery()
    {
	
	     $this->db->cache_delete_all();
	    // $this->db->cache_delete('Welcome', 'index');
		 //$this->output->clear_all_cache();
		
    }
	
}
?>