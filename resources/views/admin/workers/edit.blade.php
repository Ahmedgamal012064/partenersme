@extends('layouts.admin')
@section('title'."تعديل  الاعمال")
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية </a>
                                </li>
                            <li class="breadcrumb-item"><a href="{{route('admin.workers')}}"> الاعمال </a>
                                </li>
                                <li class="breadcrumb-item active"> الاعمال - {{ $worker-> name_ar }}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> تعديل الاعمال </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form"
                                            action="{{route('admin.workers.update',$worker -> id)}}"
                                            method="POST"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <input name="id" value="{{$worker -> id}}" type="hidden">

                                            <div class="form-group">
                                                <div class="text-center">
                                                    <img
                                                src="@if(!empty($worker->photo)){{asset($worker->photo)}} @else {{asset('Adminlook/images/logo/logo.png')}} @endif"
                                                        class="rounded-circle  height-150" alt="صورة  ">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label> صوره </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="photo">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('photo')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i> بيانات الاعمال </h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم العمل بااللغة العربية </label>
                                                            <input type="text" value="{{$worker->name_ar}}" id="name_ar"
                                                                class="form-control"
                                                                placeholder="  "
                                                                name="name_ar" required>
                                                            @error("name_ar")
                                                        <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم العمل بااللغة الانجليزية </label>
                                                            <input type="text" value="{{$worker->name_en}}" id="name_en"
                                                                class="form-control"
                                                                placeholder="  "
                                                                name="name_en" required>
                                                            @error("name_en")
                                                        <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  الوصف باللغة العربية </label>
                                                                <textarea name="description_ar" class="form-control" rows="15" cols="20">{{$worker->description_ar}}</textarea>
                                                            @error("description_ar")
                                                        <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  الوصف باللغة الانجليزية </label>
                                                                <textarea name="description_en" class="form-control" rows="15" cols="20">{{$worker->description_en}}</textarea>
                                                            @error("description_en")
                                                        <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> لينك الاب استور </label>
                                                            <input type="url" value="{{$worker->link_appstore}}" id="link_appstore"
                                                                class="form-control"
                                                                placeholder="  "
                                                                name="link_appstore" required>
                                                            @error("link_appstore")
                                                        <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> لينك جوجل بلاي </label>
                                                            <input type="url" value="{{$worker->link_googleplay}}" id="link_googleplay"
                                                                class="form-control"
                                                                placeholder="  "
                                                                name="link_googleplay" required>
                                                            @error("link_googleplay")
                                                        <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> لينك الويب </label>
                                                            <input type="url" value="{{$worker->link_web}}" id="link_web"
                                                                class="form-control"
                                                                placeholder="  "
                                                                name="link_web" required>
                                                            @error("link_web")
                                                        <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> لينك اليوتيوب </label>
                                                            <input type="url" value="{{$worker->link_youtube}}" id="link_youtube"
                                                                class="form-control"
                                                                placeholder="  "
                                                                name="link_youtube" required>
                                                            @error("link_youtube")
                                                        <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> تحديث
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@endsection
