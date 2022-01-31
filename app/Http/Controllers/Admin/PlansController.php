<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PlansController extends Controller
{
    public function index()
    {
        $plans = Plan::get();
        return view('admin.plans.index',compact('plans'));
    }

    public function create()
    {
        return view('admin.plans.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required',
            'price'      => 'required',
            'views'      => 'required',
        ]);

        if ($validator->fails()) {
            notify()->error('حدث خطا ما برجاء المحاوله مرة اخري');
            return redirect( route('admin.plans.create'))
                        ->withErrors($validator)
                        ->withInput();
        }

        Plan::create($request->all());

        notify()->success('تم اضافة بنجاح');
        return redirect()->route('admin.plans')->with(["success","تم اضافة بنجاح"]);
    }

    public function edit($id)
    {
        $plan = Plan::find($id);
        return view('admin.plans.edit',compact('plan'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required',
            'price'      => 'required',
            'views'      => 'required',
        ]);

        if ($validator->fails()) {
            notify()->error('حدث خطا ما برجاء المحاوله مرة اخري');
            return redirect( route('admin.plans.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }

        Plan::where('id', $id)->update($request->all());

        notify()->success('تم تحديث بيانات بنجاح');
        return redirect()->route('admin.plans')->with(["success","تم تحديث بيانات بنجاح"]);
    }
}
