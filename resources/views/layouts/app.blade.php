<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"   @if (get_default_lang() == 'ar') dir="rtl" @endif >
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap CSS -->
        @if (get_default_lang() == 'ar')
            <!-- Bootstrap RTL CSS -->
            <link rel="stylesheet" href="{{asset('Frontend/ar/css/bootstrap.rtl.min.css')}}">
        @endif
        @if (get_default_lang() == 'en')
            <!-- Bootstrap LTR CSS -->
            <link rel="stylesheet" href="{{asset('Frontend/ar/css/bootstrap.min.css')}}">
        @endif
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="{{asset('Frontend/ar/css/animate.css')}}">
        <!-- Icofont CSS -->
        <link rel="stylesheet" href="{{asset('Frontend/ar/css/icofont.min.css')}}">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="{{asset('Frontend/ar/css/boxicons.min.css')}}">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="{{asset('Frontend/ar/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/ar/css/owl.theme.default.min.css')}}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('Frontend/ar/css/magnific-popup.css')}}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{asset('Frontend/ar/css/nice-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/ar/css/meanmenu.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('Frontend/ar/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('Frontend/ar/css/responsive.css')}}">
        <!-- RTL CSS -->
        @if (get_default_lang() == 'ar')
            <link rel="stylesheet" href="{{asset('Frontend/ar/css/rtl.css')}}">
        @endif
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{asset('Frontend/ar/img/favicon.png')}}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css">
        <!-- Tittle -->
        <title>@yield('title')</title>
        @notify_css
        @yield('style')
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
        <style>
            .float{
                position:fixed;
                width:60px;
                height:60px;
                bottom:50px;
                right:40px;
                background-color:#25d366;
                color:#FFF;
                border-radius:50px;
                text-align:center;
                font-size:30px;
                z-index:100;
            }

            .float:hover{
                color:#024361;
            }
        </style>

        <!--Start FireBase-->
            <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase.js"></script>
            <!-- Firebase App is always required and must be first -->
            <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-app.js"></script>

            <!-- Add additional services that you want to use -->
            <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-auth.js"></script>
            <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-database.js"></script>
            <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-firestore.js"></script>
            <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-messaging.js"></script>
            <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-functions.js"></script>

            <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase.js"></script>
            <script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-analytics.js"></script>
        <!--End FireBase-->

    </head>
<body>
        <!-- PreLoader Start -->
        <div class="loader-content">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="sk-folding-cube">
                        <div class="sk-cube1 sk-cube"></div>
                        <div class="sk-cube2 sk-cube"></div>
                        <div class="sk-cube4 sk-cube"></div>
                        <div class="sk-cube3 sk-cube"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PreLoader End -->

        <!-- Header Area Start -->
        <div class="header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="header-left">
                            <ul>
                                <li>
                                    <a href="mailto:turki@parteners-me.com">
                                    <i class="icofont-ui-message"></i>
                                        turki@parteners-me.com
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+966*********" dir="ltr">
                                        +966*********
                                        <i class="icofont-phone"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-right">
                            <ul class="header-social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Area End -->

        <!-- Navbar Area Start -->
        <div class="navbar-area">
            <!-- For Mobile Device -->
            <div class="mobile-nav">
                <a href="{{url('/')}}" class="logo">
                    <img src="{{asset('Frontend/ar/img/logo.png')}}" alt="logo" style="height: 35px;">
                </a>
            </div>

            <!-- For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{url('/')}}">
                            <img src="{{asset('Frontend/ar/img/logo.png')}}" alt="logo" style="height: 60px;">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="{{url('/')}}" class="nav-link">الرئيسية</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#about" class="nav-link">من نحن</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">سابقة الاعمال</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="" class="nav-link">تصميم المواقع</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link">فيس بوك</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link">تصوير المنتجات</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link">تصاميم سوشيال ميديا</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link">فديوهات الرسوم المتحركة</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link">تصميم الهوية التجارية</a>
                                        </li>
                                    </ul>
                                </li> --}}
                                <li class="nav-item">
                                    <a href="" class="nav-link dropdown-toggle">الاعلانات</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('photo.ads')}}" class="nav-link">اعلانات الصور</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('videos.ads')}}" class="nav-link">اعلانات الفديوهات</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/')}}#services" class="nav-link dropdown-toggle">الخدمات</a>
                                    <ul class="dropdown-menu">
                                        @foreach (App\Models\Service::get() as $item)
                                            <li class="nav-item">
                                                <a href="{{rouet('services',$item->name)}}" class="nav-link">{{$item->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('parteners')}}" target="_blank" class="nav-link">شركائي المليون</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/')}}#contactus" class="nav-link">تواصل معنا</a>
                                </li>
                                @auth
                                    <li class="nav-item">
                                        <a href="#services" class="nav-link dropdown-toggle">{{ substr(Auth::user()->name,0,7) }}</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="{{route('home')}}" class="nav-link">الصفحة الشخصية</a>
                                            </li>
                                            @if (Auth::user()->type == "company")
                                                <li class="nav-item">
                                                    <a href="{{route('add.ads')}}" class="nav-link">اضافة اعلان</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{route('all.ads')}}" class="nav-link">اعلاناتي</a>
                                                </li>
                                            @endif
                                            <li class="nav-item">
                                                <a href="" class="nav-link" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">تسجيل الخروج</a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form
                                        </ul>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a href="{{route('login')}}" class="nav-link" style="color: #be632d !important;">سجل معنا</a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar Area End -->

        @yield('content')
    <!-- Newsletter Section Start -->
    <div class="newsletter-section">
        <div class="container">
            <div class="newsletter-area">
                <h2>انضم الي أخر أخبارنا اليومية واخر التحديثات</h2>
                <div class="col-lg-6 p-0">
                    <form class="newsletter-form" data-bs-toggle="validator" id="my_form">
                        <input type="email" class="form-control" placeholder="البريد الالكتروني" name="EMAIL" required autocomplete="off" id="email">

                        <button class="default-btn electronics-btn" type="submit" id="submit">
                            اشتراك
                        </button>

                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
                <img src="{{asset('Frontend/ar/img/newsletter-img.png')}}" alt="newsletter image">
            </div>
        </div>
    </div>
    <!-- Newsletter Section End -->

    <!-- Footer Area Start -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <a href="index.html">
                            <img src="{{asset('Frontend/ar/img/logo-2.png')}}" alt="logo">
                        </a>
                        <ul>
                            <li dir="ltr">
                                <a href="tel:+966*********">
                                    +966*********
                                </a>
                                <i class="icofont-phone"></i>
                            </li>

                            <li dir="ltr">
                                <a href="mailto:turki@parteners-me.com">
                                    turki@parteners-me.com
                                </a>
                                <i class="icofont-ui-message"></i>
                            </li>

                            <li>
                                <i class="icofont-location-pin"></i>
                                الرياض / السعودية
                            </li>
                        </ul>

                        <div class="footer-social">
                            <a href="#" target="_blank">
                                <i class="icofont-facebook"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="icofont-instagram"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="icofont-twitter"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="icofont-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>خدماتنا</h3>
                        <ul>
                            <li>
                                <a href="">إدارة وسائل التواصل الإجتماعي</a>
                            </li>
                            <li>
                                <a href="">تصميم وإستضافة المواقع</a>
                            </li>
                            <li>
                                <a href="">اعلانات جوجل ادوردز</a>
                            </li>
                            <li>
                                <a href="">إنتاج الفيديوهات</a>
                            </li>
                            <li>
                                <a href="">تصميم الهويات التجارية </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>المساعدة</h3>
                        <ul>
                            <li>
                                <a href="">السياسات والخصوصية</a>
                            </li>
                            <li>
                                <a href="">الاسئلة الشائعة</a>
                            </li>
                            <li>
                                <a href="">الشروط والاحكام</a>
                            </li>
                            <li>
                                <a href="">تواصل معنا</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>لينكات سريعة</h3>
                        <ul>
                            <li>
                                <a href="">الرئيسية</a>
                            </li>
                            <li>
                                <a href="">من نحن</a>
                            </li>
                            <li>
                                <a href=""> خدماتنا </a>
                            <li>
                                <a href="">المقالات</a>
                            </li>
                            <li>
                                <a href="">تواصل معنا</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <p> جميع الحقوق محفوظة لشركة سفينة الابداع تمت البرمجة والتصميم بواسطة <a href="https://two-tech.net" target="_blank">توتيك</a></p>
        </div>

        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Back top Button -->
    <div class="top-btn">
        <i class="icofont-scroll-bubble-up"></i>
    </div>
        @notify_js
        @notify_render
        <!-- jQuery first, then Bootstrap JS -->
        <script src="{{asset('Frontend/ar/js/jquery.min.js')}}"></script>
        <script src="{{asset('Frontend/ar/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Subscribe From JS -->
        <script src="{{asset('Frontend/ar/js/jquery.ajaxchimp.min.js')}}"></script>
        <!-- Form Validator JS -->
        <script src="{{asset('Frontend/ar/js/form-validator.min.js')}}"></script>
        <!-- Contact JS -->
        <script src="{{asset('Frontend/ar/js/contact-form-script.js')}}"></script>
        <!-- Owl Carousel Slider JS -->
        <script src="{{asset('Frontend/ar/js/owl.carousel.min.js')}}"></script>
        <!-- Magnific Popup JS -->
        <script src="{{asset('Frontend/ar/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- WOW JS -->
        <script src="{{asset('Frontend/ar/js/wow.min.js')}}"></script>
        <!-- Meanmenu JS -->
        <script src="{{asset('Frontend/ar/js/meanmenu.js')}}"></script>
        <!-- Custom JS -->
        <script src="{{asset('Frontend/ar/js/custom.js')}}"></script>
	    @yield('script')
        <a href="https://api.whatsapp.com/send?phone=+201206472722" class="float" target="_blank">
            <i class="icofont-whatsapp my-float"></i>
        </a>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js" integrity="sha512-zMfrMAZYAlNClPKjN+JMuslK/B6sPM09BGvrWlW+cymmPmsUT1xJF3P4kxI3lOh9zypakSgWaTpY6vDJY/3Dig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $("body").niceScroll({
            cursorcolor:"#ed5488",
            cursorwidth:"10px"
});
        </script> --}}

    <script>
        $(document).ready(function(){
            $(document).on( 'click','#my_form #submit', function(e) {
                e.preventDefault();
                var email = $("#my_form #email").val();
                var token = $("#my_form input[name=_token]").val();
                if(email === ""){
                $("#my_form #email").focus();
                toastr.error('لا يمكن ترك الحقل فارغ');
        }else{
                /**Ajax code**/
                $.ajax({
                type: "post",
                url:"{{route('add.news')}}",
                data:{email:email ,  _token: token},

            success: function (data) {
                if(data.status == "error"){
                        toastr.error(data.msg);
                }else if(data.status == "success"){
                        toastr.success(data.msg);
                }
            },
            error:function(){
                toastr.error('فشلت العملية حاول مرة اخري');
            }
            });
                /**Ajax code ends**/
        }
            });
        });
    </script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyBhCchQvX-BglKLCZEQbu1FJGxawMWxFbQ",
        authDomain: "eslah-93fc6.firebaseapp.com",
        projectId: "eslah-93fc6",
        storageBucket: "eslah-93fc6.appspot.com",
        messagingSenderId: "715554506151",
        appId: "1:715554506151:web:f9d44bda49ce45d523a282",
        measurementId: "G-92YLF2T6RK"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    //firebase.analytics();
    const messaging = firebase.messaging();
    messaging
    .requestPermission()
    .then(function () {
    //MsgElem.innerHTML = "Notification permission granted."
    console.log("Notification permission granted.");

     // get the token in the form of promise
    return messaging.getToken()
    })
    .then(function(token) {
    // print the token on the HTML page
    console.log(token);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

        $.ajax({
            url: '{{ route("save.token.guest") }}',
            type: 'POST',
            data: {
                token: token
            },
            dataType: 'JSON',
            success: function (response) {
                console.log('Done Store Token');
            },
            error: function (err) {
                console.log('User Chat Token Error'+ err);
            },
        });

    })
    .catch(function (err) {
    console.log("Unable to get permission to notify.", err);
    });

    messaging.onMessage(function(payload) {
    console.log(payload);
    var notify;
    notify = new Notification(payload.notification.title,{
        body: payload.notification.body,
        icon: payload.notification.icon,
        tag: "Dummy"
    });
    console.log(payload.notification);
    });

    self.addEventListener('notificationclick', function(event) {
    event.notification.close();
    });
    </script>

@yield('script')
</body>
</html>
