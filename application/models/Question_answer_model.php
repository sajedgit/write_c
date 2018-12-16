<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');//setlocale(LC_TIME, 'it_IT');
/*
NAME : Sajed Ahmed
EMAIL ADDRESS: sajedaiub@gmail.com
*/

class Question_answer_Model extends CI_Model
{
	
	
	public function __construct()
	{
	
		$this->load->database(); 
	}
	
	/*
	FUNCTION NAME : get_all_question_answer_list
	it will retun all  question_answer list*/
	public function get_all_question_answer_list()
	{
		
		$sql="select * from question_answer";
		$query=$this->db->query($sql);
		//print_r($query->result_object());die();
		return $query->result_object();
	}
	

	
	/*
	FUNCTION NAME : question_answer_insert($data)
	it will insert a question_answer_insert details 
	*/
	function question_answer_insert($data)
	{
	$this->db->insert('question_answer', $data);
	}
	
	
	/*
	FUNCTION NAME : question_answer($data,$id)
	it will update a question_answer deatails 
	*/
	function question_answer_update($data,$id)
	{
		
	$this->db->where('id', $id);
	$this->db->update('question_answer', $data);
	}
	

		
	/*
	FUNCTION NAME : status_update($data,$id)
	it will update a question_answer activity after check it is active or inactive
	*/
	function status_update($id,$data)
	{
	$this->db->where('id', $id);
	
	$this->db->update('question_answer', $data);
	}
	
	
	
	/*
	FUNCTION NAME : get_question_answer_by_id()
	it will get a question_answer by question_answer id */
	public function get_question_answer_by_id($id)
	{
		$query = $this->db->get_where('question_answer', array('id' => $id));
		return $query;
	}
	
	/*
	FUNCTION NAME : delete_question_answer_by_id()
	it will delete the question_answer by question_answer id */
	public function delete_question_answer_by_id($id)
	{
		
		$this->db->where('id', $id);
		$this->db->delete('question_answer');
		return $this->db->affected_rows();
	}
	

	
}
	