<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//link = controller/function
//user_route
$route['users/login/'] = 'users/login';
$route['users/profile/changepassword'] = 'users/changepassword';
//tendik route
$route['tendik/hapus/(:any)/(:any)'] = 'tendik/hapus/$1/$2';
$route['tendik/edit/(:any)/(:any)'] = 'tendik/edit/$1/$2';
$route['tendik/(:any)/baru'] = 'tendik/baru/$1';
$route['tendik/baru'] = 'tendik/baru';
$route['tendik/update'] = 'tendik/update';
$route['tendik/(:any)/(:any)'] = 'tendik/view/$1/$2';
$route['tendik/(:any)'] = 'tendik/index/$1';
$route['tendik/get_jabatan_id'] = 'tendik/get_jabatan_id';
// unit route
$route['unit/hapus/(:any)'] = 'unit/hapus/$1';
$route['unit/ubah/(:any)'] = 'unit/ubah/$1';
$route['unit/baru'] = 'unit/baru';
$route['unit'] = 'unit/index';
// jabatan route
$route['jabatan/hapus/(:any)'] = 'jabatan/hapus/$1';
$route['jabatan/ubah/(:any)'] = 'jabatan/ubah/$1';
$route['jabatan/baru'] = 'jabatan/baru';
$route['jabatan'] = 'jabatan/index';
//evaluasi kinerja dosen_route
$route['nilai/perbaharui'] = 'nilai/perbaharui';
$route['nilai/ubah/(:any)'] = 'nilai/ubah/$1';
$route['nilai/hapus/(:any)'] = 'nilai/hapus/$1';
$route['nilai/baru'] = 'nilai/baru';
$route['nilai/(:any)/(:any)/tambah_data'] = 'nilai/tambah_data/$1/$2';
$route['nilai/(:any)/(:any)/(:any)/entry'] = 'nilai/entry/$1/$2/$3';
$route['nilai/(:any)/(:any)/(:any)/simpan'] = 'nilai/simpan_nilai/$1/$2/$3';
$route['nilai/(:any)/(:any)/(:any)/hapus'] = 'nilai/hapus_nilai/$1/$2/$3';
$route['nilai/(:any)/(:any)/(:any)/rekap'] = 'nilai/rekap/$1/$2/$3';
$route['nilai/(:any)/(:any)/(:any)'] = 'nilai/show/$1/$2/$3';
$route['nilai/(:any)/(:any)'] = 'nilai/view3/$1/$2';
$route['nilai/(:any)'] = 'nilai/view2/$1';
$route['nilai'] = 'nilai/view';
//evaluasi kinerja tindek route
$route['nilai-tendik/perbaharui'] = 'nilai_tendik/perbaharui';
$route['nilai-tendik/ubah/(:any)'] = 'nilai_tendik/ubah/$1';
$route['nilai-tendik/hapus/(:any)'] = 'nilai_tendik/hapus/$1';
$route['nilai-tendik/printlaporan/(:any)/print_page'] = 'nilai_tendik/print_page/$1';
$route['nilai-tendik/printlaporan/(:any)'] = 'nilai_tendik/printlaporan/$1';
$route['nilai-tendik/baru'] = 'nilai_tendik/baru'; 
$route['nilai-tendik/baru2'] = 'nilai_tendik/baru2';
$route['nilai-tendik/(:any)/(:any)/hapus/(:any)'] = 'nilai_tendik/hapusdarilist/$1/$2/$3';
$route['nilai-tendik/(:any)/(:any)/tambah_data'] = 'nilai_tendik/tambah_data/$1/$2';
$route['nilai-tendik/(:any)/(:any)/(:any)/perbaharui_nilai'] = 'nilai_tendik/perbaharui_nilai/$1/$2/$3';
$route['nilai-tendik/(:any)/(:any)/(:any)/ubah'] = 'nilai_tendik/edit_nilai/$1/$2/$3';
$route['nilai-tendik/(:any)/(:any)/(:any)/simpan'] = 'nilai_tendik/simpan_nilai/$1/$2/$3';
$route['nilai-tendik/(:any)/(:any)/(:any)/hapus'] = 'nilai_tendik/hapus_nilai/$1/$2/$3';
$route['nilai-tendik/(:any)/(:any)/(:any)/entry'] = 'nilai_tendik/entry/$1/$2/$3';
$route['nilai-tendik/(:any)/(:any)/(:any)/print'] = 'nilai_tendik/print/$1/$2/$3';
$route['nilai-tendik/(:any)/(:any)/(:any)/saveaspdf'] = 'nilai_tendik/pdf/$1/$2/$3';
$route['nilai-tendik/(:any)/(:any)/(:any)'] = 'nilai_tendik/show/$1/$2/$3';
$route['nilai-tendik/(:any)/(:any)'] = 'nilai_tendik/viewtendik/$1/$2';
$route['nilai-tendik/(:any)'] = 'nilai_tendik/viewunit/$1';
$route['nilai-tendik'] = 'nilai_tendik/view'; 
//pengaturan
$route['config/edit-nilai/(:any)/(:any)'] = 'config/edit_variabel/$1/$2';
$route['config/akun'] = 'config/akun';
$route['config/edit-nilai/tambah/(:any)/simpanvariabel'] = 'config/simpanvariabel/$1';
$route['config/edit-nilai/tambah/(:any)'] = 'config/personalbaru/$1';
$route['config/edit-nilai/(:any)/(:any)/update_variabel'] = 'config/update_variabel/$1/$2';
$route['config/edit-nilai'] = 'config/edit_nilai';
$route['config'] = 'config/index'; 
//defaultroutes
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = 'pages/error';
$route['translate_uri_dashes'] = FALSE;