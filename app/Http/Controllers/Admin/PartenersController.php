<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partener;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PartenersController extends Controller
{
    public function index()
    {
        $parteners = Partener::get();
        return view('admin.parteners.index',compact('parteners'));
    }

    public function create()
    {
        return view('admin.parteners.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required|unique:parteners,title',
            'link_web'    => 'required',
            'photo'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' ,
        ]);

        if ($validator->fails()) {
            notify()->error('حدث خطا ما برجاء المحاوله مرة اخري');
            return redirect( route('admin.parteners.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $filePath = "" ;
        if ($request->has('photo')) {
            $filePath = uploadImage('parteners', $request->photo);
        }

        Partener::create([
            "title"     => $request->title ,
            "link_web"  => $request->link_web ,
            "photo"     => $filePath ,
        ]);

        notify()->success('تم اضافة بنجاح');
        return redirect()->route('admin.parteners')->with(["success","تم اضافة بنجاح"]);
    }

    public function edit($id)
    {
        $partener = Partener::find($id);
        return view('admin.parteners.edit',compact('partener'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required|unique:parteners,title,'.$id,
            'link_web'    => 'required',
            'photo'       => 'required_without:id|image|mimes:jpeg,png,jpg,gif,svg|max:2048' ,
        ]);

        if ($validator->fails()) {
            notify()->error('حدث خطا ما برجاء المحاوله مرة اخري');
            return redirect( route('admin.parteners.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->has('photo')) {
            $filePath = uploadImage('parteners', $request->photo);
            Partener::where('id', $id)
                ->update([
                    'photo' => $filePath,
                ]);
        }

        Partener::where('id', $id)->update([
            "title"     => $request->title ,
            "link_web"  => $request->link_web ,
        ]);

        notify()->success('تم تحديث بيانات بنجاح');
        return redirect()->route('admin.parteners')->with(["success","تم تحديث بيانات بنجاح"]);
    }
}
