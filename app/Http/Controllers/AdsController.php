<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Plan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allads()
    {
        $ads = Ad::where('user_id',Auth::id())->inRandomOrder()->paginate(9);
        return view('ads.index' ,compact('ads'));
    }

    public function addads()
    {
        if(Auth::user()->type == "user"){
            notify()->info("ليس لديك الصلاحية لزيارة هذة الصفحة");
            return redirect()->route("home");
        }
        $plans = Plan::get();
        return view('ads.create',compact('plans'));
    }

    public function postadd(Request $request)
    {
        $videos = ['mp4','ogx','oga','ogv','ogg','webm'];
        $photos = ['jpeg','png','jpg','gif','svg'];
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'plan'          => 'required|numeric',
            'photo'         => 'required' , //|mimes:jpeg,png,jpg,gif,svg|max:2048
            'date_publish'  => 'required|date'
        ]);

        if ($validator->fails()) {
            notify()->error('حدث خطأ في البيانات حاول مرة أخري');
            return redirect(route('add.ads'))
                        ->withErrors($validator)
                        ->withInput();
        }

        $filephoto = '';
        $type      = '' ;

        if(in_array(pathinfo($request->photo->getClientOriginalName() , PATHINFO_EXTENSION) , $videos))
        {
            $validator = Validator::make($request->all(), [
                'photo'         => 'required|4096' ,
            ]);

            if ($validator->fails()) {
                notify()->error('حدث خطأ في رفع الفديو');
                return redirect(route('add.ads'))
                            ->withErrors($validator)
                            ->withInput();
            }
            $filephoto = uploadImage('ads', $request->photo);
            $type = "video";

        }elseif(in_array(pathinfo($request->photo->getClientOriginalName() , PATHINFO_EXTENSION) , $photos))
        {
            $validator = Validator::make($request->all(), [
                'photo'         => 'required|image|max:1024' ,
            ]);

            if ($validator->fails()) {
                notify()->error('حدث خطأ في رفع الصورة');
                return redirect(route('add.ads'))
                            ->withErrors($validator)
                            ->withInput();
            }
            $filephoto = uploadImage('ads', $request->photo);
            $type = "photo";
        }else{
            notify()->error('امتداد الصورة او الفديو غير مدعوم لدينا');
            return redirect(route('add.ads'))->withInput();
        }
        Ad::create([
            "name"           => $request->name ,
            "plan_id"        => $request->plan ,
            "user_id"        => Auth::id() ,
            "photo"          => $filephoto ,
            "type"           => $type,
            "link_web"       => $request->link_web  ,
            "date_publish"   => $request->date_publish  ,
            "link_snap"      => $request->link_snap ,
            "link_twitter"   => $request->link_twitter ,
            "phone"          => $request->phone ,
            "price"          => Plan::find($request->plan)->price + 25  ,
            "status"         => "pending" ,
        ]);

        notify()->success('تم ارسال الطلب بنجاح سوف يتم المراجعة ومراسلتك');
        return redirect()->route('add.ads')->with('success','تم ارسال الطلب بنجاح');
    }


    public function viewadd(Request $request)
    {
        //
    }
}
