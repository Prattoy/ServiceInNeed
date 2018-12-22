<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home
Route::get('/', function () {
    return redirect()->route('home');
});

//Auth::routes();

//Route::get('/home/{name}', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//Services
/*Route::get('/services', function () {
    return view('services');
});*/
Route::get('/services', 'HomeController@services')->name('services');

// Route::get('/electrician', function () {	//Electrician
//     return view('services/electrician');
// });

// Route::get('/plumber', function () {		//Plumber
//     return view('services/plumber');
// });

// Route::get('/mason', function () {			//Mason
//     return view('services/mason');
// });

// Route::get('/carpenter', function () {		//Carpenter
//     return view('services/carpenter');
// });

//AboutUs
Route::get('/aboutUs', function () {
    return view('aboutUs');
});
Route::get('/aboutUs', 'HomeController@aboutUs')->name('aboutUs');

//Contact
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contact', 'HomeController@contact')->name('contact');

//Manage
Route::get('/manage', 'manageController@index')->name('manage.index');

//Profile
Route::get('/profile/user', 'profileController@user')->name('profile.user');
Route::get('/profile/employee', 'profileController@employee')->name('profile.employee');
Route::get('/profile/admin', 'profileController@admin')->name('profile.admin');

//Login
Route::get('/login','loginController@index')->name('login.index');
Route::post('/login','loginController@verify')->name('login.verify');

//Logout
Route::get('/logout','logoutController@index')->name('logout.index');


//Registration
Route::get('/registration', 'HomeController@registration')->name('registration');

Route::get('/userRegistration', 'HomeController@userReg')->name('registration.user');  //UserRegistration
Route::post('/userRegistration', 'UserController@store')->name('user.store');

Route::get('/employeeRegistration', 'HomeController@employeeReg')->name('registration.employee'); //EmployeeRegistration
Route::post('/employeeRegistration', 'EmployeeController@store')->name('employee.store');

Route::get('/adminRegistration', 'AdminController@index')->name('admin.index');     //AdminRegistration
Route::post('/adminRegistration', 'AdminController@store')->name('admin.store');

//Profile
Route::get('/profile','profileController@index')->name('profile.index');

//Delete
Route::get('/deleteAdmin/{id}', 'AdminController@destroy')->name('admin.destroy');
Route::get('/deleteUser/{id}', 'UserController@destroy')->name('user.destroy');
Route::get('/deleteEmployee/{id}', 'EmployeeController@destroy')->name('employee.destroy');

//Edit
Route::get('/editUser/{id}', 'UserController@edit')->name('user.edit');
Route::post('/editUser/{id}', 'UserController@update')->name('user.update');
Route::get('/editEmployee/{id}', 'EmployeeController@edit')->name('employee.edit');
Route::post('/editEmployee/{id}', 'EmployeeController@update')->name('employee.update');
Route::get('/editAdmin/{id}', 'AdminController@edit')->name('admin.edit');
Route::post('/editAdmin/{id}', 'AdminController@update')->name('admin.update');

//Search
// Route::get('/search', 'searchController@index');
// Route::get('/search/action', 'searchController@action')->name('search.action');

Route::get('/electrician', 'MyDatatablesController@get_electrician')->name('electrician');
Route::get('get-data-for-electrician', ['as'=>'get.employeedata','uses'=>'MyDatatablesController@getEmployeeData']);

Route::get('/plumber', 'MyDatatablesController@get_plumber')->name('plumber');
Route::get('get-data-for-plumber', ['as'=>'get.plumberdata','uses'=>'MyDatatablesController@getPlumberData']);

Route::get('/carpenter', 'MyDatatablesController@get_carpenter')->name('carpenter');
Route::get('get-data-for-carpenter', ['as'=>'get.carpenterdata','uses'=>'MyDatatablesController@getCarpenterData']);

Route::get('/mason', 'MyDatatablesController@get_mason')->name('mason');
Route::get('get-data-for-mason', ['as'=>'get.masondata','uses'=>'MyDatatablesController@getMasonData']);


Route::get('my-datatables', 'MyDatatablesController@index');
Route::get('get-data-my-datatables', ['as'=>'get.data','uses'=>'MyDatatablesController@getData']);

//set a page for contact with an employee.
Route::get('/contactMason/{id}','profileController@contactMason');
Route::get('/contactCarpenter/{id}','profileController@contactCarpenter');
Route::get('/contactElectrician/{id}','profileController@contactElectrician');
Route::get('/contactPlumber/{id}','profileController@contactPlumber');

//Request
Route::get('/requestEmployee','requestController@employee')->name('request.employee');
Route::post('/requestEmployee','requestController@confirm')->name('request.confirm');

//Assigned
Route::get('/assignedEmployee','assignedController@employee')->name('assigned.employee');
Route::post('/assignedEmployee','assignedController@rating')->name('assigned.rating');

