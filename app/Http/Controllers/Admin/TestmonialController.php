<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testmonial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TestmonialController extends Controller
{
    public function index()
    {
        $testmonials = Testmonial::paginate(PAGINATION_COUNT);
        return view('admin.testmonials.index',compact('testmonials'));
    }

    public function create()
    {
        return view('admin.testmonials.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'job'       => 'required',
            'comment'   => 'required',
        ]);

        if ($validator->fails()) {
            notify()->error('حدث خطا ما برجاء المحاوله مرة اخري');
            return redirect( route('admin.testmonials.create'))
                        ->withErrors($validator)
                        ->withInput();
        }

        Testmonial::create($request->all());

        notify()->success('تم اضافة حيوان بنجاح');
        return redirect()->route('admin.testmonials')->with(["success","تم اضافة حيوان بنجاح"]);
    }

    public function edit($id)
    {
        $testmonial = Testmonial::find($id);
        return view('admin.testmonials.edit',compact('testmonial'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'job'       => 'required',
            'comment'   => 'required',
        ]);

        if ($validator->fails()) {
            notify()->error('حدث خطا ما برجاء المحاوله مرة اخري');
            return redirect( route('admin.testmonials.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }

        Testmonial::where('id', $id)->update($request->all());

        notify()->success('تم تحديث بيانات بنجاح');
        return redirect()->route('admin.testmonials')->with(["success","تم تحديث بيانات بنجاح"]);
    }
}
