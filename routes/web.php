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

use App\User;

Route::get('/blog/category/{slug?}', 'BlogController@category')->name('category');
Route::get('/blog/article/{slug?}', 'BlogController@article')->name('article');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function ()
{
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/article', 'ArticleController', ['as'=>'admin']);
    Route::group(['prefix' => 'user_managment', 'namespace' => 'UserManagment'], function ()
    {
        Route::get('/user/today', 'UserController@today')->name('admin.user_managment.user.today');
        Route::resource('/user', 'UserController', ['as' => 'admin.user_managment']);
    });
});

Route::get('/', 'Controller@index');

Route::post('/comment', 'CommentController@validator');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
