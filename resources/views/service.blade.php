@extends('layouts.app')
@section('title','PartenersMe | Services')
@section('content')
<!-- Page Title Start -->
<div class="page-title title-bg-7">
    <div class="container">
        <div class="title-text text-center">
            <h2>{{$service->name}}</h2>
            <ul>
                <li>
                    <a href="{{url('/')}}">الصفحة الرئيسية</a>
                </li>
                <li>
                    الخدمات
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Title End -->
<!-- Privacy Section Start -->
<div class="privacy-section pt-100 pb-100">
    <div class="container">
        <div class="privacy-text">
            <h2>{{$service->name}}</h2>

            <p>{{$service->description}}</p>
        </div>
    </div>
</div>
<!-- Privacy Section End -->



@endsection
