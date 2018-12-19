<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {
	



	public function __construct()
	{
		parent::__construct();
		
		if($this->input->method(TRUE)!="POST")
		{
			//$msg=array("message" => "Invalid Method");
		    echo json_encode(
						array("message" => "Invalid Method")
					);
			exit();
		}
		
		$this->load->helper(array('form', 'url'));
		$this->load->model('api_model');
	
	}
	
	public function index()
	{

	}
	
	
	
	public function readQuestionAnswer()
	{	
	    $products_arr=array(); 
		$products_arr["message"]="";
		$products_arr["records"]=array();
		$question_answer=$this->api_model->get_all_question_answer();
		foreach($question_answer as $data)
		{
		    $question_answer_details=$this->str_formate($data["question_answer_details"]);
			
				$product_item=array(
					"question_answer_id" => $data["id"],
					"question_answer_details" => $question_answer_details,
				
				);

			
			 array_push($products_arr["records"], $product_item);
		     $products_arr["message"]="Read Successfully";
		}
		
		 $this->output->set_content_type('application/json')->set_output(json_encode($products_arr));
	}	
	
	
	public function readRadioCodes()
	{	
	    $products_arr=array(); 
		$products_arr["message"]="";
		$products_arr["records"]=array();
		$radio_codes=$this->api_model->get_all_radio_codes();
		foreach($radio_codes as $data)
		{
		    $radio_codes_details=$this->str_formate($data["radio_codes_details"]);
			
				$product_item=array(
					"radio_codes_id" => $data["id"],
					"radio_codes_details" => $radio_codes_details,
				
				);

			
			 array_push($products_arr["records"], $product_item);
		     $products_arr["message"]="Read Successfully";
		}
		
		 $this->output->set_content_type('application/json')->set_output(json_encode($products_arr));
	}	
	
	
	
	public function readSummonsCategory()
	{	
	    $products_arr=array(); 
		$products_arr["message"]="";
		$products_arr["records"]=array();
		$summons=$this->api_model->get_all_summons_category_list();
		foreach($summons as $data)
		{
		    $category_name=$this->str_formate($data["category_name"]);
			if($category_name=="OATH" || $category_name=="oath" ||$category_name=="Oath")
			{
				$product_item=array(
					"summons_category_id" => $data["id"],
					"summons_category_name" => $category_name,
					"oath" => $this->getOathData(),
				
				);

			}
			else
			{
				$product_item=array(
					"summons_category_id" => $data["id"],
					"summons_category_name" => $category_name,
					"summons_details" => $this->readSummonsByCategory($data["id"]),
				
				);

			}
			 array_push($products_arr["records"], $product_item);
		     $products_arr["message"]="Read Successfully";
		}
		
		 $this->output->set_content_type('application/json')->set_output(json_encode($products_arr));
	}	
	
	public function readSummonsByCategory($id)
	{
		//echo "dfas";die();
		$summons_by_category_id=$this->api_model->get_all_summons_by_category($id);
		$summons_by_category=array();
	    foreach($summons_by_category_id as $data)
		{
			$product_item=array(
				"summons_details_id" => $data["id"],
				"summons_title" => $this->str_formate($data["summons_title"]),
				"summons_section" => $this->str_formate($data["summons_section"]),
				
			
			);
			
			 array_push($summons_by_category, $product_item);
		}
		return $summons_by_category;
		
		
		
	}
	
	public function str_formate($str)
	{
		$str= preg_replace('/[^A-Za-z0-9\-. ()<>:;,=&"]/', '', $str); // Removes special chars.
		$str= str_replace("\"","'",$str);
		return $str;
	}
	
	public function getOathData()
	{
		$oath=$this->api_model->get_all_oath_category_list();
		$oath_arr=array();
	    foreach($oath as $data)
		{
			$product_item=array(
				
				"oath_category_name" => $this->str_formate($data["oath_category_name"]),
				"oath_category_details" => $this->getOathDataDetails($data["oath_category_name"]),
			
			);
			
			 array_push($oath_arr, $product_item);
		}
		return $oath_arr;

	}
	
	public function getOathDataDetails($oath_category_name)
	{
		$oath=$this->api_model->get_all_oath_details($oath_category_name);
		$oath_arr=array();
	    foreach($oath as $data)
		{
			$product_item=array(
				"id" => $data["id"],
				//"oath_category_name" => $this->str_formate($data["oath_category_name"]),
				"oath_title" => $this->str_formate($data["oath_title"]),
				"oath_section" => $this->str_formate($data["oath_section"]),
				"oath_code" => $this->str_formate($data["oath_code"]),
				"min" => $data["min"],
				"max" => $data["max"],
			
			);
			
			 array_push($oath_arr, $product_item);
		}
		return $oath_arr;

	}
	

 
	public function readArrestComplaint()
	{
		$products_arr=array(); 
		$products_arr["message"]="";
		$products_arr["records"]=array();
		$summons=$this->api_model->get_all_arrest_complaint_list();
		foreach($summons as $data)
		{
		$category_name=$this->str_formate($data["category_name"]);
		$arrest_complaint_details=$this->str_formate($data["arrest_complaint_details"]);
		
		if($category_name=="TRANSIT" || $category_name=="transit" ||$category_name=="transit")
		{
			$product_item=array(
				"arrest_complaint_id" => $data["id"],
				"category_name" => $category_name,
				"arrest_complaint_details" => $arrest_complaint_details,
				"transit" => $this->getTransitData(),
			
			);

		}
		else
		{
			$product_item=array(
				"arrest_complaint_id" => $data["id"],
				"category_name" => $category_name,
				"arrest_complaint_details" => $arrest_complaint_details,
			
			);

		}
							

		 array_push($products_arr["records"], $product_item);
		 $products_arr["message"]="Read Successfully";
		}
	   //echo json_encode($products_arr);
			
	   $this->output->set_content_type('application/json')->set_output(json_encode($products_arr));
		
	}
	
	public function getTransitData()
	{
		$transit=$this->api_model->get_all_transit_list();
		$transit_arr=array();
	    foreach($transit as $data)
		{
			$product_item=array(
				"id" => $data["id"],
				"transite_category_name" => $this->str_formate($data["arrest_complaint_transit_details_category_name"]),
				"transit_section" => $this->str_formate($data["arrest_complaint_transit_details_section"]),

			
			);
			
			 array_push($transit_arr, $product_item);
		}
		return $transit_arr;
	}
	 
	
}
	
	

	
	
	