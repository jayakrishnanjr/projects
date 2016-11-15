<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "logincontroller/checkSession";

/*user routes*/ 

$route['home']="homecontroller/loadHomeView";
$route['Home']="logincontroller/loginUser";
$route['signup']="signupcontroller/signUpData";
$route['logout']="logincontroller/deleteSessionData";
$route['login']="logincontroller/checkSession";

$route['activate/(:any)']="signupcontroller/activateEmail";
$route['activate']="signupcontroller/activateEmail";


/*admin routes*/ 


$route['adminhome']="admincontroller/loginUser";
$route['adminlogout']="admincontroller/deleteSessionData";
$route['adminlogin']="admincontroller/checkSession";

$route['enablestatus']="admincontroller/enableStatus";
$route['disablestatus']="admincontroller/disableStatus";


$route['facebook']="facebooklogincontroller/login";

$route['Aboutus']="homecontroller/loadAboutUsView";
$route['Profile']="homecontroller/loadProfileView";

$route['Contactus']="homecontroller/loadContactusView";





$route['404_override'] = 'logincontroller/errorMessage';
/* End of file routes.php */
/* Location: ./application/config/routes.php */