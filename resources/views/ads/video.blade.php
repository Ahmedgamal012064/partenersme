@extends('layouts.app')
@section('title','PartenersMe | Video Ads')
@section('content')
<!-- Page Title Start -->
<div class="page-title title-bg-7">
    <div class="container">
        <div class="title-text text-center">
            <h2> اعلانات الفديوهات</h2>
            <ul>
                <li>
                    <a href="{{url('/')}}">الصفحة الرئيسية</a>
                </li>
                <li>
                اعلانات الفديوهات
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Title End -->
<!-- Blog Section Start -->
<section class="blog-section blog-style-three pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>اعلانات الفديوهات</h2>
        </div>
        <div class="row">
            @forelse ($ads as $ad)
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="">
                                <video width="510px" height="200px" autoplay muted>
                                    <source src="{{asset($ad->photo)}}" type="video/mp4">
                                    <source src="{{asset($ad->photo)}}" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </a>
                            <div class="blog-btn">
                                <a href="#">
                                    <i class="icofont-eye"></i>
                                    {{-- اضغط واربح --}}
                                </a>
                            </div>
                        </div>
                        <div class="blog-text">
                            <h3>
                                <a href="">{{$ad->name}}</a>
                            </h3>
                            <ul style="display: inline-flex">
                                @if (!empty($ad->link_web))
                                <li>
                                    <a href="{{$ad->link_web}}"><i class="icofont-clip"></i></a>
                                </li>
                                @endif
                                @if (!empty($ad->link_snap))
                                <li>
                                    <a href="{{$ad->link_snap}}"><i class="icofont-snapchat"></i></a>
                                    {{-- 06 April, 2021 --}}
                                </li>
                                @endif
                                @if (!empty($ad->link_twitter))
                                <li>
                                    <a href="{{$ad->link_twitter}}"><i class="icofont-twitter"></i></a>
                                </li>
                                @endif
                                @if (!empty($ad->phone))
                                <li>
                                    <a href="{{$ad->phone}}"><i class="icofont-whatsapp"></i></a>
                                </li>
                                @endif
                            </ul>
                            <div class="blog-btn text-left">
                                <i class="icofont-eye"></i>
                                <a href="">
                                    {{$ad->views}}  مشاهدة
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h2 class="text-center">لاتوجد اعلانات للعرض</h2>
            @endforelse
        </div>

        <nav aria-label="Page navigation example">
            {{$ads->links()}}
        </nav>
    </div>
</section>
<!-- Blog Section End -->

@endsection
