<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin']="Admin/index";

/********************	for summons_category	**********************************/
    
$route['summons_category']="SummonsCategory/admin_summons_category";
$route['summons_category/page/(:any)']="SummonsCategory/admin_summons_category/$1";
$route['add_new_summons_category']="SummonsCategory/create_summons_category";
$route['delete_summons_category/(:any)/(:any)']="SummonsCategory/delete_summons_category/$1/$2";
$route['edit_summons_category/(:any)']="SummonsCategory/edit_summons_category/$1";
$route['view_summons_category/(:any)']="SummonsCategory/view_summons_category/$1"; 

/********************	end summons_category	**********************************/




/********************	for arrest_complaint_category	**********************************/
    
$route['arrest_complaint_category']="ArrestComplaintCategory/admin_arrest_complaint_category";
$route['arrest_complaint_category/page/(:any)']="ArrestComplaintCategory/admin_arrest_complaint_category/$1";
$route['add_new_arrest_complaint_category']="ArrestComplaintCategory/create_arrest_complaint_category";
$route['delete_arrest_complaint_category/(:any)/(:any)']="ArrestComplaintCategory/delete_arrest_complaint_category/$1/$2";
$route['edit_arrest_complaint_category/(:any)']="ArrestComplaintCategory/edit_arrest_complaint_category/$1";
$route['view_arrest_complaint_category/(:any)']="ArrestComplaintCategory/view_arrest_complaint_category/$1"; 

/********************	end arrest_complaint_category	**********************************/




/********************	for arrest_complaint_details	**********************************/
    
$route['arrest_complaint_details']="ArrestComplaintDetails/admin_arrest_complaint_details";
$route['add_new_arrest_complaint_details']="ArrestComplaintDetails/create_arrest_complaint_details";
$route['delete_arrest_complaint_details/(:any)/(:any)']="ArrestComplaintDetails/delete_arrest_complaint_details/$1/$2";
$route['edit_arrest_complaint_details/(:any)']="ArrestComplaintDetails/edit_arrest_complaint_details/$1";
$route['view_arrest_complaint_details/(:any)']="ArrestComplaintDetails/view_arrest_complaint_details/$1"; 

/********************	end arrest_complaint_details	**********************************/


/********************	for summons_details	**********************************/
    
$route['summons_details']="SummonsDetails/admin_summons_details";
$route['SummonsDetails/page/(:any)']="SummonsDetails/admin_summons_details/$1";
$route['add_new_summons_details']="SummonsDetails/create_summons_details";
$route['delete_summons_details/(:any)/(:any)']="SummonsDetails/delete_summons_details/$1/$2";
$route['edit_summons_details/(:any)']="SummonsDetails/edit_summons_details/$1";
$route['view_summons_details/(:any)']="SummonsDetails/view_summons_details/$1"; 

/********************	end summons_details	**********************************/

/********************	for ArrestComplaintTransitDetails	**********************************/
    
$route['arrest_complaint_transit_details']="ArrestComplaintTransitDetails/admin_arrest_complaint_transit_details";
$route['add_new_arrest_complaint_transit_details']="ArrestComplaintTransitDetails/create_arrest_complaint_transit_details";
$route['delete_arrest_complaint_transit_details/(:any)/(:any)']="ArrestComplaintTransitDetails/delete_arrest_complaint_transit_details/$1/$2";
$route['edit_arrest_complaint_transit_details/(:any)']="ArrestComplaintTransitDetails/edit_arrest_complaint_transit_details/$1";
$route['view_arrest_complaint_transit_details/(:any)']="ArrestComplaintTransitDetails/view_arrest_complaint_transit_details/$1"; 

/********************	end ArrestComplaintTransitDetails	**********************************/


/********************	for oath	**********************************/
    
$route['oath']="Oath/admin_oath";
$route['add_new_oath']="Oath/create_oath";
$route['delete_oath/(:any)/(:any)']="Oath/delete_oath/$1/$2";
$route['edit_oath/(:any)']="Oath/edit_oath/$1";
$route['view_oath/(:any)']="Oath/view_oath/$1";

/********************	for radio_codes	**********************************/
    
$route['radio_codes']="RadioCodes/admin_radio_codes";
//$route['add_new_radio_codes']="RadioCodes/create_radio_codes";
$route['edit_radio_codes/(:any)']="RadioCodes/edit_radio_codes/$1";

/********************	end radio_codes	**********************************/



/********************	for API	**********************************/
    
$route['api/read_summons']="Api/readSummonsCategory";
$route['api/read_arrest_complaint']="Api/readArrestComplaint";

/********************	end API	**********************************/
