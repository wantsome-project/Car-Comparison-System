<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

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


Route::group([
    'middleware' => 'auth.role',
    'prefix' => 'admin',
    'role' => 'admin',
],function (){
    Route::get('/data', 'DataController@index');
    Route::get('/data/{id}/edit','DataController@edit');
    Route::put('/data/{id}','DataController@update');
    Route::delete('/data/{id}/delete','DataController@destroy');
    Route::resource('add','AddController');

});

//Route::group([
  //  'middleware' => 'auth.role',
   // 'role' => 'superadmin',
//],function (){
//    Route::get('/cars/{id}/edit', 'ProductController@edit');
//php artisan route:list});


//Route::resource('/add', 'AddController');
/*
Route::get('/products', 'ProductsController@index');
Route::get('/products/{productId}', 'ProductsController@show');
Route::get('/products/create', 'ProductsController@create');
Route::post('/products', 'ProductsController@store');
Route::get('/products/{productId}/edit', 'ProductsController@edit');
Route::get('/products/{productId}', 'ProductsController@update');
Route::delete('/products/{productId}', 'ProductsController@destroy');

Route::get('/products/{productId}/feedback/create', 'FeedbackController@create');*/
//Route::post('/products/{productId}/feedback', 'FeedbackController@store');

//get /products ProductsController@index
//get /products/{productId} ProductsController@show
//get /products/create ProductsController@create
//post /products ProductsController@store
//get  /products/{productId}/edit ProductsController@edit
//put /products/{productId} ProductsController@update
