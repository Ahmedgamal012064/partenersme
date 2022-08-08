@extends('layouts.app')
@section('title','PartenersMe')
@section('content')
<!-- Page Title Start -->
<div class="page-title title-bg-7">
    <div class="container">
        <div class="title-text text-center">
            <h2>إدارة حملات اعلانية رقمية</h2>
            <ul>
                <li>
                    <a href="{{url('/')}}">الصفحة الرئيسية</a>
                </li>
                <li>
                    إدارة حملات اعلانية رقمية
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
            <h2>إدارة حملات اعلانية رقمية</h2>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="contact-area">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">اسم </div>
                                    <input type="text" name="name" id="name" class="form-control"
                                    required
                                    placeholder="اسم"
                                    value="{{old('name')}}">
                                    @error('name')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">الهاتف </div>
                                    <input type="tel" name="phone" id="phone" class="form-control"
                                    required
                                    placeholder="الهاتف"
                                    value="{{old('phone')}}">
                                    @error('phone')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">البريد الالكتروني </div>
                                    <input type="email" name="email" id="email" class="form-control"
                                    required
                                    placeholder="البريد الالكتروني"
                                    value="{{old('email')}}">
                                    @error('email')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">المطلوب </div>
                                    <textarea name="meg" id="meg" class="form-control" required>{{old('meg')}}</textarea>
                                    @error('meg')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn contact-btn">
                                    ارسال 
                                </button>
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
