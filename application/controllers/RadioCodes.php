<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RadioCodes extends CI_Controller {
	
	public $id_label='Id ';
	public $radio_codes_label='Radio Codes ';


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('radio_codes_model');
		$this->load->model('common_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('breadcrumbs');
	}
	
	public function index()
	{	
	}
	
	public function create_radio_codes()
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Radio Codes', 'radio_codes');
		$this->breadcrumbs->push('Add', 'add_new_radio_codes');
		
		
		$data['content'] = 'radio_codes/add_radio_codes_form';
		$data['title'] = ' Create Radio Codes';
		
	
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		$this->form_validation->set_rules('radio_codes_details', $this->radio_codes_label, 'trim|required');
		
		
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		} 
		else 
		{
			
		$query_data=array( 
			'radio_codes_details' =>$this->input->post('radio_codes_details'),
				);
			
			//Transfering data to Model
			$this->radio_codes_model->radio_codes_insert($query_data);
			$data['message'] = 'Data Inserted Successfully';
			
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		}
		
		
	}
		

	public function admin_radio_codes($limit=null)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Radio Codes', 'radio_codes');
		
		$data['content'] = 'radio_codes/all_radio_codes_view';
		$data['title'] = 'Radio Codes';


		$data['query_result']=$this->radio_codes_model->get_all_radio_codes_list();	/* for view all data to admin */
	
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
			
	public function edit_radio_codes($id)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Radio Codes', 'radio_codes');
		$this->breadcrumbs->push('Edit', 'edit_radio_codes');
	
		$data['content'] = 'radio_codes/edit_radio_codes_form';
		$data['title'] = "Edit Radio Codes";		
	
		$this->form_validation->set_rules('radio_codes_details', $this->radio_codes_label, 'trim|required');
		
		
			$edit_query_result=$this->radio_codes_model->get_radio_codes_by_id($id);
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
			'radio_codes_details' =>$this->input->post('radio_codes_details'),
				);			
			
		
			//Transfering data to Model
			$this->radio_codes_model->radio_codes_update($query_data,$id);
		
			$msg = 'Data Edited Successfully';
			$this->session->set_flashdata('msg', $msg);
			redirect("edit_radio_codes/".$id);
		}
		
	}
	
	public function view_radio_codes($id)
	{
	    // add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Radio Codes', 'radio_codes');
		$this->breadcrumbs->push('View', 'view_radio_codes');
	
		$data['content'] = 'radio_codes/single_radio_codes_view';
		$data['title'] = 'View Radio Codes';
		$query_result=$this->radio_codes_model->get_radio_codes_by_id($id);
		$query_result= $query_result->result();
		$data['query_result'] = $query_result[0];
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
	
	public function delete_radio_codes($id,$url)
	{
		$result=$this->radio_codes_model->delete_radio_codes_by_id($id);
		$msg=$result>0?"radio_codes deleted":"radio_codes not delete";
		$this->session->set_flashdata('msg', $msg);
		redirect($url);
			
	}
	

 

	
}
	
	

	
	
	