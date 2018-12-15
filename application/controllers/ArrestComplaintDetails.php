<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ArrestComplaintDetails extends CI_Controller {
	
	public $id_label='Id ';
	public $category_name_label='Category Name ';
	public $arrest_complaint_details_label='Arrest Complaint details ';


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('arrest_complaint_details_model');
		$this->load->model('arrest_complaint_category_model');
		$this->load->model('common_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('breadcrumbs');
	}
	
	public function index()
	{	
	}
	
	public function create_arrest_complaint_details()
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Arrest Complaint Details', 'arrest_complaint_details');
		$this->breadcrumbs->push('Add', 'add_new_arrest_complaint_details');
		
		
		$data['content'] = 'arrest_complaint_details/add_arrest_complaint_details_form';
		$data['title'] = ' Create Arrest Complaint details';
		
		$arrest_complaint_category_array=array();
		$arrest_complaint_category=$this->arrest_complaint_category_model->get_all_arrest_complaint_category_list_array();
		foreach($arrest_complaint_category as $key=>$value):
		   $arrest_complaint_category_array[$value["id"]]=$value["category_name"];
		endforeach;
		
		$data['arrest_complaint_category']=$arrest_complaint_category_array;
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		$this->form_validation->set_rules('arrest_complaint_category_id', $this->category_name_label, 'trim|required');
		$this->form_validation->set_rules('arrest_complaint_details', $this->arrest_complaint_details_label, 'trim|required');
		
		
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		} 
		else 
		{
			
		$query_data=array(
			'arrest_complaint_category_id' =>$this->input->post('arrest_complaint_category_id'),
			'arrest_complaint_details' =>$this->input->post('arrest_complaint_details'),
				);
			
			//Transfering data to Model
			$this->arrest_complaint_details_model->arrest_complaint_details_insert($query_data);
			$data['message'] = 'Data Inserted Successfully';
			
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		}
		
		
	}
		

	public function admin_arrest_complaint_details($limit=null)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Arrest Complaint Details', 'arrest_complaint_details');
		
		$data['content'] = 'arrest_complaint_details/all_arrest_complaint_details_view';
		$data['title'] = 'Arrest Complaint details';


		$data['query_result']=$this->arrest_complaint_details_model->get_all_arrest_complaint_details_list();	/* for view all data to admin */
	
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
			
	public function edit_arrest_complaint_details($id)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Arrest Complaint Details', 'arrest_complaint_details');
		$this->breadcrumbs->push('Edit', 'edit_arrest_complaint_details');
	
		$data['content'] = 'arrest_complaint_details/edit_arrest_complaint_details_form';
		$data['title'] = "Edit Arrest Complaint details";
		
		$arrest_complaint_category_array=array();
		$arrest_complaint_category=$this->arrest_complaint_category_model->get_all_arrest_complaint_category_list_array();
		foreach($arrest_complaint_category as $key=>$value):
		   $arrest_complaint_category_array[$value["id"]]=$value["category_name"];
		endforeach;
		
		$data['arrest_complaint_category']=$arrest_complaint_category_array;
		
		$this->form_validation->set_rules('arrest_complaint_category_id', $this->category_name_label, 'trim|required');
		$this->form_validation->set_rules('arrest_complaint_details', $this->arrest_complaint_details_label, 'trim|required');
		
		
			$edit_query_result=$this->arrest_complaint_details_model->get_arrest_complaint_details_by_id($id);
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
			'arrest_complaint_category_id' =>$this->input->post('arrest_complaint_category_id'),
			'arrest_complaint_details' =>$this->input->post('arrest_complaint_details'),
				);			
			
		
			//Transfering data to Model
			$this->arrest_complaint_details_model->arrest_complaint_details_update($query_data,$id);
		
			$msg = 'Data Edited Successfully';
			$this->session->set_flashdata('msg', $msg);
			redirect("edit_arrest_complaint_details/".$id);
		}
		
	}
	
	public function view_arrest_complaint_details($id)
	{
	    // add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Arrest Complaint Details', 'arrest_complaint_details');
		$this->breadcrumbs->push('View', 'view_arrest_complaint_details');
	
		$data['content'] = 'arrest_complaint_details/single_arrest_complaint_details_view';
		$data['title'] = 'View Arrest Complaint details';
		$query_result=$this->arrest_complaint_details_model->get_arrest_complaint_details_by_id($id);
		$query_result= $query_result->result();
		$data['query_result'] = $query_result[0];
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
	
	public function delete_arrest_complaint_details($id,$url)
	{
		$result=$this->arrest_complaint_details_model->delete_arrest_complaint_details_by_id($id);
		$msg=$result>0?"arrest_complaint_details deleted":"arrest_complaint_details not delete";
		$this->session->set_flashdata('msg', $msg);
		redirect($url);
			
	}
	

 

	
}
	
	

	
	
	