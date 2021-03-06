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
$route['default_controller'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// routes for auth
$route['login'] = 'AuthController';
$route['auth/login'] = 'AuthController/login';
$route['home'] = 'HomeController';
$route['logout'] = 'HomeController/logout';

// routes for user
$route['user'] = 'UserController';
$route['user/create'] = 'UserController/create';
$route['user/store'] = 'UserController/store';
$route['user/edit/(:any)'] = 'UserController/edit/$1';
$route['user/show/(:any)'] = 'UserController/show/$1';
$route['user/update/(:any)'] = 'UserController/update/$1';
$route['user/destroy/(:any)'] = 'UserController/destroy/$1';

// routes for criteria
$route['criteria'] = 'CriteriaController';
$route['criteria/create'] = 'CriteriaController/create';
$route['criteria/store'] = 'CriteriaController/store';
$route['criteria/edit/(:any)'] = 'CriteriaController/edit/$1';
$route['criteria/show/(:any)'] = 'CriteriaController/show/$1';
$route['criteria/update/(:any)'] = 'CriteriaController/update/$1';
$route['criteria/destroy/(:any)'] = 'CriteriaController/destroy/$1';

// routes for criterion value
$route['criterion_values/(:any)'] = 'CriterionValueController/index/$1';
$route['criterion_value/create'] = 'CriterionValueController/create';
$route['criterion_value/store'] = 'CriterionValueController/store';
$route['criterion_value/edit/(:any)'] = 'CriterionValueController/edit/$1';
$route['criterion_value/show/(:any)'] = 'CriterionValueController/show/$1';
$route['criterion_value/update/(:any)'] = 'CriterionValueController/update/$1';
$route['criterion_value/destroy/(:any)'] = 'CriterionValueController/destroy/$1';

// routes for ranking
$route['ranking'] = 'RankingController';
$route['ranking/create'] = 'RankingController/create';
$route['ranking/store'] = 'RankingController/store';
$route['ranking/edit/(:any)'] = 'RankingController/edit/$1';
$route['ranking/show/(:any)'] = 'RankingController/show/$1';
$route['ranking/update/(:any)'] = 'RankingController/update/$1';
$route['ranking/destroy/(:any)'] = 'RankingController/destroy/$1';
$route['ranking_step'] = 'RankingController/step';

// routes for profile
$route['profile'] = 'ProfileController';
$route['profile/update/(:any)'] = 'ProfileController/update/$1';
$route['profile/setting'] = 'ProfileController/setting';
$route['profile/update_pw/(:any)'] = 'ProfileController/update_pw/$1';

// routes for alternative
$route['alternative'] = 'AlternativeController';
$route['alternative/create'] = 'AlternativeController/create';
$route['alternative/store'] = 'AlternativeController/store';
$route['alternative/edit/(:any)'] = 'AlternativeController/edit/$1';
$route['alternative/show/(:any)'] = 'AlternativeController/show/$1';
$route['alternative/update/(:any)'] = 'AlternativeController/update/$1';
$route['alternative/destroy/(:any)'] = 'AlternativeController/destroy/$1';
$route['school_alternative'] = 'AlternativeController/school_alternative';

// routes for alternative
$route['alternative_chart'] = 'AlternativeChartController';
$route['alternative_chart/create'] = 'AlternativeChartController/create';
$route['alternative_chart/store'] = 'AlternativeChartController/store';
$route['alternative_chart/edit/(:any)'] = 'AlternativeChartController/edit/$1';
$route['alternative_chart/show/(:any)'] = 'AlternativeChartController/show/$1';
$route['alternative_chart/update/(:any)'] = 'AlternativeChartController/update/$1';
$route['alternative_chart/destroy/(:any)'] = 'AlternativeChartController/destroy/$1';

// routes for alternative profile
$route['alternative_profile'] = 'AlternativeProfileController';
$route['alternative_profile/create'] = 'AlternativeProfileController/create';
$route['alternative_profile/store'] = 'AlternativeProfileController/store';
$route['alternative_profile/edit/(:any)'] = 'AlternativeProfileController/edit/$1';
$route['alternative_profile/show/(:any)'] = 'AlternativeProfileController/show/$1';
$route['alternative_profile/update/(:any)'] = 'AlternativeProfileController/update/$1';
$route['alternative_profile/destroy/(:any)'] = 'AlternativeProfileController/destroy/$1';
$route['alternative_profile/value'] = 'AlternativeProfileController/value';
$route['alternative_profile/update_value/(:any)'] = 'AlternativeProfileController/update_value/$1';


$route['alternative_value_report'] = 'AlternativeValueReportController';