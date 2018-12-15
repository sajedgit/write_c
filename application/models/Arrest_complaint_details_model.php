<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');//setlocale(LC_TIME, 'it_IT');
/*
NAME : Sajed Ahmed
EMAIL ADDRESS: sajedaiub@gmail.com
*/

class Arrest_complaint_details_Model extends CI_Model
{
	
	
	public function __construct()
	{
	
		$this->load->database(); 
	}
	
	/*
	FUNCTION NAME : get_all_arrest_complaint_details_list
	it will retun all  arrest_complaint_details list*/
	public function get_all_arrest_complaint_details_list()
	{
		
		$sql="select arrest_complaint_category.category_name,arrest_complaint_details.id as id,arrest_complaint_details.arrest_complaint_details from arrest_complaint_category,arrest_complaint_details where arrest_complaint_category.id=arrest_complaint_details.arrest_complaint_category_id order by arrest_complaint_category.category_name asc";
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
	FUNCTION NAME : arrest_complaint_details_insert($data)
	it will insert a arrest_complaint_details_insert details 
	*/
	function arrest_complaint_details_insert($data)
	{
	$this->db->insert('arrest_complaint_details', $data);
	}
	
	
	/*
	FUNCTION NAME : arrest_complaint_category_update($data,$id)
	it will update a arrest_complaint_details deatails 
	*/
	function arrest_complaint_details_update($data,$id)
	{
	$this->db->where('id', $id);
	$this->db->update('arrest_complaint_details', $data);
	}
	

		
	/*
	FUNCTION NAME : status_update($data,$id)
	it will update a arrest_complaint_details activity after check it is active or inactive
	*/
	function status_update($id,$data)
	{
	$this->db->where('id', $id);
	
	$this->db->update('arrest_complaint_details', $data);
	}
	
	
	
	/*
	FUNCTION NAME : get_arrest_complaint_details_by_id()
	it will get a arrest_complaint_details by arrest_complaint_details id */
	public function get_arrest_complaint_details_by_id($id)
	{
		$query = $this->db->get_where('arrest_complaint_details', array('id' => $id));
		return $query;
	}
	
	/*
	FUNCTION NAME : delete_arrest_complaint_details_by_id()
	it will delete the arrest_complaint_details by arrest_complaint_details id */
	public function delete_arrest_complaint_details_by_id($id)
	{
		
		$this->db->where('id', $id);
		$this->db->delete('arrest_complaint_details');
		return $this->db->affected_rows();
	}
	

	
}
	