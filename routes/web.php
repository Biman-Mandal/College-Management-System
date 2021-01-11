<?php

use Illuminate\Support\Facades\Route;
// Middleware web for Application 
Route::middleware(['web'])->group(function () {
Route::get('/', function () {
    return view('homepage');
});



Route::get('/Database', function () {
    return view('DatabaseNew/DatabaseHomePage');
});
// Login
Route::post('/DatabaseInsert','DatabaseLoginController@LoginCheck')->name('DatabaseInsert');
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
Route::get('/ProfilePotal','protalController@show');
Route::get('/ProfileAddmission','SignUp_Controller@show');
Route::get('ApplicationPotal','PortalDataCntroller@show');
Route::get('/ApplicationAddmission','ApplicationController@show');

// Delete Data 
Route::get('/deleteStudent/{id}','NewStudent_Controller@destroy');
Route::get('/deleteTeacher/{id}','NewTeacherController@destroy');
Route::get('/deleteAlloted/{id}','allotedController@destroy');
Route::get('/deleteEmployye/{id}','employeeController@destroy');
Route::get('/DeletePPData/{id}','protalController@destroy');
Route::get('/DeletePortalApplication/{id}','PortalDataCntroller@destroy');
Route::get('/AddmissionProfileDelete/{id}','SignUp_Controller@destroy');
Route::get('/AddmissionApplicationDelete/{id}','ApplicationController@delete');

Route::get('/ApplyOnline', function () {
    return view('Apply.LoginHomepage');
});
Route::get('/SignUpApply', function () {
    return view('Apply.SignUp');
});
Route::get('/BCA', function () {
    return view('Apply.BCA');
});
Route::get('/BBA', function () {
    return view('Apply.BBA');
});
Route::get('/MCA', function () {
    return view('Apply.MCA');
});
Route::get('/Application', function () {
    return view('Apply.ApplicationInsertForm');
});
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
/* 
Database Login Controller 
*/
// Route::resource('DatabaseRegister','DatabaseLoginController');

/*
Student Portal Form Submit
*/
Route::resource('StudentPortalForm','PortalDataCntroller');
/*
Portal SignUp
*/
Route::resource('Portal','protalController');
/*
Portal Login
*/
Route::post('PortalLogin','protalController@Login');

Route::get('/StudentPotal', function () {
    return view('StudentPortal.potalLogin');
});
Route::get('/StudentPotal2', function () {
    return view('StudentPortal.portalhome2');
});
Route::get('/Registration', function () {
    return view('StudentPortal.portalRegistration');
});
Route::get('/AboutPage', function () {
    return view('About');
});
Route::get('/Principal', function () {
    return view('PrincipalDesk');
});

// Database New File Design
// Route::get('/DatabaseNew', function () {
//     return view('DatabaseNew.DatabaseHomePage');
// });

// Insert New Student


// Insert New teacher

// Route::resource('NewEmployee',)

// Alloted Table






// Route::resource('Database','StudentController');

// Route::get('/home','Database_Controller@insert_Home1');

// Route::get('/prac', function () {
//     return view('home2');
// });

// Route::get('/Insert_Student', function () {
//     return view('Database.insertS');
// });
// Route::get('/home1', function () {
//     return view('homepage1');
// });

// Route::get('/Faculty', function () {
//     return view('Database.insertFaculty');
// });
// Route::get('/FacultyAllot', function () {
//     return view('Database.FacultyAllot');
// });

// Route::resource('facult','FacultyController');
// Route::resource('FTeacher','TeacherController');

// Route::get('/TeacherView', function () {
//     return view('Database.ViewF');
// });
// Route::resource('TeacherView','TeacherController');
// Route::get('/Show/{id}','TeacherController@show')->name('Show');
// Route::get('/delete/{id}','TeacherController@delete')->name('delete');




// Route::get('/ViewStudent', function () {
//     return view('Database.ViewStudent');
// });
// Route::get('/search','StudentController@search');
// Route::get('/search1','StudentController@CourceSearch');
// Route::get('/ShowStudent/{id}','StudentController@show')->name('ShowStudent');





