<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ArrestComplaintTransitDetails extends CI_Controller {
	
	public $id_label='Id ';
	public $arrest_complaint_transit_details_category_name_label='Transit Category Name ';
	public $arrest_complaint_transit_details_section_label='Transit Section ';


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('arrest_complaint_transit_details_model');
		$this->load->model('common_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('breadcrumbs');
	}
	
	public function index()
	{	
	}
	
	public function create_arrest_complaint_transit_details()
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Arrest Complaint Transit', 'arrest_complaint_transit_details');
		$this->breadcrumbs->push('Add', 'add_new_arrest_complaint_transit_details');
		
		
		$data['content'] = 'arrest_complaint_transit_details/add_arrest_complaint_transit_details_form';
		$data['title'] = ' Create Arrest Complaint Transit details';
		
		$arrest_complaint_transit_details_category_array=array();
		$arrest_complaint_transit_details_category=$this->arrest_complaint_transit_details_model->get_all_arrest_complaint_transit_details_category_list_array();
		foreach($arrest_complaint_transit_details_category as $key=>$value):
		   $arrest_complaint_transit_details_category_array[$value["arrest_complaint_transit_details_category_name"]]=$value["arrest_complaint_transit_details_category_name"];
		endforeach;
		
		$data['arrest_complaint_transit_details_category']=$arrest_complaint_transit_details_category_array;
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		$this->form_validation->set_rules('arrest_complaint_transit_details_category_name', $this->arrest_complaint_transit_details_category_name_label, 'trim|required');
		
		$this->form_validation->set_rules('arrest_complaint_transit_details_section', $this->arrest_complaint_transit_details_section_label, 'trim|required');
		
		
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		} 
		else 
		{
			
		$query_data=array(
			'arrest_complaint_transit_details_category_name' =>$this->input->post('arrest_complaint_transit_details_category_name'),
			'arrest_complaint_transit_details_section' =>$this->input->post('arrest_complaint_transit_details_section'),
				);
			
			//Transfering data to Model
			$this->arrest_complaint_transit_details_model->arrest_complaint_transit_details_insert($query_data);
			$data['message'] = 'Data Inserted Successfully';
			
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		}
		
		
	}
		

	public function admin_arrest_complaint_transit_details($limit=null)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Arrest Complaint Transit Details', 'arrest_complaint_transit_details');
		
		$data['content'] = 'arrest_complaint_transit_details/all_arrest_complaint_transit_details_view';
		$data['title'] = 'Arrest Complaint Transit details';


		$data['query_result']=$this->arrest_complaint_transit_details_model->get_all_arrest_complaint_transit_details_list();	/* for view all data to admin */
	
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
			
	public function edit_arrest_complaint_transit_details($id)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Arrest Complaint Transit Details', 'arrest_complaint_transit_details');
		$this->breadcrumbs->push('Edit', 'edit_arrest_complaint_transit_details');
	
		$data['content'] = 'arrest_complaint_transit_details/edit_arrest_complaint_transit_details_form';
		$data['title'] = "Edit Arrest Complaint Transit details";
		
		$arrest_complaint_transit_details_category_array=array();
		$arrest_complaint_transit_details_category=$this->arrest_complaint_transit_details_model->get_all_arrest_complaint_transit_details_category_list_array();
		foreach($arrest_complaint_transit_details_category as $key=>$value):
		   $arrest_complaint_transit_details_category_array[$value["arrest_complaint_transit_details_category_name"]]=$value["arrest_complaint_transit_details_category_name"];
		endforeach;
		
		$data['arrest_complaint_transit_details_category']=$arrest_complaint_transit_details_category_array;
		
		$this->form_validation->set_rules('arrest_complaint_transit_details_category_name', $this->arrest_complaint_transit_details_category_name_label, 'trim|required');
		
		$this->form_validation->set_rules('arrest_complaint_transit_details_section', $this->arrest_complaint_transit_details_section_label, 'trim|required');
		
		
		
			$edit_query_result=$this->arrest_complaint_transit_details_model->get_arrest_complaint_transit_details_by_id($id);
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
			'arrest_complaint_transit_details_category_name' =>$this->input->post('arrest_complaint_transit_details_category_name'),
			'arrest_complaint_transit_details_section' =>$this->input->post('arrest_complaint_transit_details_section'),
		
				);			
			
		
			//Transfering data to Model
			$this->arrest_complaint_transit_details_model->arrest_complaint_transit_details_update($query_data,$id);
		
			$msg = 'Data Edited Successfully';
			$this->session->set_flashdata('msg', $msg);
			redirect("edit_arrest_complaint_transit_details/".$id);
		}
		
	}
	
	public function view_arrest_complaint_transit_details($id)
	{
	    // add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Arrest Complaint Transit Details', 'arrest_complaint_transit_details');
		$this->breadcrumbs->push('View', 'view_arrest_complaint_transit_details');
	
		$data['content'] = 'arrest_complaint_transit_details/single_arrest_complaint_transit_details_view';
		$data['title'] = 'View Arrest Complaint Transit details';
		$query_result=$this->arrest_complaint_transit_details_model->get_arrest_complaint_transit_details_by_id($id);
		$query_result= $query_result->result();
		$data['query_result'] = $query_result[0];
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
	
	public function delete_arrest_complaint_transit_details($id,$url)
	{
		$result=$this->arrest_complaint_transit_details_model->delete_arrest_complaint_transit_details_by_id($id);
		$msg=$result>0?"arrest_complaint_transit_details deleted":"arrest_complaint_transit_details not delete";
		$this->session->set_flashdata('msg', $msg);
		redirect($url);
			
	}
	

 

	
}
	
	

	
	
	