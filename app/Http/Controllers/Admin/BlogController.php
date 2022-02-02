<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::get();
        return view('admin.blogs.index',compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required|unique:blogs,name',
            'description'   => 'required',
            'photo'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' ,
        ]);

        if ($validator->fails()) {
            notify()->error('حدث خطا ما برجاء المحاوله مرة اخري');
            return redirect( route('admin.blogs.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $filePath = "" ;
        if ($request->has('photo')) {
            $filePath = uploadImage('blogs', $request->photo);
        }

        Blog::create([
            "name"         => $request->name ,
            "description"  => $request->description ,
            "photo"        => $filePath ,
        ]);

        notify()->success('تم اضافة بنجاح');
        return redirect()->route('admin.blogs')->with(["success","تم اضافة بنجاح"]);
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.edit',compact('blog'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'name'         => 'required|unique:blogs,name,'.$id,
            'description'  => 'required',
            'photo'        => 'required_without:id|image|mimes:jpeg,png,jpg,gif,svg|max:2048' ,
        ]);

        if ($validator->fails()) {
            notify()->error('حدث خطا ما برجاء المحاوله مرة اخري');
            return redirect( route('admin.blogs.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->has('photo')) {
            $filePath = uploadImage('blogs', $request->photo);
            Blog ::where('id', $id)
                ->update([
                    'photo' => $filePath,
                ]);
        }

        Blog::where('id', $id)->update([
            "name"           => $request->name  ,
            "description"    => $request->description ,
        ]);

        notify()->success('تم تحديث بيانات بنجاح');
        return redirect()->route('admin.blogs')->with(["success","تم تحديث بيانات بنجاح"]);
    }
}
