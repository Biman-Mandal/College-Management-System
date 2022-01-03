<?php

use Illuminate\Support\Facades\Route;
// Web Middleware
Route::middleware(['web'])->group(function () {
// Home
    Route::view('/', 'homepage');
    Route::view('/Principal', 'PrincipalDesk');
    Route::view('/AboutPage', 'About');
// Student Portal
    Route::post('student-portal/login', 'PortalController@login');
    Route::resource('portal-data-registrations','PortalDataController');
    Route::resource('student-portal','PortalController');
    Route::get('/DeletePPData/{id}','protalController@destroy');
//    due
    Route::get('ApplicationPotal','PortalDataCntroller@show');
    Route::get('/DeletePortalApplication/{id}','PortalDataCntroller@destroy');
    // Login
    Route::post('/DatabaseInsert','DatabaseLoginController@LoginCheck');
    Route::view('/Database', 'DatabaseNew/DatabaseHomePage');
    Route::view('/Database', 'DatabaseNew/DatabaseHomePage');
//
// Logout
    Route::get('/DatabaseLogout','DatabaseLoginController@destroy');
// Insert Data
    Route::post('NewStudent','NewStudent_Controller@store')->name('NewStudent');
    Route::post('NewTeacher','NewTeacherController@store')->name('NewTeacher');
    Route::post('AllotedDataInsert','allotedController@store')->name('AllotedDataInsert');
    Route::post('EmployeDataInsert','employeeController@store')->name('EmployeDataInsert');
    Route::get('/ViewStudent','NewStudent_Controller@show');
    Route::get('/ViewTeacher','NewTeacherController@show');
    Route::get('/ViewAlloted','allotedController@show');
// View Data
    Route::get('/ViewEmployee','employeeController@show');
    Route::get('/ProfileAddmission','SignUp_Controller@show');
    Route::get('/ApplicationAddmission','ApplicationController@show');

// Delete Data
    Route::get('/deleteStudent/{id}','NewStudent_Controller@destroy');
    Route::get('/deleteTeacher/{id}','NewTeacherController@destroy');
    Route::get('/deleteAlloted/{id}','allotedController@destroy');
    Route::get('/deleteEmployye/{id}','employeeController@destroy');
    Route::get('/AddmissionProfileDelete/{id}','SignUp_Controller@destroy');
    Route::get('/AddmissionApplicationDelete/{id}','ApplicationController@delete');

    Route::view('/ApplyOnline', 'Apply.LoginHomepage');

    Route::view('/SignUpApply', 'Apply.SignUp');
    Route::view('/BCA', 'Apply.BCA');
    Route::view('/BCA', 'Apply.BCA');
    Route::view('/BBA', 'Apply.BBA');
    Route::view('/MCA', 'Apply.MCA');

    Route::view('/Application', 'Apply.ApplicationInsertForm');
    Route::get('/ApplicationUpdate','ApplicationController@edit');
    Route::post('/ApplicationUpdateData/{id}','ApplicationController@update')->name('ApplicationFormUpdate');
    /*
    SignUpPage Application
    */
    Route::post('/SignUpInsert','SignUp_Controller@store')->name('InsertSignUp');
    Route::post('/Login','SignUp_Controller@Login')->name('login');
    Route::get('/Logout','ApplicationController@destroy');

    Route::get('/ApplicationProfile', 'ApplicationController@profile');
    Route::post('/ProfileUpdateAction/{id}','ApplicationController@profileAction')->name('ProfileAction');
    /*
    Application Form
    */
    Route::post('/ApplicationFormSubmit','ApplicationController@store')->name('ApplicationFormSubmit');
});


