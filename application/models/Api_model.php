<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');//setlocale(LC_TIME, 'it_IT');
/*
NAME : Sajed Ahmed
EMAIL ADDRESS: sajedaiub@gmail.com
*/

class Api_Model extends CI_Model
{
	
	
	public function __construct()
	{
	
		$this->load->database(); 
	}
	
	
	/*
	FUNCTION NAME : get_all_question_answer
	it will retun all  get_all_question_answer list*/
	public function get_all_question_answer()
	{
		
		$sql="select * from question_answer";
		
		//$sql="select id,category_name from summons_category";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_array();
	}
		
	
	
	/*
	FUNCTION NAME : get_all_radio_codes
	it will retun all  get_all_radio_codes list*/
	public function get_all_radio_codes()
	{
		
		$sql="select * from radio_codes";
		
		//$sql="select id,category_name from summons_category";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_array();
	}
		

	/*
	FUNCTION NAME : get_all_summons_by_category
	it will retun all  get_all_summons_by_category list*/
	public function get_all_summons_by_category($id)
	{
		
		$sql="select * from summons_details where summons_category_id=$id";
		
		//$sql="select id,category_name from summons_category";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_array();
	}
		
	
	/*
	FUNCTION NAME : get_all_summons_category_list
	it will retun all  get_all_summons_category_list list*/
	public function get_all_summons_category_list()
	{
		
		$sql="select * from summons_category order by category_name asc";
		
		//$sql="select id,category_name from summons_category";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_array();
	}
	
		
	/*
	FUNCTION NAME : get_all_summons_details_list
	it will retun all  summons_details list*/
	public function get_all_summons_details_list()
	{
		
		$sql="select summons_details.id as id,summons_category.category_name,summons_details.summons_title,summons_details.summons_section from summons_category,summons_details where summons_category.id=summons_details.summons_category_id order by summons_category.category_name asc";
		
		//$sql="select id,category_name from summons_category";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_array();
	}
	
	
	
	/*
	FUNCTION NAME : get_all_oath_list
	it will retun all  get_all_oath_list list*/
	public function get_all_oath_list()
	{
		
		$sql="select * from oath_details order by id asc";
		
		//$sql="select id,category_name from summons_category";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_array();
	}
	

	
	
	/*
	FUNCTION NAME : get_all_transit_list
	it will retun all  get_all_transit_list list*/
	public function get_all_transit_list()
	{
		
		$sql="select * from arrest_complaint_transit_details order by id asc";
		
		//$sql="select id,category_name from summons_category";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_array();
	}
	
	
	
	/*
	FUNCTION NAME : get_all_arrest_complaint_list
	it will retun all  get_all_arrest_complaint_list list*/
	public function get_all_arrest_complaint_list()
	{
		
		$sql="select arrest_complaint_category.category_name,arrest_complaint_details.id as id,arrest_complaint_details.arrest_complaint_details from arrest_complaint_category,arrest_complaint_details where arrest_complaint_category.id=arrest_complaint_details.arrest_complaint_category_id order by arrest_complaint_category.category_name asc";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	
	
	
	
}
	