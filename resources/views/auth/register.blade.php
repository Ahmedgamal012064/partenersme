@extends('layouts.loginadmin')
@section('title','PartenersMe | Register')
@section('content')
@section('style')
<style>
    .hungry .selection {
        display: inline-block;
        text-align:center;

    }

    .hungry .selection label {
        display: inline-block;
        width:10em;
        background-color: #fd9148b5 ;
        border-radius: 6px;
        color: #ffffff;
        padding: 0.5em;
        cursor: pointer;
    }

    .hungry .selection label:hover {
        background-color: #fd9148;
    }

    .hungry .selection input[type=radio] {
        display: none;
    }

    .hungry .selection input[type=radio]:checked ~ label {
      background-color: #024361;
    }
    </style>
@endsection
<section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-md-6 col-10 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 px-2 py-2 m-0 mt-0">
          <div class="card-header border-0">
            <div class="card-title text-center">
                <a href="{{url('/')}}">
                <img src="{{asset('Adminlook/images/logo/logo.png')}}"  height="100" alt="LOGO"/>
                </a>
            </div>
            <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-1 mb-0">
              <span>انشاء حساب</span>
            </h6>
          </div>
          <div class="card-content">
            <div class="card-body">
              <form class="form-horizontal form-simple" action="{{route('register')}}" novalidate method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-1">
                        <div class="hungry text-center">
                            <div class="selection">
                              <input id="pizza" name="type" type="radio" value="user" checked>
                              <label for="pizza">فرد</label>
                            </div>
                            <div class="selection">
                              <input id="burger" name="type" type="radio" value="company">
                              <label for="burger">مؤسسة او معلن</label>
                            </div>
                          </div>
                        @error("type")
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                  </div>
                </div>
                <div class="row">
                <fieldset class="form-group position-relative has-icon-left mb-1 col-md-6">
                  <input type="text" class="form-control form-control-lg input-lg" name="name" id="user-name" placeholder="الاسم" value="{{old('name')}}">
                  <div class="form-control-position" required>
                    <i class="ft-user"></i>
                  </div>
                  @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </fieldset>
                <fieldset class="form-group position-relative has-icon-left mb-1 col-md-6">
                    <input id="email" type="email" class="form-control form-control-lg input-lg" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="البريد الالكتروني">
                <div class="form-control-position">
                    <i class="ft-phone"></i>
                </div>
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </fieldset>
                <fieldset class="form-group position-relative  mb-1 col-md-12">
                    <input type="tel" name="phone" class="form-control form-control-lg input-lg"
                        value="{{old('phone')}}" id="phone" placeholder="+966*********" dir="ltr">
                    <div class="form-control-position">
                        <i class="ft-user"></i>
                    </div>
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </fieldset>
                <fieldset class="form-group position-relative has-icon-left mb-0 col-md-6">
                    <span class="btn-show-pass">
                        <i class="la la-eye"></i>
                    </span>
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
                    <span class="btn-show-pass">
                        <i class="la la-eye"></i>
                    </span>
                    <input type="password" class="form-control form-control-lg input-lg" id="user-password"
                    placeholder="تاكيد كلمة السر" required name="password_confirmation" autocomplete="new-password">
                    <div class="form-control-position">
                      <i class="la la-key"></i>
                    </div>
                  </fieldset>
                </div>
                <button type="submit" class="btn btn-warning btn-lg btn-block"><i class="ft-unlock"></i> اشتراك</button>
              </form>
            </div>
            <p class="text-center">تمتلك حساب وتريد الاشتراك ؟ <a href="{{route('login')}}" class="card-link">تسجيل الدخول</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
