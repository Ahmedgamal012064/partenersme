<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Work;
use App\Models\Testmonial;

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
/*
Route::group( [ 'prefix' => 'LaravelLocalization'::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] ],function(){ *///start translate

    Route::get('/', function () {
        $testmonials = Testmonial::inRandomOrder()->limit(10)->get();
        $works       = Work::inRandomOrder()->limit(10)->get();
        return view('welcome',compact(['testmonials','works']));
    });
    Route::get('/Works/{type}', function ($type) {
        if($type == 'web'){
            $works       = Work::whereNotNull('link_web')->inRandomOrder()->limit(10)->get();
            return view('works',compact('works'));
        }elseif($type == 'mobile'){
            $works       = Work::whereNotNull('link_appstore')->orwhereNotNull('link_googleplay')->inRandomOrder()->limit(10)->get();
            return view('works',compact('works'));
        }else{
            notify()->info('الذي تبحث عنة غير متاح');
            return redirect(url('/'));
        }
    })->name('works');
    Route::get('/Parteners', function () { return view('parteners'); })->name('parteners');
    Route::post('/send-message', 'Controller@sendmessage')->name('send.message');
    Route::post('/Add-Newsletter', 'Controller@addnews')->name('add.news');
    Route::post('/devicetoken-guest', 'Controller@devicetokenguest')->name('save.token.guest');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
//});
