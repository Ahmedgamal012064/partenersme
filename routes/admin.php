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


    ######################### Begin services Routes ########################Done
    Route::group(['prefix' => 'services'], function () {
        Route::get('/','ServicesController@index') -> name('admin.services');
        Route::get('create','ServicesController@create') -> name('admin.services.create');
        Route::post('store','ServicesController@store') -> name('admin.services.store');
        Route::get('edit/{id}','ServicesController@edit') -> name('admin.services.edit');
        Route::post('update/{id}','ServicesController@update') -> name('admin.services.update');
        //Route::get('delete/{id}','ServicesController@destroy') -> name('admin.services.delete');
    });
    ######################### End services Routes  ########################
    ######################### Begin plans Routes ########################Done
    Route::group(['prefix' => 'plans'], function () {
        Route::get('/','PlansController@index') -> name('admin.plans');
        Route::get('create','PlansController@create') -> name('admin.plans.create');
        Route::post('store','PlansController@store') -> name('admin.plans.store');
        Route::get('edit/{id}','PlansController@edit') -> name('admin.plans.edit');
        Route::post('update/{id}','PlansController@update') -> name('admin.plans.update');
        //Route::get('delete/{id}','PlansController@destroy') -> name('admin.plans.delete');
    });
    ######################### End plans Routes  ########################
    ######################### Begin users Routes ########################Done
    Route::group(['prefix' => 'users'], function () {
    Route::get('/','UserController@index') -> name('admin.users');
    Route::get('create','UserController@create') -> name('admin.users.create');
    Route::post('store','UserController@store') -> name('admin.users.store');
    Route::get('edit/{id}','UserController@edit') -> name('admin.users.edit');
    Route::post('update/{id}','UserController@update') -> name('admin.users.update');
    //Route::get('delete/{id}','UserController@destroy') -> name('admin.users.delete');
});
######################### End users Routes  ########################
    ######################### Begin companies Routes ########################Done
    Route::group(['prefix' => 'companies'], function () {
        Route::get('/','CompanyConroller@index') -> name('admin.companies');
        Route::get('create','CompanyConroller@create') -> name('admin.companies.create');
        Route::post('store','CompanyConroller@store') -> name('admin.companies.store');
        Route::get('edit/{id}','CompanyConroller@edit') -> name('admin.companies.edit');
        Route::post('update/{id}','CompanyConroller@update') -> name('admin.companies.update');
        //Route::get('delete/{id}','CompanyConroller@destroy') -> name('admin.companies.delete');
    });
    ######################### End companies Routes  ########################
    ######################### Begin faqs Routes ########################Done
    Route::group(['prefix' => 'faqs'], function () {
        Route::get('/','FaqConroller@index') -> name('admin.faqs');
        Route::get('create','FaqConroller@create') -> name('admin.faqs.create');
        Route::post('store','FaqConroller@store') -> name('admin.faqs.store');
        Route::get('edit/{id}','FaqConroller@edit') -> name('admin.faqs.edit');
        Route::post('update/{id}','FaqConroller@update') -> name('admin.faqs.update');
        //Route::get('delete/{id}','FaqConroller@destroy') -> name('admin.faqs.delete');
    });
    ######################### End faqs Routes  ########################
    ######################### Begin ads Routes ########################
    Route::group(['prefix' => 'ads'], function () {
        Route::get('/','AdsController@index') -> name('admin.ads');
        Route::get('/pending','AdsController@pending') -> name('admin.ads.pending');
        Route::get('/pending-pay','AdsController@pendingpay') -> name('admin.ads.pendingpay');
        Route::get('/active','AdsController@active') -> name('admin.ads.active');
        Route::get('/finished','AdsController@finished') -> name('admin.ads.finished');
        Route::get('/cancel','AdsController@finished') -> name('admin.ads.cancel');
        Route::get('create','AdsController@create') -> name('admin.ads.create');
        Route::post('store','AdsController@store') -> name('admin.ads.store');
        Route::get('edit/{id}','AdsController@edit') -> name('admin.ads.edit');
        Route::post('update/{id}','AdsController@update') -> name('admin.ads.update');
        Route::get('delete/{id}','AdsController@destroy') -> name('admin.ads.delete');
        Route::get('changeStatus/{id}','AdsController@changeStatus') -> name('admin.ads.status');

    });
    ######################### End ads Routes  ########################
    ######################### Begin testmonials Routes ########################Done
    Route::group(['prefix' => 'testmonials'], function () {
        Route::get('/','TestmonialController@index') -> name('admin.testmonials');
        Route::get('create','TestmonialController@create') -> name('admin.testmonials.create');
        Route::post('store','TestmonialController@store') -> name('admin.testmonials.store');
        Route::get('edit/{id}','TestmonialController@edit') -> name('admin.testmonials.edit');
        Route::post('update/{id}','TestmonialController@update') -> name('admin.testmonials.update');
        //Route::get('delete/{id}','TestmonialController@destroy') -> name('admin.testmonials.delete');
    });
    ######################### End testmonials Routes  ########################
    ######################### Begin parteners Routes ########################Done
    Route::group(['prefix' => 'parteners'], function () {
        Route::get('/','PartenersController@index') -> name('admin.parteners');
        Route::get('create','PartenersController@create') -> name('admin.parteners.create');
        Route::post('store','PartenersController@store') -> name('admin.parteners.store');
        Route::get('edit/{id}','PartenersController@edit') -> name('admin.parteners.edit');
        Route::post('update/{id}','PartenersController@update') -> name('admin.parteners.update');
        Route::get('delete/{id}','PartenersController@destroy') -> name('admin.parteners.delete');
    });
    ######################### End parteners Routes  ########################
    ######################### Begin blogs Routes ########################
    Route::group(['prefix' => 'blogs'], function () {
        Route::get('/','BlogController@index') -> name('admin.blogs');
        Route::get('create','BlogController@create') -> name('admin.blogs.create');
        Route::post('store','BlogController@store') -> name('admin.blogs.store');
        Route::get('edit/{id}','BlogController@edit') -> name('admin.blogs.edit');
        Route::post('update/{id}','BlogController@update') -> name('admin.blogs.update');
        Route::get('delete/{id}','BlogController@destroy') -> name('admin.blogs.delete');
    });
    ######################### End blogs Routes  ########################
    ######################### Begin withdraws Routes ########################
    Route::group(['prefix' => 'withdraws'], function () {
        Route::get('/','WithdrawController@index') -> name('admin.withdraws');
        Route::get('/today','WithdrawController@today') -> name('admin.withdraws.today');
        Route::get('/Accept','WithdrawController@accept') -> name('admin.withdraws.accept');
        Route::get('/Pending','WithdrawController@pending') -> name('admin.withdraws.pending');
        Route::get('/Cancel','WithdrawController@cancel') -> name('admin.withdraws.cancel');
        Route::get('status/{id}','WithdrawController@destroy') -> name('admin.withdraws.status');
    });
    ######################### End withdraws Routes  ########################

});

Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin'], function () {
    Route::get('login', 'loginController@getLogin')->name('admin.login');
    Route::post('login', 'loginController@login')->name('admin.login');
});

//});

