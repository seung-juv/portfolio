<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin', 'App\Http\Controllers\Admin\AdminController@get');
Route::get('/admin/dashboard', 'App\Http\Controllers\Admin\DashboardController@get');
Route::get('/admin/user/user', 'App\Http\Controllers\Admin\User\UserController@get');
Route::get('/admin/work/work', 'App\Http\Controllers\Admin\Work\WorkController@get');
Route::get('/admin/work/work/create', 'App\Http\Controllers\Admin\Work\WorkController@getCreate');
Route::post('/admin/work/work/create', 'App\Http\Controllers\Admin\Work\WorkController@postCreate');
Route::get('/admin/work/work/update/{id}', 'App\Http\Controllers\Admin\Work\WorkController@getUpdate');
Route::post('/admin/work/work/update/{id}', 'App\Http\Controllers\Admin\Work\WorkController@postUpdate');
Route::get('/admin/work/work/detail/{id}', 'App\Http\Controllers\Admin\Work\WorkController@getDetail');
Route::get('/admin/work/work/delete/{id}', 'App\Http\Controllers\Admin\Work\WorkController@getDelete');
Route::get('/admin/work/category', 'App\Http\Controllers\Admin\Work\CategoryController@get');
Route::get('/admin/work/category/create', 'App\Http\Controllers\Admin\Work\CategoryController@getCreate');
Route::post('/admin/work/category/create', 'App\Http\Controllers\Admin\Work\CategoryController@postCreate');
Route::get('/admin/work/category/update/{category}', 'App\Http\Controllers\Admin\Work\CategoryController@getUpdate');
Route::post('/admin/work/category/update/{category}', 'App\Http\Controllers\Admin\Work\CategoryController@postUpdate');
Route::get('/admin/work/category/detail/{category}', 'App\Http\Controllers\Admin\Work\CategoryController@getDetail');
Route::get('/admin/work/category/delete/{category}', 'App\Http\Controllers\Admin\Work\CategoryController@getDelete');
Route::get('/admin/work/type', 'App\Http\Controllers\Admin\Work\TypeController@get');
Route::get('/admin/work/type/create', 'App\Http\Controllers\Admin\Work\TypeController@getCreate');
Route::post('/admin/work/type/create', 'App\Http\Controllers\Admin\Work\TypeController@postCreate');
Route::get('/admin/work/type/update/{type}', 'App\Http\Controllers\Admin\Work\TypeController@getUpdate');
Route::post('/admin/work/type/update/{type}', 'App\Http\Controllers\Admin\Work\TypeController@postUpdate');
Route::get('/admin/work/type/detail/{type}', 'App\Http\Controllers\Admin\Work\TypeController@getDetail');
Route::get('/admin/work/type/delete/{type}', 'App\Http\Controllers\Admin\Work\TypeController@getDelete');
Route::get('/admin/work/background', 'App\Http\Controllers\Admin\Work\BackgroundController@get');
Route::get('/admin/work/background/create', 'App\Http\Controllers\Admin\Work\BackgroundController@getCreate');
Route::post('/admin/work/background/create', 'App\Http\Controllers\Admin\Work\BackgroundController@postCreate');
Route::get('/admin/work/background/update/{id}', 'App\Http\Controllers\Admin\Work\BackgroundController@getUpdate');
Route::post('/admin/work/background/update/{id}', 'App\Http\Controllers\Admin\Work\BackgroundController@postUpdate');
Route::get('/admin/work/background/detail/{id}', 'App\Http\Controllers\Admin\Work\BackgroundController@getDetail');
Route::get('/admin/work/background/delete/{id}', 'App\Http\Controllers\Admin\Work\BackgroundController@getDelete');
Route::get('/admin/work/tool', 'App\Http\Controllers\Admin\Work\ToolController@get');
Route::get('/admin/work/tool/create', 'App\Http\Controllers\Admin\Work\ToolController@getCreate');
Route::post('/admin/work/tool/create', 'App\Http\Controllers\Admin\Work\ToolController@postCreate');
Route::get('/admin/work/tool/update/{id}', 'App\Http\Controllers\Admin\Work\ToolController@getUpdate');
Route::post('/admin/work/tool/update/{id}', 'App\Http\Controllers\Admin\Work\ToolController@postUpdate');
Route::get('/admin/work/tool/detail/{id}', 'App\Http\Controllers\Admin\Work\ToolController@getDetail');
Route::get('/admin/work/tool/delete/{id}', 'App\Http\Controllers\Admin\Work\ToolController@getDelete');
Route::get('/admin/config/default', 'App\Http\Controllers\Admin\Config\DefaultController@get');
Route::post('/admin/config/default', 'App\Http\Controllers\Admin\Config\DefaultController@post');
