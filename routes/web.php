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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view', 'UserPayrollViewController@payrollIndex')->name('send');
Route::get('/viewAllowance', 'UserAllowanceViewController@AllowanceIndex')->name('viewAllowance');


Route::get('/employees/bin', 'EmployeeController@bin')->name('employees.bin');
Route::get('/employees/restore/{id}', 'EmployeeController@restore')->name('employees.restore');
Route::get('/employees/kill/{id}', 'EmployeeController@kill')->name('employees.kill');


Route::get('/employee/payroll/{id}', 'PayrollController@payrollIndex')->name('payrolls.show');
Route::get('/payrolls/create/{id}', 'PayrollController@create')->name('payrolls.create');
Route::post('/payrolls/{id}', 'PayrollController@store')->name('payrolls.store');
Route::get('/employee/payroll/{id}/edit', 'PayrollController@edit')->name('payrolls.edit');
Route::patch('/payrolls/update/{id}', 'PayrollController@update')->name('payrolls.update');

Route::delete('/payrolls/delete/{id}', 'PayrollController@destroy')->name('payrolls.destroy');
Route::get('/payroll/bin', 'PayrollController@bin')->name('payrolls.bin');
Route::get('/payroll/restore/{id}', 'PayrollController@restore')->name('payrolls.restore');
Route::get('/payroll/kill/{id}', 'PayrollController@kill')->name('payrolls.kill');

Route::get('/payrolls/download/{id}','DownloadController@pdfDownload')->name('payrolls.pdf');
Route::get('/payroll/single/{id}','DownloadController@singlePayroll')->name('singlepayroll.pdf');

Route::get('/employee/allowance/{id}', 'AllowanceController@allowanceIndex')->name('allowances.show');
Route::get('/allowances/create/{id}', 'AllowanceController@create')->name('allowances.create');
Route::post('/allowances/create/{id}', 'AllowanceController@create')->name('allowances.create');
Route::get('/allowances/{id}', 'AllowanceController@store')->name('allowances.store');
Route::post('/allowances/{id}', 'AllowanceController@store')->name('allowances.store');
Route::get('/employee/allowance/{id}/edit', 'AllowanceController@edit')->name('allowances.edit');
Route::patch('/allowances/update/{id}', 'AllowanceController@update')->name('allowances.update');

Route::delete('/allowances/delete/{id}', 'AllowanceController@destroy')->name('allowances.destroy');
Route::get('/allowance/bin', 'AllowanceController@bin')->name('allowances.bin');
Route::get('/allowance/restore/{id}', 'AllowanceController@restore')->name('allowances.restore');
Route::get('/allowance/kill/{id}', 'AllowanceController@kill')->name('allowances.kill');

Route::get('/allowances/download/{id}','DownloadController@pdfDownload')->name('allowances.pdf');
Route::get('/allowance/single/{id}','DownloadController@singlePayroll')->name('singleallowance.pdf');

Route::resources([
	'departments' => 'DepartmentController',
	'roles' => 'RoleController',
	'employees' => 'EmployeeController',
]);

Route::get('/posts', 'PostController@posts')->name('posts');

Route::post('posts', 'PostController@postPost')->name('posts.post');

Route::get('posts/{id}', 'PostController@show')->name('posts.show');


 //rooms add
 Route::get('/rooms','RoomController@create');
 Route::post('/rooms','RoomController@store')->name('rooms');
 
 Route::get('/rooms', function(){
	 $data=App\Room::all();
	 return view('rooms.rooms')->with('rooms',$data);
 });
 
 
 //rooms view,update
 Route::get('/RoomView', 'roomController@View')->name('RoomView');
 Route::get('/Update/{id}','RoomController@Update');
 Route::post('/UpdateRoom','RoomController@UpdateRoom');



//attendance

use App\Products;
use Illuminate\Support\Facades\Input;


Route::get ( '/s', function () {
return view ( 'search' );
} );

Route::any('/search',function(){
$q = Input::get ( 'q' );
$products = products::where('barcode','LIKE','%'.$q.'%')->get();
if(count($products) > 0)
	return view('products')->withDetails($products)->withQuery ( $q );
else return view ('products')->withMessage('No Details found. Try to search again !');
});

Route::get('/updateaspresent/{id}','ProductsController@UpdateAsPresent');
Route::get('/update', 'ProductsController@update');

//check availability
Route::get('/check', 'CheckController@display')->name('check');
Route::get('/checks','CheckController@getAvailablerooms')->name('checks');
Route::post('/checks','CheckController@getAvailablerooms')->name('checks');


//online payment
Route::get('/Online_payment/{id}/{start_date}/{end_date}','Online_paymentController@getData')->name('Online_payment')->where('checkid', 'id');
Route::post('/Online_payment/{id}/{start_date}/{end_date}','Online_paymentController@getData')->name('Online_payment')->where('checkid', 'id');

/*
//available rooms
Route::get('/available/{id}/{start_date}/{end_date}', 'AvailableController@getData')->name('available')->where('payment_id', 'id');
Route::post('/available/{id}/{start_date}/{end_date}', 'AvailableController@getData')->name('available')->where('payment_id', 'id');

*/

//booking
Route::get('/client/{checkid}/{startdate}/{enddate}','BookingController@getData')->name('client')->where('room_id', 'checkid');
Route::post('/client/{checkid}/{startdate}/{enddate}','BookingController@getData')->name('client')->where('room_id', 'checkid');


//booking view,cancel
Route::get('/BookingView', 'BookingController@View')->name('BookingView');
Route::get('/Delete/{booking_id}','BookingController@Delete');


//client
Route::get('/final/{id}','ClientsController@store')->name('final')->where('booking_id', 'id');
Route::post('/final/{id}','ClientsController@store')->name('final')->where('booking_id', 'id');


//image
Route::get('/u', 'ImageController@create');
Route::post('/upload', 'ImageController@store');


Route::get ( '/payment', function () {
	return view ( 'payment' );
	} );

//login
Route::get('/userlogin', 'SessionsController@login')->name('userlogin');
Route::get('/userview', 'SessionsController@view')->name('userview');
Route::get('/userdelete/{booking_id}','SessionsController@delete');
Route::get('/userlogout', 'SessionsController@logout')->name('userlogout');


Route::get ( '/s', function () {
	return view ( 'booking.new' );
	} );

//home
Route::get('/index', 'IndexController@home')->name('/index');

//tours
Route::get('/tour', 'IndexController@tour')->name('tour');

//about_us
Route::get('/about_us', 'IndexController@about_us')->name('about_us');

//contact_us
Route::get('/contact_us', 'IndexController@contact_us')->name('contact_us');

//guide
Route::get('/guide', 'GuideController@display')->name('guide');

//vacancy
Route::get('/v', 'VacancyController@create')->name('v');
Route::get('/vacancy', 'VacancyController@store');
Route::post('/vacancy', 'VacancyController@store')->name('vacancy');
Route::get('/vacancyview', 'VacancyController@view')->name('vacancyview');

//vacancy apply


//Route::get('/apply', 'ApplicantController@create')->name('apply');
//Route::get('/vacapli/{id}', 'ApplicantController@apply')->name('vacapli');
//Route::get('/vacapli/{id}', 'ApplicantController@register')->where('vacancyid', 'id')->name('vacapli');
//Route::post('/vacapli/{id}', 'ApplicantController@register')->where('vacancyid', 'id')->name('vacapli');
//Route::post('/vacaplicant/{id}', 'ApplicantController@register')->where('vacancyid', 'id');

Route::get('/apply', 'VacancyController@userview')->name('apply');
Route::get('/vacaplicant/{id}', 'ApplicantidController@apply')->name('vacaplicant')->where('applicantid','id');
Route::get('/applicant/{id}', 'ApplicantController@register')->where('vacancyid', 'id')->name('applicant');
Route::post('/applicant/{id}', 'ApplicantController@register')->where('vacancyid', 'id')->name('applicant');