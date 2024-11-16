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
use Illuminate\Http\Request;
Route::get('/','DashboardController@index')->name('dashboard');


Route::group(['prefix'=>'admin'],function (){
    Route::get('/login','AdminLoginController@index')->name('admin.login.show')->middleware('adminlogincheck');
    Route::post('/login','AdminLoginController@login')->name('admin.login');
    Route::get('/logout','AdminLoginController@logout')->name('admin.logout');
;
});
Route::group(['prefix'=>'teacher'],function (){
    Route::get('/login','TeacherLoginController@index')->name('teacher.login.show')->middleware('teacherlogincheck');
    Route::post('/login','TeacherLoginController@login')->name('teacher.login');
    Route::get('/logout','TeacherLoginController@logout')->name('teacher.logout');

    Route::get('/Register','TeacherController@index')->name('teacher.register.show');
    Route::post('/Register','TeacherController@register')->name('teacher.register');
    Route::get('/show','TeacherController@show')->name('teacher.show');

});

Route::group(['prefix'=>'guardian'],function (){
    Route::get('/login','GuardianLoginController@index')->name('guardian.login.show')->middleware('guardianlogincheck');
    Route::post('/login','GuardianLoginController@login')->name('guardian.login');
    Route::get('/logout','GuardianLoginController@logout')->name('guardian.logout');

    Route::get('/Register','GuardianController@index')->name('guardian.register.show');
    Route::post('/Register','GuardianController@register')->name('guardian.register');
    Route::get('/show','GuardianController@show')->name('guardian.show');
});

Route::group(['prefix'=>'student'],function (){
    Route::get('/login','UserLoginController@index')->name('student.login.show')->middleware('userlogincheck');
    Route::post('/login','UserLoginController@login')->name('student.login');
    Route::get('/logout','UserLoginController@logout')->name('student.logout');

    Route::get('/Register','UserController@index')->name('student.register.show');
    Route::post('/Register','UserController@register')->name('student.register');
    Route::get('/show','UserController@show')->name('student.show');
});

Route::group(['prefix'=>'post'],function (){
    Route::get('/show','postController@index')->name('post.show');

    Route::get('/Create','postController@show')->name('post.create.show');
    Route::post('/Create','postController@create')->name('post.create');
    Route::get('/postDetails/{id}','postController@ShowbyId')->name('post.showbyid');
    Route::post('/post/{id}/addcomment','UserController@addcomment')->name('user.post.addcomment');


});

Route::group(['prefix'=>'dairy'],function (){
    Route::get('/show','dairyController@index')->name('dairy.show');

    Route::get('/Create','dairyController@show')->name('dairy.create.show');
    Route::post('/Create','dairyController@create')->name('dairy.create');
});
Route::group(['prefix'=>'dailyattendance'],function (){
    Route::get('/show','AttendanceController@index')->name('dailyattendance.show');
    Route::post('/Create','AttendanceController@Create')->name('dailyattendance.Create');
});
Route::group(['prefix'=>'class'],function (){
    Route::post('/create','SectionController@create')->name('section.create');
    Route::get('/show','SectionController@show')->name('section.show');

});

Route::group(['prefix'=>'payment'],function (){
    Route::get('/show','paymentcontroller@show')->name('payment.show');
    Route::post ( '/', function (Request $request) {
        \Stripe\Stripe::setApiKey ( 'sk_test_5gFXUqOjsO2BzEMCnK726Jz900R9kEUsdS' );
        try {
            \Stripe\Charge::create ( array (
                "amount" => 300 * 100,
                "currency" => "usd",
                "source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
                "description" => "Test payment."
            ) );
            Session::flash ( 'success-message', 'Payment done successfully !' );
            return Redirect::back ();
        } catch ( \Exception $e ) {
            Session::flash ( 'fail-message', "Error! Please Try again." );
            return Redirect::back ();
        }
    })->name('payment.create');
});

Route::group(['prefix'=>'appointment'],function (){
    Route::get('/show','AppointmentController@index')->name('appointment.show');
    Route::post('/create/{id}','AppointmentController@create')->name('appointment.create');

});



