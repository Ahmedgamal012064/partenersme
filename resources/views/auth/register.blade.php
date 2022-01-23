@extends('layouts.loginadmin')
@section('title','PartenersMe | Register')
@section('content')
<section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-md-4 col-10 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
          <div class="card-header border-0">
            <div class="card-title text-center">
                <a href="{{url('/')}}">
                <img src="{{asset('Adminlook/images/logo/logo.png')}}"  height="100" alt="LOGO"/>
                </a>
            </div>
            <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2 mb-0">
              <span>انشاء حساب</span>
            </h6>
          </div>
          <div class="card-content">
            <div class="card-body">
              <form class="form-horizontal form-simple" action="{{route('register')}}" novalidate method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                    <label class="form-check-label" for="inlineRadio1">فرد</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">مؤسسة</label>
                </div>
                <fieldset class="form-group position-relative has-icon-left mb-1">
                  <input type="text" class="form-control form-control-lg input-lg" name="name" id="user-name" placeholder="الاسم" value="{{old('name')}}">
                  <div class="form-control-position" required>
                    <i class="ft-user"></i>
                  </div>
                  @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </fieldset>
                <fieldset class="form-group position-relative has-icon-left mb-1">
                           <input id="email" type="email" class="form-control form-control-lg input-lg" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="البريد الالكتروني">
                    <div class="form-control-position">
                        <i class="ft-phone"></i>
                    </div>
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </fieldset>
                <fieldset class="form-group position-relative has-icon-left mb-0">
                  <input type="password" class="form-control form-control-lg input-lg" id="user-password"
                  placeholder="كلمة السر" required name="password">
                  <div class="form-control-position">
                    <i class="la la-key"></i>
                  </div>
                  @error('password')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </fieldset>
                <fieldset class="form-group position-relative has-icon-left">
                    <input type="password" class="form-control form-control-lg input-lg" id="user-password"
                    placeholder="تاكيد كلمة السر" required name="password_confirmation" autocomplete="new-password">
                    <div class="form-control-position">
                      <i class="la la-key"></i>
                    </div>
                  </fieldset>
                <button type="submit" class="btn btn-warning btn-lg btn-block"><i class="ft-unlock"></i> تسجيل الدخول</button>
              </form>
            </div>
            <p class="text-center">تمتلك حساب وتريد الاشتراك ؟ <a href="{{route('login')}}" class="card-link">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
