@extends('layouts.app')
@section('title','PartenersMe | My Ads')
@section('content')
<!-- Page Title Start -->
<div class="page-title title-bg-7">
    <div class="container">
        <div class="title-text text-center">
            <h2>اعلاناتي</h2>
            <ul>
                <li>
                    <a href="{{url('/')}}">الصفحة الرئيسية</a>
                </li>
                <li>
                اعلاناتي
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Title End -->
<!-- Blog Section Start -->
<section class="blog-section blog-style-two pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>اعلاناتي</h2>
        </div>

        <div class="row">
            @forelse ($ads as $ad)
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="">
                            @if ($ad->type == "photo")
                                <img src="{{asset($ad->photo)}}" alt="ad image" style="width:510px;height:200px">
                            @endif
                            @if ($ad->type == "video")
                                <video width="360px" height="200px"autoplay muted>
                                    <source src="{{asset($ad->photo)}}" type="video/mp4">
                                    <source src="{{asset($ad->photo)}}" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                        </a>
                    </div>
                    <div class="blog-text">
                        <h3>
                            <a href="">{{$ad->name}}</a>
                        </h3>
                        <ul>
                            <li dir="ltr">
                                {{$ad->date_publish}} م
                                <i class="icofont-ui-calendar"></i>
                            </li>
                            <li dir="ltr">
                                {{$ad->plan->name}}
                                <i class="icofont-book-mark"></i>
                            </li>
                            <li dir="ltr">
                                {{$ad->price}} ريال
                                <i class="icofont-bill"></i>
                            </li>
                        </ul>
                        @if ($ad->status == "notes")
                            <p>{{$ad->notes}}</p>
                        @endif
                        <div class="blog-btn text-left">
                            <a href="">
                                {{$ad->status}}
                            </a>
                        </div>
                        @if (in_array($ad->status , ["active","finished"]))
                            <div class="blog-btn text-right">
                                <a href="">
                                    {{$ad->views}} مشاهدة
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            @empty
                <h2 class="text-center">لاتوجد اعلانات للعرض <a href="{{route('add.ads')}}"> اضافة اعلان</a></h2>
            @endforelse
        </div>
        <nav aria-label="Page navigation example">
            {{$ads->links()}}
        </nav>
    </div>
</section>
<!-- Blog Section End -->

@endsection
