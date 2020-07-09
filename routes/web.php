<?php


// for session=============================
session_start();

// for page show===================================

Route::get('/', 'agro_farmcontroller@welcomepage');
Route::get('/home', 'agro_farmcontroller@homepage');
Route::get('/about', 'agro_farmcontroller@aboutpage');
Route::get('/contact', 'agro_farmcontroller@contactpage');
Route::get('/dashboard','agro_farmcontroller@dashboardpage');
Route::get('/accounting_details','agro_farmcontroller@accounting_detailspage');
Route::get('/cow_info','agro_farmcontroller@cow_infopage');
Route::get('/cow_list','agro_farmcontroller@cow_listpage');
Route::get('/add_cow','agro_farmcontroller@add_cowpage');
Route::get('/view_cow_info','agro_farmcontroller@view_cow_infopage');
Route::get('/update_cow','agro_farmcontroller@update_cowpage');
Route::get('/edit_profile','agro_farmcontroller@edit_profilepage');
Route::get('/user_setting','agro_farmcontroller@user_settingpage');
Route::get('/add_user','agro_farmcontroller@add_userpage');
Route::get('/remove_user','agro_farmcontroller@remove_userpage');
Route::get('/user_list','agro_farmcontroller@user_listpage');
Route::get('/view_profile','agro_farmcontroller@view_profilepage');
Route::get('/add_expenditure','agro_farmcontroller@add_expenditurepage');
Route::get('/monthly_expenditure','agro_farmcontroller@monthly_expenditurepage');
Route::get('/show_expenditure','agro_farmcontroller@show_expenditurepage');
Route::get('/d_view_expenditure','agro_farmcontroller@d_view_expenditurepage');
Route::get('/change_password','agro_farmcontroller@change_passwordPage');
Route::get('/admin_panel','agro_farmcontroller@admin_panelpage');
Route::get('/add_admin','agro_farmcontroller@add_adminpage');
Route::get('/remove_admin','agro_farmcontroller@remove_adminpage');
Route::get('/admin_list','agro_farmcontroller@admin_listpage');
Route::get('/view_user_details','agro_farmcontroller@view_user_detailspage');


//for logout============================================================
Route::get('/logout', 'agro_farmcontroller@logout');

// for login
Route::post('/login', 'agro_farmcontroller@login');

// for add user
Route::post('/adding_user', 'agro_farmcontroller@adding_user');

// for add cow
Route::post('/adding_cow', 'agro_farmcontroller@adding_cow');

// for add daily expenditure
Route::get('/daily_expenditure', 'agro_farmcontroller@daily_expenditure');

// for add monthly expenditure
Route::get('/addmonthly_expenditure', 'agro_farmcontroller@addmonthly_expenditure');

// for remove user
Route::post('/delete_user', 'agro_farmcontroller@delete_user');

//for edit user profile info
Route::post('/edit_profile_info', 'agro_farmcontroller@edit_profile_info');

//for edit cow info
Route::post('/edit_cow_info', 'agro_farmcontroller@edit_cow_info');

//for change password
Route::post('/change_password_admin', 'agro_farmcontroller@change_password_admin');

// for add admin
Route::post('/adding_admin', 'agro_farmcontroller@adding_admin');

// for remove admin
Route::post('/removed_admin', 'agro_farmcontroller@removed_admin');

// for add cow for sell
Route::post('/add_for_sell', 'agro_farmcontroller@add_for_sell');
// for remove sell
Route::get('/remove_sell/{id}', 'agro_farmcontroller@remove_sell')->name('remove_sell');



