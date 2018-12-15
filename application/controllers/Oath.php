<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oath extends CI_Controller {
	
	public $id_label='Id ';
	public $oath_category_name_label='Oath Category Name ';
	public $oath_title_label='Oath Title ';
	public $oath_section_label='Oath Section ';
	public $oath_code_label='Oath Code ';
	public $oath_min_label='Min';
	public $oath_max_label='Max'; 


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('oath_model');
		$this->load->model('common_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('breadcrumbs');
	}
	
	public function index()
	{	
	}
	
	public function create_oath()
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Oath Details', 'oath');
		$this->breadcrumbs->push('Add', 'add_new_oath');
		
		
		$data['content'] = 'oath/add_oath_form';
		$data['title'] = ' Create Oath details';
		
		$oath_category_array=array();
		$oath_category=$this->oath_model->get_all_oath_category_list_array();
		foreach($oath_category as $key=>$value):
		   $oath_category_array[$value["oath_category_name"]]=$value["oath_category_name"];
		endforeach;
		
		$data['auth_category']=$oath_category_array;
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		$this->form_validation->set_rules('oath_category_name', $this->oath_category_name_label, 'trim|required');
		$this->form_validation->set_rules('oath_title', $this->oath_title_label, 'trim|required');
		$this->form_validation->set_rules('oath_section', $this->oath_section_label, 'trim|required');
		$this->form_validation->set_rules('oath_code', $this->oath_code_label, 'trim|required');
		$this->form_validation->set_rules('min', $this->oath_min_label, 'trim|required');
		$this->form_validation->set_rules('max', $this->oath_max_label, 'trim|required');
		
		
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		} 
		else 
		{
			
		$query_data=array(
			'oath_category_name' =>$this->input->post('oath_category_name'),
			'oath_title' =>$this->input->post('oath_title'),
			'oath_section' =>$this->input->post('oath_section'),
			'oath_code' =>$this->input->post('oath_code'),
			'min' =>$this->input->post('min'),
			'max' =>$this->input->post('max'),
				);
			
			//Transfering data to Model
			$this->oath_model->oath_insert($query_data);
			$data['message'] = 'Data Inserted Successfully';
			
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		}
		
		
	}
		

	public function admin_oath($limit=null)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Oath Details', 'oath');
		
		$data['content'] = 'oath/all_oath_view';
		$data['title'] = 'Summons details';


		$data['query_result']=$this->oath_model->get_all_oath_list();	/* for view all data to admin */
	
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
			
	public function edit_oath($id)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Oath Details', 'oath');
		$this->breadcrumbs->push('Edit', 'edit_oath');
	
		$data['content'] = 'oath/edit_oath_form';
		$data['title'] = "Edit Oath details";
		
		$oath_category_array=array();
		$oath_category=$this->oath_model->get_all_oath_category_list_array();
		foreach($oath_category as $key=>$value):
		   $oath_category_array[$value["oath_category_name"]]=$value["oath_category_name"];
		endforeach;
		
		$data['auth_category']=$oath_category_array;
		
		$this->form_validation->set_rules('oath_category_name', $this->oath_category_name_label, 'trim|required');
		$this->form_validation->set_rules('oath_title', $this->oath_title_label, 'trim|required');
		$this->form_validation->set_rules('oath_section', $this->oath_section_label, 'trim|required');
		$this->form_validation->set_rules('oath_code', $this->oath_code_label, 'trim|required');
		$this->form_validation->set_rules('min', $this->oath_min_label, 'trim|required');
		$this->form_validation->set_rules('max', $this->oath_max_label, 'trim|required');
		
		
			$edit_query_result=$this->oath_model->get_oath_by_id($id);
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
			'oath_category_name' =>$this->input->post('oath_category_name'),
			'oath_title' =>$this->input->post('oath_title'),
			'oath_section' =>$this->input->post('oath_section'),
			'oath_code' =>$this->input->post('oath_code'),
			'min' =>$this->input->post('min'),
			'max' =>$this->input->post('max'),
				);			
			
		
			//Transfering data to Model
			$this->oath_model->oath_update($query_data,$id);
		
			$msg = 'Data Edited Successfully';
			$this->session->set_flashdata('msg', $msg);
			redirect("edit_oath/".$id);
		}
		
	}
	
	public function view_oath($id)
	{
	    // add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Oath Details', 'oath');
		$this->breadcrumbs->push('View', 'view_oath');
	
		$data['content'] = 'oath/single_oath_view';
		$data['title'] = 'View Summons details';
		$query_result=$this->oath_model->get_oath_by_id($id);
		$query_result= $query_result->result();
		$data['query_result'] = $query_result[0];
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
	
	public function delete_oath($id,$url)
	{
		$result=$this->oath_model->delete_oath_by_id($id);
		$msg=$result>0?"oath deleted":"oath not delete";
		$this->session->set_flashdata('msg', $msg);
		redirect($url);
			
	}
	

 

	
}
	
	

	
	
	