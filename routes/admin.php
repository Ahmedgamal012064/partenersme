<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

define('PAGINATION_COUNT',10);
/*Route::group( [ 'prefix' => 'LaravelLocalization'::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] ],function(){ */

Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
    Route::post('/Send-Messages', 'DashboardController@sendmessages')->name('admin.send.messages');
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/Editprofile', 'DashboardController@editprofile')->name('admin.editprofile');
    Route::post('/updateprofile/{id}', 'DashboardController@updateprofile')->name('admin.updateprofile');
    Route::post('/logout', 'DashboardController@logout')->name('admin.logout');


    ######################### Begin testmonials Routes ########################
    Route::group(['prefix' => 'testmonials'], function () {
        Route::get('/','TestmonialController@index') -> name('admin.testmonials');
        Route::get('create','TestmonialController@create') -> name('admin.testmonials.create');
        Route::post('store','TestmonialController@store') -> name('admin.testmonials.store');
        Route::get('edit/{id}','TestmonialController@edit') -> name('admin.testmonials.edit');
        Route::post('update/{id}','TestmonialController@update') -> name('admin.testmonials.update');
        //Route::get('delete/{id}','TestmonialController@destroy') -> name('admin.testmonials.delete');
    });
    ######################### End testmonials Routes  ########################
    ######################### Begin workers Routes ########################
    Route::group(['prefix' => 'subcats'], function () {
        Route::get('/','WorksController@index') -> name('admin.workers');
        Route::get('create','WorksController@create') -> name('admin.workers.create');
        Route::post('store','WorksController@store') -> name('admin.workers.store');
        Route::get('edit/{id}','WorksController@edit') -> name('admin.workers.edit');
        Route::post('update/{id}','WorksController@update') -> name('admin.workers.update');
        //Route::get('delete/{id}','WorksController@destroy') -> name('admin.workers.delete');
    });
    ######################### End workers Routes  ########################
    ######################### Begin animals Routes ########################
    Route::group(['prefix' => 'animals'], function () {
        Route::get('/','AnimalsController@index') -> name('admin.animals');
        Route::get('create','AnimalsController@create') -> name('admin.animals.create');
        Route::post('store','AnimalsController@store') -> name('admin.animals.store');
        Route::get('edit/{id}','AnimalsController@edit') -> name('admin.animals.edit');
        Route::post('update/{id}','AnimalsController@update') -> name('admin.animals.update');
        //Route::get('delete/{id}','AnimalsController@destroy') -> name('admin.animals.delete');
    });
    ######################### End animals Routes  ########################
    ######################### Begin countries Routes ########################
    Route::group(['prefix' => 'countries'], function () {
    Route::get('/','CounteryController@index') -> name('admin.countries');
    Route::get('create','CounteryController@create') -> name('admin.countries.create');
    Route::post('store','CounteryController@store') -> name('admin.countries.store');
    Route::get('edit/{id}','CounteryController@edit') -> name('admin.countries.edit');
    Route::post('update/{id}','CounteryController@update') -> name('admin.countries.update');
    //Route::get('delete/{id}','CounteryController@destroy') -> name('admin.countries.delete');
});
######################### End countries Routes  ########################
    ######################### Begin regions Routes ########################
    Route::group(['prefix' => 'regions'], function () {
        Route::get('/','RegionConroller@index') -> name('admin.regions');
        Route::get('create','RegionConroller@create') -> name('admin.regions.create');
        Route::post('store','RegionConroller@store') -> name('admin.regions.store');
        Route::get('edit/{id}','RegionConroller@edit') -> name('admin.regions.edit');
        Route::post('update/{id}','RegionConroller@update') -> name('admin.regions.update');
        //Route::get('delete/{id}','RegionConroller@destroy') -> name('admin.regions.delete');
    });
    ######################### End regions Routes  ########################
    ######################### Begin faqs Routes ########################
    Route::group(['prefix' => 'faqs'], function () {
        Route::get('/','FaqConroller@index') -> name('admin.faqs');
        Route::get('/orders','FaqConroller@orders') -> name('admin.orders');
        Route::get('create','FaqConroller@create') -> name('admin.faqs.create');
        Route::post('store','FaqConroller@store') -> name('admin.faqs.store');
        Route::get('edit/{id}','FaqConroller@edit') -> name('admin.faqs.edit');
        Route::post('update/{id}','FaqConroller@update') -> name('admin.faqs.update');
        Route::get('delete/{id}','FaqConroller@destroy') -> name('admin.faqs.delete');
    });
    ######################### End faqs Routes  ########################

    ######################### Begin helpers Routes ########################
    Route::group(['prefix' => 'helpers'], function () {
        Route::get('/','HelpersAdminController@index') -> name('admin.helpers');
        Route::get('create','HelpersAdminController@create') -> name('admin.helpers.create');
        Route::post('store','HelpersAdminController@store') -> name('admin.helpers.store');
        Route::get('edit/{id}','HelpersAdminController@edit') -> name('admin.helpers.edit');
        Route::post('update/{id}','HelpersAdminController@update') -> name('admin.helpers.update');
        Route::get('delete/{id}','HelpersAdminController@destroy') -> name('admin.helpers.delete');
       // Route::get('changeStatus/{id}','HelperController@changeStatus') -> name('admin.helpers.status');
    });
    ######################### Begin users Routes ########################
    Route::group(['prefix' => 'users'], function () {
        Route::get('/user/{type}','UserController@index') -> name('admin.users');
        Route::get('create/{type}','UserController@create') -> name('admin.users.create');
        Route::post('store','UserController@store') -> name('admin.users.store');
        Route::get('edit/{id}','UserController@edit') -> name('admin.users.edit');
        Route::post('update/{id}','UserController@update') -> name('admin.users.update');
        Route::get('delete/{id}','UserController@destroy') -> name('admin.users.delete');
       // Route::get('changeStatus/{id}','UserController@changeStatus') -> name('admin.users.status');

    });
    ######################### End users Routes  ########################
    ######################### Begin products Routes ########################
    Route::group(['prefix' => 'products'], function () {
        Route::get('/','ProductController@index') -> name('admin.products');
        Route::get('create','ProductController@create') -> name('admin.products.create');
        Route::post('store','ProductController@store') -> name('admin.products.store');
        Route::get('edit/{id}','ProductController@edit') -> name('admin.products.edit');
        Route::post('update/{id}','ProductController@update') -> name('admin.products.update');
        Route::get('delete/{id}','ProductController@destroy') -> name('admin.products.delete');
       // Route::get('changeStatus/{id}','ProductController@changeStatus') -> name('admin.products.status');

    });
    ######################### End products Routes  ########################

});

Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin'], function () {
    Route::get('login', 'loginController@getLogin')->name('admin.login');
    Route::post('login', 'loginController@login')->name('admin.login');
});

//});

