<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SummonsDetails extends CI_Controller {
	
	public $id_label='Id ';
	public $category_name_label='Category Name ';
	public $summoms_title_label='Summons Title ';
	public $summoms_section_label='Summons Section ';


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('summons_details_model');
		$this->load->model('summons_category_model');
		$this->load->model('common_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('breadcrumbs');
	}
	
	public function index()
	{	
	}
	
	public function create_summons_details()
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Summons Details', 'summons_details');
		$this->breadcrumbs->push('Add', 'add_new_summons_details');
		
		
		$data['content'] = 'summons_details/add_summons_details_form';
		$data['title'] = ' Create Summons details';
		
		$summons_category_array=array();
		$summons_category=$this->summons_category_model->get_all_summons_category_list_array();
		foreach($summons_category as $key=>$value):
		   $summons_category_array[$value["id"]]=$value["category_name"];
		endforeach;
		
		$data['summons_category']=$summons_category_array;
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		$this->form_validation->set_rules('category_name', $this->category_name_label, 'trim|required');
		$this->form_validation->set_rules('summons_title', $this->summoms_title_label, 'trim|required');
		$this->form_validation->set_rules('summons_section', $this->summoms_section_label, 'trim|required');
		
		
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		} 
		else 
		{
			
		$query_data=array(
			'summons_category_id' =>$this->input->post('category_name'),
			'summons_title' =>$this->input->post('summons_title'),
			'summons_section' =>$this->input->post('summons_section'),
				);
			
			//Transfering data to Model
			$this->summons_details_model->summons_details_insert($query_data);
			$data['message'] = 'Data Inserted Successfully';
			
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		}
		
		
	}
		

	public function admin_summons_details($limit=null)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Summons Details', 'summons_details');
		
		$data['content'] = 'summons_details/all_summons_details_view';
		$data['title'] = 'Summons details';


		$data['query_result']=$this->summons_details_model->get_all_summons_details_list();	/* for view all data to admin */
	
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
			
	public function edit_summons_details($id)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Summons Details', 'summons_details');
		$this->breadcrumbs->push('Edit', 'edit_summons_details');
	
		$data['content'] = 'summons_details/edit_summons_details_form';
		$data['title'] = "Edit Summons details";
		
		$summons_category_array=array();
		$summons_category=$this->summons_category_model->get_all_summons_category_list_array();
		foreach($summons_category as $key=>$value):
		   $summons_category_array[$value["id"]]=$value["category_name"];
		endforeach;
		
		$data['summons_category']=$summons_category_array;
		
		$this->form_validation->set_rules('summons_category_id', $this->category_name_label, 'trim|required');
		$this->form_validation->set_rules('summons_title', $this->category_name_label, 'trim|required');
		$this->form_validation->set_rules('summons_section', $this->category_name_label, 'trim|required');
		
		
			$edit_query_result=$this->summons_details_model->get_summons_details_by_id($id);
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
			'summons_category_id' =>$this->input->post('summons_category_id'),
			'summons_title' =>$this->input->post('summons_title'),
			'summons_section' =>$this->input->post('summons_section'),
				);			
			
		
			//Transfering data to Model
			$this->summons_details_model->summons_details_update($query_data,$id);
		
			$msg = 'Data Edited Successfully';
			$this->session->set_flashdata('msg', $msg);
			redirect("edit_summons_details/".$id);
		}
		
	}
	
	public function view_summons_details($id)
	{
	    // add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Summons Details', 'summons_details');
		$this->breadcrumbs->push('View', 'view_summons_details');
	
		$data['content'] = 'summons_details/single_summons_details_view';
		$data['title'] = 'View Summons details';
		$query_result=$this->summons_details_model->get_summons_details_by_id($id);
		$query_result= $query_result->result();
		$data['query_result'] = $query_result[0];
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
	
	public function delete_summons_details($id,$url)
	{
		$result=$this->summons_details_model->delete_summons_details_by_id($id);
		$msg=$result>0?"Summons_details deleted":"Summons_details not delete";
		$this->session->set_flashdata('msg', $msg);
		redirect($url);
			
	}
	

 

	
}
	
	

	
	
	