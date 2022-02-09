@extends('layouts.admin')
@section('title',"الاعلانات بانتظار المراجعة")
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> الاعلانات بانتظار المراجعة </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الصفحة الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">الاعلانات بانتظار المراجعة
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
                                    <h4 class="card-title">الاعلانات بانتظار المراجعة</h4>
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
                                            class="table display nowrap table-striped table-bordered">{{--scroll-horizontal--}}
                                            <thead class="">
                                            <tr>
                                                <th>الاسم </th>
                                                <th>مالك الاعلان</th>
                                                <th>الباقة </th>
                                                <th>لينك الموقع </th>
                                                <th>تاريخ بدء الاعلان</th>
                                                <th>السعر</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($ads )
                                                @foreach($ads  as $ad )
                                                    <tr>
                                                        <td>{{$ad->name}}</td>
                                                        <td>{{$ad->user->name}}</td>
                                                        <td>{{$ad->plan->name}}</td>
                                                        <td><a href="{{$ad->link_web}}">{{$ad->link_web}}</a></td>
                                                        <td>{{$ad->date_publish}}</td>
                                                        <td>{{$ad->price}}ريال</td>
                                                        <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="{{route('admin.ads.status',[$ad->id, 'waitpay'])}}"
                                                                class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-0">موافقة وتحويل الدفع</a>

                                                            <a href="" data-toggle="modal" data-target="#notes{{$ad->id}}"
                                                                class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-0">ارسال ملاجظة</a>


                                                            <!-- Modal -->
                                                            <div class="modal fade" id="notes{{$ad->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">ارسال ملاجظة</h5>
                                                                    </div>
                                                                <form action="{{route('admin.ads.status',[$ad->id, 'notes'])}}" method="GET">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputEmail1">الملاحظة</label>
                                                                                <textarea class="form-control" placeholder="اكتب الملاحظة" name="note" required></textarea>
                                                                                <small id="emailHelp" class="form-text text-muted">هنا يتم كتابة الملاحظة التي يتم ارسالها لصاحب الاعلان لمراجعتها لقبول الاعلان</small>
                                                                            </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">اغلاق</button>
                                                                        <button type="submit" class="btn btn-success">ارسال</button>
                                                                    </div>
                                                                </form>
                                                                </div>
                                                                </div>
                                                            </div>

                                                            {{-- <a href="{{route('admin.ads.delete',$ad -> id)}}"
                                                                class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a> --}}

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset
                                            </tbody>
                                        </table>
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
