<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');//setlocale(LC_TIME, 'it_IT');
/*
NAME : Sajed Ahmed
EMAIL ADDRESS: sajedaiub@gmail.com
*/

class Radio_codes_Model extends CI_Model
{
	
	
	public function __construct()
	{
	
		$this->load->database(); 
	}
	
	/*
	FUNCTION NAME : get_all_radio_codes_list
	it will retun all  radio_codes list*/
	public function get_all_radio_codes_list()
	{
		
		$sql="select * from radio_codes";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_object();
	}
	
	
		/*
	FUNCTION NAME : no_of_rows_arrest_complaint_category_list()
	it will retun total no of row of arrest_complaint_category list	*/
	public function no_of_rows_arrest_complaint_category_list()
	{
		
		$sql="select * from arrest_complaint_category	";
		$query=$this->db->query($sql);
		return $query->num_rows();
	}

	
	/*
	FUNCTION NAME : radio_codes_insert($data)
	it will insert a radio_codes_insert details 
	*/
	function radio_codes_insert($data)
	{
	$this->db->insert('radio_codes', $data);
	}
	
	
	/*
	FUNCTION NAME : arrest_complaint_category_update($data,$id)
	it will update a radio_codes deatails 
	*/
	function radio_codes_update($data,$id)
	{
		
	$this->db->where('id', $id);
	$this->db->update('radio_codes', $data);
	}
	

		
	/*
	FUNCTION NAME : status_update($data,$id)
	it will update a radio_codes activity after check it is active or inactive
	*/
	function status_update($id,$data)
	{
	$this->db->where('id', $id);
	
	$this->db->update('radio_codes', $data);
	}
	
	
	
	/*
	FUNCTION NAME : get_radio_codes_by_id()
	it will get a radio_codes by radio_codes id */
	public function get_radio_codes_by_id($id)
	{
		$query = $this->db->get_where('radio_codes', array('id' => $id));
		return $query;
	}
	
	/*
	FUNCTION NAME : delete_radio_codes_by_id()
	it will delete the radio_codes by radio_codes id */
	public function delete_radio_codes_by_id($id)
	{
		
		$this->db->where('id', $id);
		$this->db->delete('radio_codes');
		return $this->db->affected_rows();
	}
	

	
}
	