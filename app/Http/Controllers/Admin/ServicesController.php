<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::get();
        return view('admin.services.index',compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'             => 'required',
            'description'      => 'required',
        ]);

        if ($validator->fails()) {
            notify()->error('حدث خطا ما برجاء المحاوله مرة اخري');
            return redirect( route('admin.services.create'))
                        ->withErrors($validator)
                        ->withInput();
        }

        Service::create([
            'name'             => $request->name,
            'description'      => $request->description,
        ]);

        notify()->success('تم اضافة بنجاح');
        return redirect()->route('admin.services')->with(["success","تم اضافة بنجاح"]);
    }


    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.services.edit',compact('service'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'name'             => 'required',
            'description'      => 'required',
        ]);

        if ($validator->fails()) {
            notify()->error('حدث خطا ما برجاء المحاوله مرة اخري');
            return redirect( route('admin.services.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }

        Service::where('id', $id)->update([
            'name'             => $request->name,
            'description'      => $request->description,
        ]);

        notify()->success('تم تحديث بيانات بنجاح');
        return redirect()->route('admin.services')->with(["success","تم تحديث بيانات بنجاح"]);
    }
}
