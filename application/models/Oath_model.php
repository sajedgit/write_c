<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');//setlocale(LC_TIME, 'it_IT');
/*
NAME : Sajed Ahmed
EMAIL ADDRESS: sajedaiub@gmail.com
*/

class Oath_Model extends CI_Model
{
	
	
	public function __construct()
	{
	
		$this->load->database(); 
	}
	
	/*
	FUNCTION NAME : get_all_oath_list
	it will retun all  oath list*/
	public function get_all_oath_list()
	{
		
		$sql="select * from oath_details order by id asc";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_object();
	}
	
    /*
	FUNCTION NAME : get_all_oath_category_list_array
	it will retun all  oath category list*/
	public function get_all_oath_category_list_array()
	{
		$sql="select distinct(oath_category_name)  from oath_details	order by id asc";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_array();
	}
	
	/*
	FUNCTION NAME : oath_insert($data)
	it will insert a oath_insert details 
	*/
	function oath_insert($data)
	{
	$this->db->insert('oath_details', $data);
	}
	
	
	/*
	FUNCTION NAME : summons_category_update($data,$id)
	it will update a oath deatails 
	*/
	function oath_update($data,$id)
	{
	$this->db->where('id', $id);
	$this->db->update('oath_details', $data);
	}
	

	
	
	/*
	FUNCTION NAME : get_oath_by_id()
	it will get a oath by oath id */
	public function get_oath_by_id($id)
	{
		$query = $this->db->get_where('oath_details', array('id' => $id));
		return $query;
	}
	
	/*
	FUNCTION NAME : delete_oath_by_id()
	it will delete the oath by oath id */
	public function delete_oath_by_id($id)
	{
		
		$this->db->where('id', $id);
		$this->db->delete('oath_details');
		return $this->db->affected_rows();
	}
	

	
}
	