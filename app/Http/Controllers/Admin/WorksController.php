<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WorksController extends Controller
{
    public function index()
    {
        $workers = Work::paginate(PAGINATION_COUNT);
        return view('admin.workers.index',compact('workers'));
    }

    public function create()
    {
        return view('admin.workers.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_ar'             => 'required',
            'name_en'             => 'required',
            'photo'               => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description_ar'      => 'required',
            'description_en'      => 'required',
        ]);

        if ($validator->fails()) {
            notify()->error('حدث خطا ما برجاء المحاوله مرة اخري');
            return redirect( route('admin.workers.create'))
                        ->withErrors($validator)
                        ->withInput();
        }

        Work::create([
            'name_ar'             => $request->name_ar,
            'name_en'             => $request->name_en,
            'photo'               => uploadImage('works', $request->photo) ,
            'description_ar'      => $request->description_ar,
            'description_en'      => $request->description_en,
            'link_appstore'       => $request->link_appstore,
            'link_googleplay'     => $request->link_googleplay,
            'link_web'            => $request->link_web,
            'link_youtube'        => $request->link_youtube,
        ]);

        notify()->success('تم اضافة حيوان بنجاح');
        return redirect()->route('admin.workers')->with(["success","تم اضافة حيوان بنجاح"]);
    }

    public function edit($id)
    {
        $worker = Work::find($id);
        return view('admin.workers.edit',compact('worker'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'name_ar'             => 'required',
            'name_en'             => 'required',
            'photo'               => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description_ar'      => 'required',
            'description_en'      => 'required',
        ]);

        if ($validator->fails()) {
            notify()->error('حدث خطا ما برجاء المحاوله مرة اخري');
            return redirect( route('admin.workers.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->has('photo')) {
            Work::where('id', $id)->update([
                'photo'  => uploadImage('works', $request->photo)
            ]);
        }

        Work::where('id', $id)->update([
            'name_ar'             => $request->name_ar,
            'name_en'             => $request->name_en,
            'description_ar'      => $request->description_ar,
            'description_en'      => $request->description_en,
            'link_appstore'       => $request->link_appstore,
            'link_googleplay'     => $request->link_googleplay,
            'link_web'            => $request->link_web,
            'link_youtube'        => $request->link_youtube,
        ]);

        notify()->success('تم تحديث بيانات بنجاح');
        return redirect()->route('admin.workers')->with(["success","تم تحديث بيانات بنجاح"]);
    }
}
