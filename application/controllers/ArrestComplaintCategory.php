<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ArrestComplaintCategory extends CI_Controller {
	
	public $id_label='Id ';
	public $category_name_label='Category Name ';


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('arrest_complaint_category_model');
		$this->load->model('common_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('breadcrumbs');
	}
	
	public function index()
	{	
	}
	
	public function create_arrest_complaint_category()
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Arrest Complaint Category', 'arrest_complaint_category');
		$this->breadcrumbs->push('Add', 'add_new_arrest_complaint_category');

		
		
		$data['content'] = 'arrest_complaint_category/add_arrest_complaint_category_form';
		$data['title'] = ' Create Arrest Complaint Category';
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		$this->form_validation->set_rules('category_name', $this->category_name_label, 'trim|required');
		
		
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		} 
		else 
		{
			
		$query_data=array(
			'category_name' =>$this->input->post('category_name'),
				);
			
			//Transfering data to Model
			$this->arrest_complaint_category_model->arrest_complaint_category_insert($query_data);
			$data['message'] = 'Data Inserted Successfully';
			
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		}
		
		
	}
		

	public function admin_arrest_complaint_category($limit=null)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Arrest Complaint Category', 'arrest_complaint_category');
		
		$data['content'] = 'arrest_complaint_category/all_arrest_complaint_category_view';
		$data['title'] = 'Arrest Complaint Category';


		$data['query_result']=$this->arrest_complaint_category_model->get_all_arrest_complaint_category_list();	/* for view all data to admin */
	
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
			
	public function edit_arrest_complaint_category($id)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Arrest Complaint Category', 'arrest_complaint_category');
		$this->breadcrumbs->push('Edit', 'edit_arrest_complaint_category');
	
		$data['content'] = 'arrest_complaint_category/edit_arrest_complaint_category_form';
		$data['title'] = "Edit Arrest Complaint Category";
		
		$this->form_validation->set_rules('category_name', $this->category_name_label, 'trim|required');
		
		
			$edit_query_result=$this->arrest_complaint_category_model->get_arrest_complaint_category_by_id($id);
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
			'category_name' =>$this->input->post('category_name'),
				);
			
		
			//Transfering data to Model
			$this->arrest_complaint_category_model->arrest_complaint_category_update($query_data,$id);
		
			$msg = 'Data Edited Successfully';
			$this->session->set_flashdata('msg', $msg);
			redirect("edit_arrest_complaint_category/".$id);
		}
		
	}
	
	public function view_arrest_complaint_category($id)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Arrest Complaint Category', 'arrest_complaint_category');
		$this->breadcrumbs->push('View', 'view_arrest_complaint_category');
	
		$data['content'] = 'arrest_complaint_category/single_arrest_complaint_category_view';
		$data['title'] = 'View Arrest Complaint Category';
		$query_result=$this->arrest_complaint_category_model->get_arrest_complaint_category_by_id($id);
		$query_result= $query_result->result();
		$data['query_result'] = $query_result[0];
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
	
	public function delete_arrest_complaint_category($id,$url)
	{
		$result=$this->arrest_complaint_category_model->delete_arrest_complaint_category_by_id($id);
		$msg=$result>0?"arrest_complaint_category deleted":"arrest_complaint_category not delete";
		$this->session->set_flashdata('msg', $msg);
		redirect($url);
			
	}
	
	public function change_status($id,$status,$url)
	{
	$status=$status==0?1:0;	
	$data = array(
			'id' => $status,
			);
	$this->arrest_complaint_category_model->status_update($id,$data);
	$status=$status==0?"Inactive":"Active";
	$msg = "Id #$id is now $status";
	$this->session->set_flashdata('msg', $msg);
	redirect($url);
	}	
 

	
}
	
	

	
	
	