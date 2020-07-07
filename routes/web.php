<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewCar;
use App\User;
use PhpParser\Node\Expr\New_;

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
    //$user = User::All("email");
    //foreach($user as $send){
    //Mail::to($send)->send(new NewCar());}
    //Mail::to('emailtest@yahoo.ro')->send(new NewCar());
    return new NewCar();
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/{id}', 'DataController@show');

Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/store', 'PostController@store')->name('post.store');

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/post/show/{id}', 'PostController@show')->name('post.show');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');


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
