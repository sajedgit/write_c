<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nutrition extends CI_Controller {
	


	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form'));
		$this->load->model('common_model');
		$this->load->model('page_model');
		$this->load->model('nutrition_model');
		$this->load->library('form_validation');
		
		/*if($this->session->userdata('login')!=1)
		{
			redirect(site_url('login'));
		}  */
 		
			
	}
	

	public function edit_nutrition($id)
	{
		 $data['content'] = 'nutrition/edit_nutrition';
		 
		 $data['title'] = 'Edit Nutrition';
		 $data['nutrition_id'] = $id;
	
		
		$this->form_validation->set_rules('nutrition_type',' Please Insert Nutrition type ', 'trim|required');
		$this->form_validation->set_rules('description','Please Insert Nutrition Description ' , 'trim|required');
		
		
			$edit_query_result=$this->nutrition_model->get_nutrition_by_id($id);
			$edit_query_result= $edit_query_result->result();
			$data['edit_query_result'] = $edit_query_result[0];
			
		
		if ($this->form_validation->run() == FALSE) 
		{
		
			$this->load->vars($data);
			$this->load->view('layouts/inner');
		} 
		else 
		{
			$query_data=array(
			'nutrition_type' =>$this->input->post('nutrition_type',TRUE),
			'title' =>$this->input->post('title',TRUE),
			'description' =>$this->input->post('description',TRUE),
				);
			
		
			//Transfering data to Model
			$this->nutrition_model->nutrition_update($query_data,$id);
		
			$msg = "Updated Successfully";
			$this->session->set_flashdata('msg', $msg);
			redirect("nutrition/edit/".$id);
		}
		
		
	}
	public function show_nutrition()
	{
		
        $data['content'] = 'nutrition/all_nutrition_view';
		$data['title'] ="Nutrition";

		$data['query_result']=$this->nutrition_model->get_all_nutrition_list();	/* for view all data to admin */
	

		$this->load->vars($data);
		$this->load->view('layouts/inner');		
		
	}
	 
 

	
}
	
	

	
	
	