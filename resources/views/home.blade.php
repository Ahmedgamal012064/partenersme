@extends('layouts.app')
@section('title','PartenersMe | Home Page')
@section('content')
<!-- Page Title Start -->
<div class="page-title title-bg-7">
    <div class="container">
        <div class="title-text text-center">
            <h2>الصفحة الشخصية</h2>
            <ul>
                <li>
                    <a href="{{url('/')}}">الصفحة الرئيسية</a>
                </li>
                <li>
                    الصفحة الشخصية
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Title End -->

<!-- Contact Card Section Start -->
<div class="contact-card-section pt-100 pb-70">
    <div class="container">
        <div class="row">
                <div @if (Auth::user()->type == "user")
                    class="col-lg-6 col-sm-6"
                    @else
                    class="col-lg-4 col-sm-6"
                    @endif>
                    <div class="contact-card">
                        <i class="icofont-wallet"></i>
                        <a href="">{{Auth::user()->coins}} ريال</a>
                        <a href="" data-bs-toggle="modal" data-bs-target="#withdraw" style="color: #be632d">طلب سحب</a>
                    </div>
                    <!-- Start Modal -->
                    <div class="modal fade @if (!empty($errors->all())) show @endif"
                    id="withdraw" tabindex="-1" aria-labelledby="exampleModalLabel"
                    @if (!empty($errors->all()))
                        style="display:block"
                        aria-modal="true"
                        role="dialog"
                    @else
                        aria-hidden="true"
                        style="display:none"
                    @endif>
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">طلب سحب الارباح</h5>
                            </div>
                            @if (Auth::user()->coins < 50)
                            <h4 class="text-info text-center">لايمكن سحب مبلغ اقل من 50 ريال</h4>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">اغلاق</button>
                            </div>
                            @else
                            <form action="{{route('post.withdraw')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="modal-body">
                                    <div class="row">
                                        @if (empty(Auth::user()->id_define) || Auth::user()->id_define = 0)
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="help-block with-errors">
                                                @if (Auth::user()->type == "user")
                                                رقم الهوية
                                                        @else
                                                        رقم السجل التجاري
                                                @endif</div>
                                                <input type="number" name="id_defines" id="id_defines" class="form-control" required
                                                placeholder="@if (Auth::user()->type == "user") رقم الهوية @else رقم السجل التجاري @endif"
                                                value="{{old("id_defines")}}">
                                                @error('id_defines')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        @endif
                                        @if (empty(Auth::user()->photo))
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="help-block with-errors">
                                                @if (Auth::user()->type == "user")
                                                صورة الهوية
                                                    @else
                                                صورة السجل التجاري
                                                @endif</div>
                                                <input type="file" name="photos" id="photos" class="form-control"
                                                required  accept="image/*">
                                                @error('photos')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        @endif
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="help-block with-errors">اسم البنك</div>
                                                <input type="text" name="bank_name" id="bank_name" class="form-control" value="{{old("bank_name")}}"
                                                required placeholder="اسم البنك" required>
                                                @error('bank_name')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="help-block with-errors">رقم الحساب البنكي</div>
                                                <input type="text" name="bank_number" id="bank_number" class="form-control" value="{{old("bank_number")}}"
                                                required placeholder="رقم الحساب البنكي" required>
                                                @error('bank_number')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="help-block with-errors">الاسم بالكامل</div>
                                                <input type="text" name="fullname" id="fullname" class="form-control" value="{{old("bank_number")}}"
                                                required placeholder="الاسم بالكامل" required>
                                                @error('fullname')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                    @if (!empty($errors->all()))
                                    onclick = "$('#withdraw').css('display','none')"
                                    @endif>اغلاق</button>
                                <button type="submit" class="btn btn-success">ارسال</button>
                            </div>
                        </form>
                        @endif
                          </div>
                        </div>
                    </div>
                    <!-- End Modal -->
                </div>

                <div @if (Auth::user()->type == "user")
                    class="col-lg-6 col-sm-6"
                    @else
                    class="col-lg-4 col-sm-6"
                    @endif>
                    <div class="contact-card">
                        <i class="icofont-eye"></i>
                        <a href="">{{Auth::user()->ads->count()}} مشاهدة</a>
                        <a href="{{route('photo.ads')}}" style="color: #be632d">مشاهدة المزيد</a>
                    </div>
                </div>
                @if (Auth::user()->type == "company")
                <div class="col-lg-4 col-sm-6 offset-lg-0 offset-sm-3">
                    <div class="contact-card">
                        <i class="icofont-bullhorn"></i>
                        <a href="">{{Auth::user()->adv->count()}} اعلان</a>
                        <a href="{{route('add.ads')}}" style="color: #be632d">اضافة اعلان</a>
                    </div>
                </div>
            @endif
              @if (Auth::user()->type == "marketer")
                <div class="col-lg-4 col-sm-6 offset-lg-0 offset-sm-3">
                    <div class="contact-card">
                        <i class="icofont-bullhorn"></i>
                        <a href="">0 مدعو</a>
                        <a href="" style="color: #be632d">ارسال دعوات</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Contact Card Section End -->

<!-- Contact Section Start -->
<section class="contact-section contact-style-two pb-100">
    <div class="container">
        <div class="section-title text-center">
            <h2>تحديث البيانات</h2>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="contact-area">
                    <form action="{{route('post.profile')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">
                                    @if (Auth::user()->type == "user")
                                    رقم الهوية
                                            @else
                                            رقم السجل التجاري
                                    @endif</div>
                                    <input type="number" name="id_define" id="id_define" class="form-control"
                                    required data-error="برجاء ملئ الحقل"
                                    placeholder="@if (Auth::user()->type == "user") رقم الهوية @else رقم السجل التجاري @endif"
                                    value="{{Auth::user()->id_define}}">
                                    @error('id_define')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">
                                    @if (Auth::user()->type == "user")
                                    صورة الهوية
                                        @else
                                    صورة السجل التجاري
                                    @endif</div>
                                    <input type="file" name="photo" id="photo" class="form-control"
                                    required data-error="برجاء ملئ الحقل"  accept="image/*">
                                    @error('photo')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">الاسم</div>
                                    <input type="text" name="name" id="name" class="form-control" value="{{Auth::user()->name}}"
                                    required data-error="برجاء ملئ الحقل" placeholder="الاسم" required>
                                    @error('name')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">البريد الالكتروني</div>
                                    <input type="email" name="email" id="email" class="form-control" value="{{Auth::user()->email}}"
                                    required data-error="برجاء ملئ الحقل" placeholder="البريد الالكتروني" required>
                                    @error('email')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">كلمة السر</div>
                                    <input type="password" name="password" id="password" class="form-control"
                                    required data-error="برجاء ملئ الحقل" placeholder="كلمة السر">
                                    @error('password')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="help-block with-errors">اعادة كتابة كلمة السر</div>
                                    <input type="password" name="password_confirmation" id="password" class="form-control" required data-error="برجاء ملئ الحقل" placeholder="اعادة كتابة كلمة السر">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn contact-btn">
                                    تحديث البيانات
                                </button>
                                <div id="msgSubmit" class="h3 alert-text text-center hidden"></div>
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
