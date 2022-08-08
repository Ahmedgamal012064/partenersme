@extends('layouts.app')
@section('title','PartenersMe | Home Page')
@section('content')
<!-- Page Title Start -->
<div class="page-title title-bg-7">
    <div class="container">
        <div class="title-text text-center">
            <h2>الانضمام للدليل التجاري الرقمي</h2>
            <ul>
                <li>
                    <a href="{{url('/')}}">الصفحة الرئيسية</a>
                </li>
                <li>
                  الانضمام للدليل التجاري الرقمي
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Title End -->

<!-- Contact Section Start -->
<section class="contact-section contact-style-two pt-100 pb-100">
    <div class="container">
        <div class="section-title text-center">
            <h2>تفاصيل الانضمام للدليل التجاري الرقمي</h2>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="contact-area">
                    <form action="{{route('post.jointoguide')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">اسم المنصة</div>
                                    <input type="text" name="name" id="name" class="form-control"
                                    required
                                    placeholder="اسم المنصة"
                                    value="{{old('name')}}">
                                    @error('name')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">صورة</div>
                                    <input type="file" name="photo" id="photo" class="form-control"
                                    required accept="video/*,image/*">
                                    @error('photo')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">لينك موقع ان وجد</div>
                                    <input type="url" name="link_web" id="link_web" class="form-control" value="{{old('link_web')}}"
                                    placeholder="لينك موقع ان وجد">
                                    @error('link_web')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">هاتف الواتس اب للتواصل</div>
                                    <input type="tel" name="phone" id="phone" class="form-control"
                                    placeholder="هاتف الواتس اب للتواصل" value="{{old('phone')}}" dir="ltr">
                                    @error('phone')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">رابط اسناب شات</div>
                                    <input type="url" name="link_snap" id="link_snap" class="form-control"
                                    placeholder="رابط اسناب شات" value="{{old('link_snap')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">رابط تويتر</div>
                                    <input type="url" name="link_twitter" id="link_twitter" class="form-control"
                                    placeholder="رابط تويتر" value="{{old('link_twitter')}}">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn contact-btn">
                                    ارسال طلب
                                </button>
                                <div class="text-info mt-10">ملاحظة السعر يشمل الضريبة</div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
