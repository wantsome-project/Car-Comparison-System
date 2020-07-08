<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewCar;
use Illuminate\Support\Facades\Auth;
use App\User;


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


Route::get('/email', function () {
    $user = User::All("email");
    foreach($user as $send){
    Mail::to($send)->send(new NewCar());}
    Mail::to('emailtest@yahoo.ro')->send(new NewCar());
    return new NewCar();
});
Route::post('/home/{id}', array('before'=>'csrf', function($id)
{
  return 'Review submitted for product '.$id;
}));

Route::post('addReview', 'DataController@addReview');
route::get('comparison/{id}','DataController@compare');

Route::get('/sendemail', 'SendEmailController@index')->name('send.email');
Route::post('/sendemail/send', 'SendEmailController@send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/{id}', 'DataController@show');


Route::group([
    'middleware' => 'auth.role',
    'prefix' => 'admin',
    'role' => 'admin',
],function (){
    Route::get('/data', 'DataController@index')->name('Data');
    Route::get('/data/{id}/edit','DataController@edit');
    Route::put('/data/{id}','DataController@update');
    Route::delete('/data/{id}/delete','DataController@destroy');
    Route::resource('add','AddController');

});

Route::group([
    'middleware' => 'auth.role',
    'prefix' => 'super.admin',
    'role' => 'super.admin',
],function (){
    Route::get('/data', 'UserController@index')->name('userdata');
    Route::get('/data/{id}/edit','UserController@edit');
    Route::put('/data/{id}','UserController@update');
    Route::delete('/data/{id}/delete','UserController@destroy');


});

