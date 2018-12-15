<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	



	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		//$this->load->model('common_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('breadcrumbs');
	}
	
	public function index()
	{
		// add breadcrumbs
		$this->breadcrumbs->push('Home', '/');
		
		
		$data['content'] = 'admin/index';
		

		$this->load->vars($data);
		$this->load->view('layout/main_layout');		
	}
	

 

	
}
	
	

	
	
	