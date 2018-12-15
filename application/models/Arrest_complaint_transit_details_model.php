<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');//setlocale(LC_TIME, 'it_IT');
/*
NAME : Sajed Ahmed
EMAIL ADDRESS: sajedaiub@gmail.com
*/

class Arrest_complaint_transit_details_Model extends CI_Model
{
	
	
	public function __construct()
	{
	
		$this->load->database(); 
	}
	
	/*
	FUNCTION NAME : get_all_arrest_complaint_transit_details_list
	it will retun all  arrest_complaint_transit_details list*/
	public function get_all_arrest_complaint_transit_details_list()
	{
		
		$sql="select * from arrest_complaint_transit_details order by id asc";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_object();
	}
	
    /*
	FUNCTION NAME : get_all_arrest_complaint_transit_details_category_list_array
	it will retun all  arrest_complaint_transit_details category list*/
	public function get_all_arrest_complaint_transit_details_category_list_array()
	{
		$sql="select distinct(arrest_complaint_transit_details_category_name)  from arrest_complaint_transit_details	order by id asc";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_array();
	}
	
	/*
	FUNCTION NAME : arrest_complaint_transit_details_insert($data)
	it will insert a arrest_complaint_transit_details_insert details 
	*/
	function arrest_complaint_transit_details_insert($data)
	{
	$this->db->insert('arrest_complaint_transit_details', $data);
	}
	
	
	/*
	FUNCTION NAME : summons_category_update($data,$id)
	it will update a arrest_complaint_transit_details deatails 
	*/
	function arrest_complaint_transit_details_update($data,$id)
	{
	$this->db->where('id', $id);
	$this->db->update('arrest_complaint_transit_details', $data);
	}
	

	
	
	/*
	FUNCTION NAME : get_arrest_complaint_transit_details_by_id()
	it will get a arrest_complaint_transit_details by arrest_complaint_transit_details id */
	public function get_arrest_complaint_transit_details_by_id($id)
	{
		$query = $this->db->get_where('arrest_complaint_transit_details', array('id' => $id));
		return $query;
	}
	
	/*
	FUNCTION NAME : delete_arrest_complaint_transit_details_by_id()
	it will delete the arrest_complaint_transit_details by arrest_complaint_transit_details id */
	public function delete_arrest_complaint_transit_details_by_id($id)
	{
		
		$this->db->where('id', $id);
		$this->db->delete('arrest_complaint_transit_details');
		return $this->db->affected_rows();
	}
	

	
}
	