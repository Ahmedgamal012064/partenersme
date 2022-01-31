<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FaqConroller extends Controller
{
    public function index()
    {
        $faqs = Faq::get();
        return view('admin.faqs.index',compact('faqs'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required',
            'answer'      => 'required',
        ]);

        if ($validator->fails()) {
            notify()->error('حدث خطا ما برجاء المحاوله مرة اخري');
            return redirect( route('admin.faqs.create'))
                        ->withErrors($validator)
                        ->withInput();
        }

        Faq::create($request->all());

        notify()->success('تم اضافة بنجاح');
        return redirect()->route('admin.faqs')->with(["success","تم اضافة بنجاح"]);
    }

    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('admin.faqs.edit',compact('faq'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required',
            'answer'      => 'required',
        ]);

        if ($validator->fails()) {
            notify()->error('حدث خطا ما برجاء المحاوله مرة اخري');
            return redirect( route('admin.faqs.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }

        Faq::where('id', $id)->update($request->all());

        notify()->success('تم تحديث بيانات بنجاح');
        return redirect()->route('admin.faqs')->with(["success","تم تحديث بيانات بنجاح"]);
    }
}
