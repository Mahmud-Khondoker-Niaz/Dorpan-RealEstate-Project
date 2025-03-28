<?php
class SiteModel extends CI_Model {

    function SiteModel()
    {
        parent::__construct();
		$this->load->database();
    }
    
    
	
	///one condition single table
	function getlist($table, $item, $where1=null, $order = null, $limit=null,$offset=null)
    {
              //  $this->db->cache_on(); 
		$this->db->order_by($order);
		$this->db->select($item);
		$this->db->from($table);
		$this->db->where($where1);
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
		
    }	
	
	    
	
	// where_in single table
	function getwherein($table, $item, $where, $con_field=null, $where_in=null, $order = null, $limit=null,$offset=null)
    {
              //  $this->db->cache_on(); 
		$this->db->order_by($order);
		$this->db->select($item);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->where_in($con_field, $where_in);
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
		
    }	
	
 
    
    // where_in single table
function getwherenotin($table, $item, $where, $con_field=null, $where_in=null, $order = null, $limit=null,$offset=null)
    {
                //$this->db->cache_on(); 
		$this->db->order_by($order);
		$this->db->select($item);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->where_not_in($con_field, $where_in); 
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
		
    }
	
	
		///one condition single table 1 return
	
	function getfirstrow($table, $item, $where1=null, $order = null, $limit=null,$offset=null)
    {
		
		//$this->db->order_by($order);
		$this->db->select($item);
		$this->db->from($table);
		$this->db->where($where1);
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->first_row('array');	
		
    }	
	
	
	function getcolumn($table, $item, $where1=null, $order = null, $limit=null,$offset=null)
    {
		
		//$this->db->order_by($order);
		$this->db->select($item);
		$this->db->from($table);
		$this->db->where($where1);
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return  $query->row()->$item;	 
		
    }	
	
	
	
	
	
	///one condition single table
	function getlistrelational($table1, $table2, $item, $where1=null, $whererelation,  $order = null, $limit=null,$offset=null)
    {
             $this->db->select($item)
        ->from($table1)
        ->join($table2, $whererelation, 'left')
        ->order_by($order)
		->limit($limit, $offset);

        $query = $this->db->get();

        return $query->result_array();
		
    }	
	
	    /**
	 * Delete  record
	 *
	 * @param	table
	  * @param	int
	 * @return	bool
	 */
	function delete($table, $where)
	{
		$this->db->where($where);
		 
		$this->db->delete($table);
		if ($this->db->affected_rows() > 0) {
			 
			return TRUE;
		}
		return FALSE;
	}
	
	
 

	function update($table, $where=null, $data=null)
    {
		$this->db->update($table, $data, $where);
		return TRUE;
    }	
    
    
    


function insert($table, $data=null)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}
 
  
	
	
		function getupdate($table, $fieldb , $fielda, $where)
	{
		$this->db->set($fieldb, $fielda , FALSE);
		$this->db->where($where);
		$this->db->update($table);
		
		//$this->db->query('UPDATE blog SET TotalComment = TotalComment + 1 WHERE BlogID = ' . $id);
		//$this->db->update('commentsquote', $data, "CommentsquoteID = $id");
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	///direct query select
	function query($query)
    {
     
	 
	       return   $this->db->query($query)->result_array();
    
       
		
    }	
	
	
	
	
	
	
	
	
	///direct query
	function queryupdate($query)
    {
     
	 
	      $this->db->query($query);
    
       
		
    }	
	
	  
	
	
	
}
?>