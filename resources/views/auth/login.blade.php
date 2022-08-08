@extends('layouts.loginadmin')
@section('title','PartenersMe | Login')
@section('content')
<section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <div class="p-1">
                            <a href="{{url('/')}}">
                            <img src="{{asset('Adminlook/images/logo/logo.png')}}"  height="120" alt="LOGO"/>
                            </a>
                        </div>
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                        <span>الدخول للوحة التحكم </span>
                    </h6>
                </div>
                @include('admin.includes.alerts.errors')
                @include('admin.includes.alerts.success')
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal form-simple" action="{{route('login')}}" method="POST" novalidate>
                            @csrf
                            <fieldset class="form-group position-relative  mb-1">
                                <input type="tel" name="phone" class="form-control form-control-lg input-lg"
                                    value="{{old('phone')}}" id="phone" placeholder="+966*********" dir="ltr">
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                                @error('phone')
                                <span class="text-danger">{{$message}}</span>
                                @enderror

                            </fieldset>

                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                <span class="btn-show-pass">
                                    <i class="la la-eye"></i>
                                </span>
                                <input type="password" name="password" class="form-control form-control-lg input-lg"
                                    id="user-password"
                                    placeholder="أدخل كلمة المرور">
                                <div class="form-control-position">
                                    <i class="la la-key"></i>
                                </div>
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </fieldset>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 col-12 text-center text-md-left">
                                    <fieldset>
                                        <input type="checkbox" name="remember_me" id="remember-me"
                                        class="chk-remember">
                                        <label for="remember-me">تذكر دخولي</label>
                                    </fieldset>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning btn-lg btn-block"><i class="ft-unlock"></i>
                                دخول
                            </button>
                        </form>
                    </div>
                    {{-- @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('نسيت كلمة السر ؟ ') }}
                    </a>
                @endif --}}


                    <p class="text-center">لاتمتلك حساب وتريد الاشتراك ؟ <a href="{{route('register')}}" class="card-link">الاشتراك</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
