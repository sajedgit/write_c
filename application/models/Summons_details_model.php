<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');//setlocale(LC_TIME, 'it_IT');
/*
NAME : Sajed Ahmed
EMAIL ADDRESS: sajedaiub@gmail.com
*/

class Summons_details_Model extends CI_Model
{
	
	
	public function __construct()
	{
	
		$this->load->database(); 
	}
	
	/*
	FUNCTION NAME : get_all_summons_details_list
	it will retun all  summons_details list*/
	public function get_all_summons_details_list()
	{
		
		$sql="select summons_category.category_name,summons_details.id as id,summons_details.summons_title,summons_details.summons_section from summons_category,summons_details where summons_category.id=summons_details.summons_category_id order by summons_category.category_name asc";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_object();
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
	FUNCTION NAME : summons_details_insert($data)
	it will insert a summons_details_insert details 
	*/
	function summons_details_insert($data)
	{
	$this->db->insert('summons_details', $data);
	}
	
	
	/*
	FUNCTION NAME : summons_category_update($data,$id)
	it will update a summons_details deatails 
	*/
	function summons_details_update($data,$id)
	{
	$this->db->where('id', $id);
	$this->db->update('summons_details', $data);
	}
	

		
	/*
	FUNCTION NAME : status_update($data,$id)
	it will update a summons_details activity after check it is active or inactive
	*/
	function status_update($id,$data)
	{
	$this->db->where('id', $id);
	
	$this->db->update('summons_details', $data);
	}
	
	
	
	/*
	FUNCTION NAME : get_summons_details_by_id()
	it will get a summons_details by summons_details id */
	public function get_summons_details_by_id($id)
	{
		$query = $this->db->get_where('summons_details', array('id' => $id));
		return $query;
	}
	
	/*
	FUNCTION NAME : delete_summons_details_by_id()
	it will delete the summons_details by summons_details id */
	public function delete_summons_details_by_id($id)
	{
		
		$this->db->where('id', $id);
		$this->db->delete('summons_details');
		return $this->db->affected_rows();
	}
	

	
}
	