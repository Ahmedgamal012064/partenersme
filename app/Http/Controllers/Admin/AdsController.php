<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class AdsController extends Controller
{

    public function pending()
    {
        $ads = Ad::where("status","pending")->get();
        return view('admin.ads.pending',compact('ads'));
    }

    public function pendingpay()
    {
        $ads = Ad::where("status","waitpay")->get();
        return view('admin.ads.waitpay',compact('ads'));
    }

    public function active()
    {
        $ads = Ad::where("status","active")->get();
        return view('admin.ads.active',compact('ads'));
    }

    public function finished()
    {
        $ads = Ad::where("status","finished")->get();
        return view('admin.ads.active',compact('ads'));
    }

    public function notes()
    {
        $ads = Ad::where("status","notes")->get();
        return view('admin.ads.notes',compact('ads'));
    }

    public function create()
    {
        return view('admin.ads.create');
    }

    public function changeStatus(Request $request,$id,$status)
    {
        $ad = Ad::find($id);
        if(!$ad){
            notify()->error("هناك شئ خطأ ما حدث");
            return redirect()->route('admin.dashboard');
        }
        if($status == "waitpay"){
            //send pay link in sms
            $ad->update([
                'status'   => $status
            ]);
            notify()->success("تمت العملية بنجاح");
            return redirect()->back();
        }elseif($status == "notes"){
            //send sms notes and link edit ad
            $validator = Validator::make($request->all(), [
                'note'       => 'required',
            ]);

            if ($validator->fails()) {
                notify()->error('حدث خطا ما برجاء المحاوله مرة اخري');
                return redirect( route('admin.dashboard'))
                            ->withErrors($validator)
                            ->withInput();
            }
            $ad->update([
                'status'   => $status
            ]);
            notify()->success("تمت العملية بنجاح");
            return redirect()->back();
        }else{
            notify()->error("هناك شئ خطأ ما حدث");
            return redirect()->route('admin.dashboard');
        }
    }
}
