<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['logout']                         = 'authentication/logout';
$route['login']                          = 'authentication/login';
$route['beranda']                        = 'frontpage/index';
$route['register']                         = 'authentication/register';
$route['signup/(:any)']                  = 'authentication/stepregister/$1';
// $route['signup/(:any)/(:any)'] 		 = 'authentication/register/$1/$2';
// $route['forgot-password'] 			 = 'authentication/forgotPassword';
// $route['forgot-password/(:any)'] 	 = 'authentication/forgotPassword/$1';

$route['(:any)']                              = 'dashboard/view_page/index/$1';
$route['page/dashboard']                      = 'dashboard/view_page/dashboard';
$route['page/update-produk/(:any)']           = 'dashboard/updateproduk/$1';
$route['page/edit-produk/(:any)']             = 'dashboard/editproduk/$1';
$route['page/update-kategori/(:any)']         = 'dashboard/updatekategori/$1';
$route['page/update-subkategori/(:any)']      = 'dashboard/updatesubkategori/$1';
$route['page/(:any)']                         = 'dashboard/view_page/$1';
$route['user/dashboard']                      = 'dashboard/view_user/account';
$route['user/(:any)']                         = 'dashboard/view_user/$1';
$route['(:any)']                              = 'frontpage/index/$1';
$route['shop/(:any)']                         = 'frontpage/tambah_ke_keranjang/$1';
$route['beranda/(:any)']                      = 'frontpage/beranda/$1';
// $route['page/berita/(:any)']			 = 'frontpage/detailberita/$1';
$route['default_controller']             = 'frontpage/index';
$route['404_override']                   = '';
$route['translate_uri_dashes']           = FALSE;
