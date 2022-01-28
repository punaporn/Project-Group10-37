<?php

use App\Content;
use App\Category;
use App\Product;
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

//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
});
//Route for admin
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard', 'admin\adminController@index')->name('admin.dashboard');



        Route::group(['prefix' => 'content'], function () {

            Route::get('/', function () {
                return view('admin/content/index', ['content' => Content::all()]);
            })->name('content');
            Route::get('/add', function () {
                return view('admin/content/add');
            })->name('content_add');
            Route::post('/create', 'ContentController@create')->name('content_create');
            Route::get('/edit/{id}', 'ContentController@edit')->name('content_edit');
            Route::post('/update/{id}', 'ContentController@update')->name('content_update');
            Route::get('/remove/{id}', 'ContentController@destroy')->name('content_remove');
        });

        Route::group(['prefix' => 'category'], function () {

            Route::get('/', function () {
                return view('admin/category/index', ['category' => category::all()]);
            })->name('category');
            Route::get('/add', function () {
                return view('admin/category/add');
            })->name('category_add');
            Route::post('/create', 'CategoryController@create')->name('category_create');
            Route::get('/edit/{id}', 'CategoryController@edit')->name('category_edit');
            Route::post('/update/{id}', 'CategoryController@update')->name('category_update');
            Route::get('/remove/{id}', 'CategoryController@destroy')->name('category_remove');
        });
        Route::group(['prefix' => 'products'], function () {

            Route::get('/', function () {
                return view('admin/product/index', ['product' => Product::all()]);
            })->name('product');
            Route::get('/add', function () {
                return view('admin/product/add');
            })->name('product_add');
            Route::post('/create', 'ProductController@create')->name('product_create');
            Route::get('/edit/{id}', 'ProductController@edit')->name('product_edit');
            Route::post('/update/{id}', 'ProductController@update')->name('product_update');
            Route::get('/remove/{id}', 'ProductController@destroy')->name('product_remove');
        });
    });
});
