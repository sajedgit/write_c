<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');//setlocale(LC_TIME, 'it_IT');
/*
NAME : Sajed Ahmed
EMAIL ADDRESS: sajedaiub@gmail.com
*/

class Summons_category_Model extends CI_Model
{
	
	
	public function __construct()
	{
	
		$this->load->database(); 
	}
	
	/*
	FUNCTION NAME : get_all_summons_category_list($limit,$per_page)
	it will retun all  summons_category list*/
	public function get_all_summons_category_list()
	{
		
		$sql="select *  from summons_category	order by category_name asc";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_object();
	}
	
	/*
	FUNCTION NAME : get_all_summons_category_list($limit,$per_page)
	it will retun all  summons_category list*/
	public function get_all_summons_category_list_array()
	{
		
		$sql="select *  from summons_category	order by category_name asc";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_array();
	}
	
	
		/*
	FUNCTION NAME : no_of_rows_summons_category_list()
	it will retun total no of row of summons_category list	*/
	public function no_of_rows_summons_category_list()
	{
		
		$sql="select * from summons_category	";
		$query=$this->db->query($sql);
		return $query->num_rows();
	}

	
	/*
	FUNCTION NAME : summons_category_insert($data)
	it will insert a summons_category details 
	*/
	function summons_category_insert($data)
	{
	$this->db->insert('summons_category', $data);
	}
	
	
	/*
	FUNCTION NAME : summons_category_update($data,$id)
	it will update a summons_category deatails 
	*/
	function summons_category_update($data,$id)
	{
	$this->db->where('id', $id);
	$this->db->update('summons_category', $data);
	}
	

		
	/*
	FUNCTION NAME : status_update($data,$id)
	it will update a summons_category activity after check it is active or inactive
	*/
	function status_update($id,$data)
	{
	$this->db->where('id', $id);
	
	$this->db->update('summons_category', $data);
	}
	
	
	
	/*
	FUNCTION NAME : get_summons_category_by_id()
	it will get a summons_category by summons_category id */
	public function get_summons_category_by_id($id)
	{
		$query = $this->db->get_where('summons_category', array('id' => $id));
		return $query;
	}
	
	/*
	FUNCTION NAME : delete_summons_category_by_id()
	it will delete the summons_category by summons_category id */
	public function delete_summons_category_by_id($id)
	{
		
		$this->db->where('id', $id);
		$this->db->delete('summons_category');
		return $this->db->affected_rows();
	}
	

	
}
	