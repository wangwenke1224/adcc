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

$route['login'] = 'login';
$route['login_index']='login_index';
$route['login_index/do_logout']='login_index/do_logout';
// $login['login_index/login_success']='login_index/login_success';
$route['login/process']='login/process';

$route['contact'] = 'contact';
$route['contact/success']='contact/success';


$route['about'] = 'about';
$route['about/view'] = 'about/view';
$route['about/pending_view'] = 'about/pending_view';
$route['about/edit/(:any)'] = 'about/edit/$1';
$route['about/delete/(:any)'] = 'about/delete/$1';
$route['about/edit_success'] = 'about/edit_success';

$route['events/create'] = 'events/create';
$route['events/detail/(:any)'] = 'events/view/$1';
$route['events/(:num)/(:any)'] = 'events/index/$1/$2';
$route['events'] = 'events/index/$1/$2';

$route['news/insertcomments/(:any)'] = 'news/insertcomments/$1';
$route['news/edit/(:any)'] = 'news/edit/$1';
$route['news/delete/(:any)'] = 'news/delete/$1';
$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';

$route['media/create'] = 'media/create';
$route['media/(:any)'] = 'media/view/$1';
$route['media'] = 'media';

$route['default_controller'] = "pages/view";
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */