<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SummonsCategory extends CI_Controller {
	
	public $id_label='Id ';
	public $category_name_label='Category Name ';


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('summons_category_model');
		$this->load->model('common_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('breadcrumbs');
	}
	
	public function index()
	{	
	}
	
	public function create_summons_category()
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Summons Category', 'summons_category');
		$this->breadcrumbs->push('Add', 'add_new_summons_category');

		
		
		$data['content'] = 'summons_category/add_summons_category_form';
		$data['title'] = ' Create Summons Category';
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
			$this->summons_category_model->summons_category_insert($query_data);
			$data['message'] = 'Data Inserted Successfully';
			
			$this->load->vars($data);
			$this->load->view('layout/main_layout');
		}
		
		
	}
		

	public function admin_summons_category($limit=null)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Summons Category', 'summons_category');
		
		$data['content'] = 'summons_category/all_summons_category_view';
		$data['title'] = 'Summons Category';


		$data['query_result']=$this->summons_category_model->get_all_summons_category_list();	/* for view all data to admin */
	
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
			
	public function edit_summons_category($id)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Summons Category', 'summons_category');
		$this->breadcrumbs->push('Edit', 'edit_summons_category');
	
		$data['content'] = 'summons_category/edit_summons_category_form';
		$data['title'] = "Edit Summons Category";
		
		$this->form_validation->set_rules('category_name', $this->category_name_label, 'trim|required');
		
		
			$edit_query_result=$this->summons_category_model->get_summons_category_by_id($id);
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
			$this->summons_category_model->summons_category_update($query_data,$id);
		
			$msg = 'Data Edited Successfully';
			$this->session->set_flashdata('msg', $msg);
			redirect("edit_summons_category/".$id);
		}
		
	}
	
	public function view_summons_category($id)
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Summons Category', 'summons_category');
		$this->breadcrumbs->push('View', 'view_summons_category');
	
		$data['content'] = 'summons_category/single_summons_category_view';
		$data['title'] = 'View Summons Category';
		$query_result=$this->summons_category_model->get_summons_category_by_id($id);
		$query_result= $query_result->result();
		$data['query_result'] = $query_result[0];
		$this->load->vars($data);
		$this->load->view('layout/main_layout');
	}
	
	public function delete_summons_category($id,$url)
	{
		$result=$this->summons_category_model->delete_summons_category_by_id($id);
		$msg=$result>0?"Summons_category deleted":"Summons_category not delete";
		$this->session->set_flashdata('msg', $msg);
		redirect($url);
			
	}
	
	public function change_status($id,$status,$url)
	{
	$status=$status==0?1:0;	
	$data = array(
			'id' => $status,
			);
	$this->summons_category_model->status_update($id,$data);
	$status=$status==0?"Inactive":"Active";
	$msg = "Id #$id is now $status";
	$this->session->set_flashdata('msg', $msg);
	redirect($url);
	}	
 

	
}
	
	

	
	
	