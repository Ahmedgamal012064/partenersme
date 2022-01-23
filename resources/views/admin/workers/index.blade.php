@extends('layouts.admin')
@section('title',"الاعمال")
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">  الاعمال </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active"> الاعمال
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">الاعمال</h4>
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
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">{{--scroll-horizontal--}}
                                            <thead class="">
                                            <tr>
                                                <th>الاسم </th>
                                                <th>الوصف</th>
                                                <th>صورة</th>
                                                <th>لينك الاباستور</th>
                                                <th>لينك جوجل بلاي</th>
                                                <th>لينك الويب</th>
                                                <th>لينك اليوتيوب</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($workers )
                                                @foreach($workers  as $worker )
                                                    <tr>
                                                        <td>{{$worker-> name_ar}}</td>
                                                        <td>{{$worker-> description_ar}}</td>
                                                        <td>
                                                        <img style="width: 100px; height: 80px;"
                                                        src="@if(!empty($worker ->photo))
                                                                {{asset($worker->photo)}}
                                                            @else
                                                                {{asset('Adminlook/images/logo/logo.png')}}
                                                            @endif">
                                                        </td>
                                                        <td>{{$worker-> link_appstore}}</td>
                                                        <td>{{$worker-> link_googleplay}}</td>
                                                        <td>{{$worker-> link_web}}</td>
                                                        <td>{{$worker-> link_youtube}}</td>
                                                        <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a href="{{route('admin.workers.edit',$worker -> id)}}"
                                                                    class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>

                                                            {{--<a href="{{route('admin.workers.delete',$worker -> id)}}"
                                                                    class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>--}}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset
                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">
                                            {{  $workers -> links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
