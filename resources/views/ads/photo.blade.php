@extends('layouts.app')
@section('title','PartenersMe | Photo Ads')
@section('content')
<!-- Page Title Start -->
<div class="page-title title-bg-7">
    <div class="container">
        <div class="title-text text-center">
            <h2> اعلانات الصور</h2>
            <ul>
                <li>
                    <a href="{{url('/')}}">الصفحة الرئيسية</a>
                </li>
                <li>
                اعلانات الصور
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
            <h2>اعلانات الصور</h2>
        </div>
        <div class="row">
            @forelse ($ads as $ad)
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="" data-bs-toggle="modal" data-bs-target="#add{{$ad->id}}">
                                <img src="{{asset($ad->photo)}}" alt="blog image" style="width:510px;height:200px">
                            </a>
                            <div class="blog-btn">
                                <a href="" data-bs-toggle="modal" data-bs-target="#add{{$ad->id}}">
                                    <i class="icofont-eye"></i>
                                    {{-- اضغط واربح --}}
                                </a>
                            </div>
                        </div>
                        <div class="blog-text">
                            <h3>
                                <a href="" data-bs-toggle="modal" data-bs-target="#add{{$ad->id}}">
                                    {{$ad->name}}
                                </a>
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
                                {{-- <i class="icofont-eye"></i> --}}
                                <a href="#">
                                    {{$ad->views}}  مشاهدة
                                </a>
                            </div>
                        </div>
                        <!--Start Modal -->
                            <div class="modal fade" id="add{{$ad->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$ad->name}}</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <form action="{{route('post.view',$ad->id)}}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <img src="{{asset($ad->photo)}}" alt="blog image" style="width:510px;height:200px">
                                            @auth
                                                <span class="captcha">{!! captcha_img() !!}</span>
                                                <button type="button" class="btn btn-info btn-refresh btn-sm">
                                                <i class="icofont-refresh"></i>
                                                </button>
                                                <div class="form-group">
                                                    <input type="text" name="captcha{{$ad->id}}" id="captcha" class="form-control"
                                                    required
                                                    placeholder="ادخل كود التحقق"
                                                    value="{{old('captcha'.$ad->id)}}">
                                                    @error('captcha{{$ad->id}}')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                @else
                                            @endauth
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">اغلاق</button>
                                        @auth
                                        <button type="submit" class="btn btn-primary">انقر لتربح</button>
                                            @else
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='{{route('login')}}'">لتربح سجل معنا</button>
                                        @endauth
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        {{-- End Model --}}
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
@section('script')
<script type="text/javascript">
    $(".btn-refresh").click(function(){
        $.ajax({
            type:'GET',
            url:'{{route("refresh_captcha")}}',
            success:function(data){
            $(".captcha").html(data.captcha);
            }
        });
    });
</script>

@endsection
