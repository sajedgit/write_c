<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QuestionAnswer extends CI_Controller {
	
	public $id_label='Id ';
	public $question_answer_label='Dir Question ';


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('question_answer_model');
		$this->load->model('common_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('breadcrumbs');
	}
	
	public function index()
	{	
	}
	
	public function create_question_answer()
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Dir Question', 'question_answer');
		$this->breadcrumbs->push('Add', 'add_new_question_answer');
		
		
		$data['content'] = 'question_answer/add_question_answer_form';
		$data['title'] = ' Create Dir Question';
		
	
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		$this->form_validation->set_rules('question_answer_details', $this->question_answer_label, 'trim|required');
		
		
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		} 
		else 
		{
			
		$query_data=array( 
			'question_answer_details' =>$this->input->post('question_answer_details'),
				);
			
			//Transfering data to Model
			$this->question_answer_model->question_answer_insert($query_data);
			$data['message'] = 'Data Inserted Successfully';
			
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		}
		
		
	}
		

	public function admin_question_answer($limit=null)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Dir Question', 'question_answer');
		
		$data['content'] = 'question_answer/all_question_answer_view';
		$data['title'] = 'Dir Question';


		$data['query_result']=$this->question_answer_model->get_all_question_answer_list();	/* for view all data to admin */
	
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
			
	public function edit_question_answer($id)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Dir Question', 'question_answer');
		$this->breadcrumbs->push('Edit', 'edit_question_answer');
	
		$data['content'] = 'question_answer/edit_question_answer_form';
		$data['title'] = "Edit Dir Question";		
	
		$this->form_validation->set_rules('question_answer_details', $this->question_answer_label, 'trim|required');
		
		
			$edit_query_result=$this->question_answer_model->get_question_answer_by_id($id);
			$edit_query_result= $edit_query_result->result();
			$data['edit_query_result'] = $edit_query_result[0];
			
		
		if ($this->form_validation->run() == FALSE) 
		{
		
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		} 
		else 
		{
			
			
			$query_data=array(
			'question_answer_details' =>$this->input->post('question_answer_details'),
				);			
			
		
			//Transfering data to Model
			$this->question_answer_model->question_answer_update($query_data,$id);
		
			$msg = 'Data Edited Successfully';
			$this->session->set_flashdata('msg', $msg);
			redirect("edit_question_answer/".$id);
		}
		
	}
	
	public function view_question_answer($id)
	{
	    // add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Dir Question', 'question_answer');
		$this->breadcrumbs->push('View', 'view_question_answer');
	
		$data['content'] = 'question_answer/single_question_answer_view';
		$data['title'] = 'View Dir Question';
		$query_result=$this->question_answer_model->get_question_answer_by_id($id);
		$query_result= $query_result->result();
		$data['query_result'] = $query_result[0];
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
	
	public function delete_question_answer($id,$url)
	{
		$result=$this->question_answer_model->delete_question_answer_by_id($id);
		$msg=$result>0?"question_answer deleted":"question_answer not delete";
		$this->session->set_flashdata('msg', $msg);
		redirect($url);
			
	}
	

 

	
}
	
	

	
	
	