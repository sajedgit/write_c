<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');//setlocale(LC_TIME, 'it_IT');
/*
NAME : Sajed Amed
EMAIL ADDRESS: sajedaiub@gmail.com
*/

class Common_Model extends CI_Model
{
	public function __construct()
	{
		$this->load->database(); 
	}
	
	public function get_login_user_id()
	{
	
		return 1;
	}

	/*
	FUNCTION NAME : custom_pager()
	it will return the paination accordingly to the query */	
	public function custom_pager($url,$per_page,$total_rows)
	{
		
		$this->load->library('pagination');
		$config['base_url'] = $url;
		$config['total_rows'] =$total_rows;
		$config['per_page'] = $per_page;
		$config['use_page_numbers'] = TRUE;
		$config['first_url'] = $url.'1'; 
		$config['first_link'] = 'First';
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$this->pagination->initialize($config);
		return $this->pagination;
	}
	

	
	
}
	