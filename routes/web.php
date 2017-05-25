<?php

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

// index
Route::get('/', ['uses' => 'PagesController@index', 'as' => 'index']);
Route::get('/news/{slug}', ['uses' => 'PagesController@single', 'as' => 'single']);
Route::get('/category/{slug}', ['uses' => 'PagesController@cate', 'as' => 'cate']);
Route::get('/subCategory/{slug}', ['uses' => 'PagesController@sub', 'as' => 'subCate']);
Route::post('/search', ['uses' => 'PagesController@search', 'as' => 'search']);
Route::post('/comment', ['uses' => 'PagesController@comment', 'as' => 'comment']);

// login
Route::get('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);

// logout
Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// register
Route::get('/register', ['as' => 'register', 'uses' => 'Auth\RegisterController@getRegister']);
Route::post('/register', ['as' => 'register', 'uses' => 'Auth\RegisterController@postRegister']);

Route::group(['middleware' => 'checkAuth'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('home', ['as' => 'admin.home', 'uses' => 'HomeController@index']);
        // group user
        Route::group(['prefix' => 'user'], function(){
            Route::get('/index', ['uses' => 'UserController@index', 'as' => 'user.index'])->middleware('checkIsAdmin');
            Route::get('/show', ['uses' => 'UserController@show', 'as' => 'user.show']);
            Route::post('/update', ['uses' => 'UserController@update', 'as' => 'user.update']);
            Route::post('/update-password', ['uses' => 'UserController@updatePass', 'as' => 'user.updatePass']);
            Route::post('update-img', ['uses' => 'UserController@updateImg', 'as' => 'user.updateImg']);
            Route::post('/destroy', ['uses' => 'UserController@destroy', 'as' => 'user.destroy']);
        });
        // group news
        Route::group(['prefix' => 'news'], function () {
            Route::get('/index', ['as' => 'news.index', 'uses' => 'NewsController@index']);
            Route::get('/view/{slug}', ['as' => 'news.view', 'uses' => 'NewsController@view']);
            Route::get('/add', ['as' => 'news.add', 'uses' => 'NewsController@add']);
            Route::post('/store', ['as' => 'news.store', 'uses' => 'NewsController@store']);
            Route::post('/delete/{id}', ['as' => 'news.delete', 'uses' => 'NewsController@delete']);
            Route::get('/edit/{id}', ['as' => 'news.edit', 'uses' => 'NewsController@getEdit']);
            Route::post('/edit/{id}', ['as' => 'news.edit', 'uses' => 'NewsController@postEdit']);
            Route::get('/check/{id}', ['as' => 'news.check', 'uses' => 'NewsController@check']);
            Route::get('/newsNotCheck', ['as' => 'news.newsNotCheck', 'uses' => 'NewsController@getNewsNotCheck'])->middleware('checkIsAdmin');
        });

        /**
         * Route comment
         */
        Route::group(['prefix' => 'comment', 'middleware' => 'checkIsAdmin'], function () {
            Route::get('/index', ['as' => 'comment.index', 'uses' => 'CommentController@index']);
            Route::post('/check/{id}', ['as' => 'comment.check', 'uses' => 'CommentController@check']);
            Route::post('/delete/{id}', ['as' => 'comment.delete', 'uses' => 'CommentController@delete']);
        });

        /**
         * Route category
         */
        Route::group(['prefix' => 'category'], function () {
            Route::get('/index', ['uses' => 'CategoryController@index', 'as' => 'category.index']);
            Route::get('/show/{id}', ['uses' => 'CategoryController@show', 'as' => 'category.show']);
            Route::get('/create', ['uses' => 'CategoryController@create', 'as' => 'category.create']);
            Route::post('/store', ['uses' => 'CategoryController@store', 'as' => 'category.store']);
            Route::get('/edit/{id}', ['uses' => 'CategoryController@edit', 'as' => 'category.edit']);
            Route::post('/update', ['uses' => 'CategoryController@update', 'as' => 'category.update']);
            Route::post('/destroy', ['uses' => 'CategoryController@destroy', 'as' => 'category.destroy']);
        });

        /**
         * Route subCategory
         */
        Route::group(['prefix' => 'subcategory'], function () {
            Route::get('/index', ['uses' => 'SubCategoryController@index', 'as' => 'subcategory.index']);
            Route::get('/show/{id}', ['uses' => 'SubCategoryController@show', 'as' => 'subcategory.show']);
            Route::get('/create', ['uses' => 'SubCategoryController@create', 'as' => 'subcategory.create']);
            Route::post('/store', ['uses' => 'SubCategoryController@store', 'as' => 'subcategory.store']);
            Route::get('/edit/{id}', ['uses' => 'SubCategoryController@edit', 'as' => 'subcategory.edit']);
            Route::post('/update', ['uses' => 'SubCategoryController@update', 'as' => 'subcategory.update']);
            Route::post('/destroy', ['uses' => 'SubCategoryController@destroy', 'as' => 'subcategory.destroy']);
            Route::post('/cat_change', ['uses' => 'SubCategoryController@cateChange', 'as' => 'subcategory.catChange']);
        });

        /**
         * Route Advertisements
         */
        Route::group(['prefix' => 'advertisements', 'middleware' => 'checkIsAdmin'], function() {
            Route::get('/index', ['uses' => 'AdvertisementsController@index', 'as' => 'advertisements.index']);
            Route::get('/create', ['uses' => 'AdvertisementsController@create', 'as' => 'advertisements.create']);
            Route::post('/store', ['uses' => 'AdvertisementsController@store', 'as' => 'advertisements.store']);
            Route::get('/edit/{id}', ['uses' => 'AdvertisementsController@edit', 'as' => 'advertisements.edit']);
            Route::post('/update', ['uses' => 'AdvertisementsController@update', 'as' => 'advertisements.update']);
            Route::post('/destroy', ['uses' => 'AdvertisementsController@destroy', 'as' => 'advertisements.destroy']);
        });
    });
});
