<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;
use Illuminate\Support\Facades\Auth;
class AdsController extends Controller
{
    public function index()
    {
        $ads = Ad::get();
        return view('admin.ads.index',compact('ads'));
    }

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
}
