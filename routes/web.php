<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Work;
use App\Models\Testmonial;
use App\Models\Service;

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
    /*******************UnAuthintication View***********************/
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

    Route::get('/Services/{type}', function ($type) {
        $service       = Service::where('name',$type)->first();
        if($service){
            return view('service',compact('service'));
        }else{
            notify()->info('الذي تبحث عنة غير متاح');
            return redirect(url('/'));
        }
    })->name('services');

    Route::get('/Parteners', function () { return view('parteners'); })->name('parteners');
    Route::post('/send-message', 'Controller@sendmessage')->name('send.message');
    Route::post('/Add-Newsletter', 'Controller@addnews')->name('add.news');
    Route::post('/devicetoken-guest', 'Controller@devicetokenguest')->name('save.token.guest');
    Route::get('/refresh_captcha', 'Controller@refreshCaptcha')->name('refresh_captcha');

    Route::get('/verifyphone', 'Controller@getverify')->name('verify.phone');
    Route::post('/verifed', 'Controller@verify')->name('verifyotp');
    Route::post('/resend-code', 'Controller@resend')->name('resend');

    Route::get('/Photo-Ads', 'Controller@photoads')->name('photo.ads');
    Route::get('/Video-Ads', 'Controller@videoads')->name('videos.ads');

    Auth::routes();
    /*******************Authintication View***********************/
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/update-profile', 'HomeController@updateprofile')->name('post.profile');

    Route::post('/Withdraw-Mony', 'HomeController@withdrawmoney')->name('post.withdraw');

    //Ads
    Route::get('/My-Ads', 'AdsController@allads')->name('all.ads');
    Route::get('/Add-Advertise', 'AdsController@addads')->name('add.ads');
    Route::post('/Post-Advertise', 'AdsController@postadd')->name('post.ads');
    Route::post('/View-Advertise/{id}', 'AdsController@viewadd')->name('post.view');
//});


/*
    لما اليوزر يشوف الاعلان اتشيك لو كان عامل لوحن او مسجل معانا ولا وبعد كدة اظهر الكابتشا ويكسب كوين
    عرض  صفحة فواتير لطلبات السحب وامكانية طباعاتها عرض صفحة للاعلانات التي قام برؤيتها وكم ربح عل كل اعلان

    لوحة الادمن اعرض الاعلانات بانتظار التفعيل واكشنات الاعلانات والسحوبات
*/
