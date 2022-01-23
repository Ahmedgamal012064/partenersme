@extends('layouts.app')
@section('title','PartenersMe')
@section('content')
<!-- Banner Section Start -->
<div class="banner-slider owl-carousel owl-theme">
    <div class="banner-item banner-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-text">
                        <h1>رواد مجال التسويق الالكتروني</h1>
                        <p>Operations deal with the way the vehicles are operated, and the procedures set for this purpose, including financing, legalities, and policies. In the transport industry, operations and ownership of infrastructure can be either public.</p>

                        <div class="banner-btn">
                            <a href="#" class="default-btn">تواصل معنا</a>
                            <a href="https://youtu.be/kpanwiv9fsw" class="default-btn popup-youtube">رؤية فديو تعريفي</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-item banner-bg-two">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-text">
                        <h1>We Provide High-quality Transport Service</h1>
                        <p>Operations deal with the way the vehicles are operated, and the procedures set for this purpose, including financing, legalities, and policies. In the transport industry, operations and ownership of infrastructure can be either public.</p>

                        <div class="banner-btn">
                            <a href="#" class="default-btn">سحل معنا</a>
                            <a href="https://youtu.be/kpanwiv9fsw" class="default-btn popup-youtube">رؤية فديو تعريفي</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Features Section Start -->
<div class="features-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="feature-card">
                    <i class="icofont-fast-delivery"></i>
                    <span>87</span>
                    <h3>عمل منفذ</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="feature-card">
                    <i class="icofont-location-pin"></i>
                    <span>120</span>
                    <h3>مقر</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="feature-card">
                    <i class="icofont-users-alt-3"></i>
                    <span>3.2K</span>
                    <h3>شركاء العمل</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="feature-card">
                    <i class="icofont-thumbs-up"></i>
                    <span>27</span>
                    <h3>سنين خبرة</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Section End -->

<!-- About Section Start -->
<section class="about-section pt-100" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 wow fadeInUp" data-wow-duration="1s">
                <div class="about-img">
                    <img src="{{asset('Frontend/ar/img/about/1.jpg')}}" alt="about image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-text">
                    <div class="section-title">
                        <span>من نحن</span>
                        <h2>يسعدنا ان نعرفكم بأهافنا ورؤيتنا ورسالتنا التي نسعي اليها</h2>
                    </div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">الرؤية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mission-tab" data-bs-toggle="tab" href="#mission" role="tab" aria-controls="mission" aria-selected="false">الرسالة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="goal-tab" data-bs-toggle="tab" href="#goal" role="tab" aria-controls="goal" aria-selected="false">الهدف</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                            <p>Found parents would couldn't said on. End is partiality which uniforms, the fundamental; All luxury. Dissolute small a heavy word small big been time small caught guest movement be will a are where at the front it is meet been sleep spineless, were finds pointed secure in a success.</p>

                            <p>Of pros, the but so, from ill to that good in the trying everyone. That, feedback there made he was may simple, it is yet a own blind you ago hand, were finds pointed secure in a success.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                            <p>Found parents would couldn't said on. End is partiality which uniforms, the fundamental; All luxury. Dissolute small a heavy word small big been time small caught guest movement be will a are where at the front its meet been sleep spineless, were finds pointed secure in a success.</p>

                            <p>Of pros the but so, from ill to that good in the trying everyone. That, feedback there made he was may simple, it is yet a own blind you ago hand, were finds pointed secure in a success.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="goal" role="tabpanel" aria-labelledby="goal-tab">
                            <p>Found parents would couldn't said on. End is partiality which uniforms, the fundamental; All luxury. Dissolute small a heavy word small big been time small caught guest movement be will a are where at the front it is meet been sleep spineless, were finds pointed secure in a success.</p>

                            <p>Of pros the but so, from ill to that good in the trying everyone. That, feedback there made he was may simple, it is yet a own blind you ago hand, were finds pointed secure in a success.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Transport System Section Start -->
<section class="transport-section pb-70"  id="services">
    <div class="container">
        <div class="section-title text-center">
            <span>خدماتنا</span>
            <h2>We Provide Products All over The World</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="transport-card">
                    <div class="transport-img">
                        <img src="{{asset('Frontend/ar/img/services/1.jpg')}}" alt="transport image">
                    </div>
                    <div class="transport-text">
                        <i class="icofont-airplane-alt"></i>
                        <h3>Air Freight</h3>
                        <p>A cargo aircraft also known as freight aircraft, freighter, airlifter or cargo jet is a fixed-wing aircraft that is designed.</p>

                        <div class="theme-btn">
                            <a href="service-details.html" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="transport-card">
                    <div class="transport-img">
                        <img src="{{asset('Frontend/ar/img/services/2.jpg')}}" alt="transport image">
                    </div>
                    <div class="transport-text">
                        <i class="icofont-truck-loaded"></i>
                        <h3>Road Freight</h3>
                        <p>A cargo aircraft also known as freight aircraft, freighter, airlifter or cargo jet is a fixed-wing aircraft that is designed.</p>

                        <div class="theme-btn">
                            <a href="service-details.html" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0 wow fadeInUp" data-wow-duration="1s"  data-wow-delay=".6s">
                <div class="transport-card">
                    <div class="transport-img">
                        <img src="{{asset('Frontend/ar/img/services/3.jpg')}}" alt="transport image">
                    </div>
                    <div class="transport-text">
                        <i class="icofont-sail-boat-alt-1"></i>
                        <h3>Ocean Freight</h3>
                        <p>A cargo aircraft also known as freight aircraft, freighter, airlifter or cargo jet is a fixed-wing aircraft that is designed.</p>

                        <div class="theme-btn">
                            <a href="ocean-freight.html" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Transport System Section End -->

    <!-- Why Choose Section Start -->
    <div class="choose-style-two pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>مايميز شركائي عن غيرها</h2>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-duration="1s">
                            <div class="choose-card">
                                <i class="icofont-fast-delivery"></i>
                                <h3>سرعة تنفيذ واستلام العمل</h3>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="choose-card">
                                <i class="icofont-ssl-security"></i>
                                <h3>حماية بيانات الشركاء</h3>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="choose-card">
                                <i class="icofont-diamond"></i>
                                <h3>الاسعار التنافسية </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp">
                    <div class="why-choose-image">
                        <img src="{{asset('Frontend/ar/img/logo.png')}}" alt="why Choose image">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                            <div class="choose-card">
                                <i class="icofont-ui-browser"></i>
                                <h3>الامان والسرية</h3>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                            <div class="choose-card">
                                <i class="icofont-live-support"></i>
                                <h3>24/7 دعم</h3>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                            <div class="choose-card">
                                <i class="icofont-like"></i>
                                <h3>أعلي جودة عمل</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Section End -->


<!-- Get Quote Section Start -->
<div class="get-quote-section quote-bg pt-100 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="quote-text">
                    <div class="offer-text">
                        <span>15% خصم</span>
                        <p>أول طلب</p>
                    </div>

                    <h2>نرحب بشركائنا الجدد</h2>
                    <p>يسعدنا كونكم من صمن شركائي ونسعد بتواصلكم واستفسارتكم </p>

                    <div class="theme-btn">
                        <a href="#" class="default-btn">سجل معنا الان</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow bounceInUp" data-wow-duration="1s">
                <div class="quote-form">
                    <h2>طلب عرض سعر</h2>

                    <form>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                            <label class="form-check-label" for="inlineRadio1">فرد</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">مؤسسة</label>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12 pr-0">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="الاسم" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 pr-0">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="البريد الالكتروني" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12 pr-0">
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="رقم الجوال" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 pr-0">
                                <div class="select-item">
                                    <i class="icofont-rounded-down"></i>
                                    <select class="form-control">
                                        <option selected>اختر من الخدمات</option>
                                        <option>إدارة وسائل التواصل الإجتماعي</option>
                                        <option>تصميم وإستضافة المواقع</option>
                                        <option>اعلانات جوجل ادوردز</option>
                                        <option>إنتاج الفيديوهات</option>
                                        <option>إنتاج فيديوهات الرسوم المتحركة</option>
                                        <option>تصميم الهويات التجارية</option>
                                        <option>كتابة المحتوى و SEO</option>
                                        <option>نظام إدارة علاقات العملاء</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit">ارسال طلب</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<!-- Get Quote Section End -->

<!-- Worker Section Start -->
<section class="worker-section pt-100 pb-70" id="team">
    <div class="container">
        <div class="section-title text-center">
            <span>الفريق</span>
            <h2>شركائي النجاح</h2>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="worker-card">
                    <div class="worker-img">
                        <img src="{{asset('Frontend/ar/img/worker/1.jpg')}}" alt="worker image">
                    </div>
                    <div class="worker-text">
                        <h3>أحمد جمال</h3>
                        <p>مسوق</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="worker-card">
                    <div class="worker-img">
                        <img src="{{asset('Frontend/ar/img/worker/2.jpg')}}" alt="worker image">
                    </div>
                    <div class="worker-text">
                        <h3>أحمد جمال</h3>
                        <p>مسوق</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                <div class="worker-card">
                    <div class="worker-img">
                        <img src="{{asset('Frontend/ar/img/worker/3.jpg')}}" alt="worker image">
                    </div>
                    <div class="worker-text">
                        <h3>أحمد جمال</h3>
                        <p>مسوق</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                <div class="worker-card">
                    <div class="worker-img">
                        <img src="{{asset('Frontend/ar/img/worker/4.jpg')}}" alt="worker image">
                    </div>
                    <div class="worker-text">
                        <h3>Jackson</h3>
                        <p>Road Freight Collector</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Worker Section End -->

<!-- Feedback Section Strat -->
<section class="feedback-section feedback-bg pt-100">
    <div class="container">
        <div class="section-title text-center">
            <span>الاراء</span>
            <h2>اراء شركائنا</h2>
        </div>

        <div class="feedback-slider owl-carousel owl-theme">
            <div class="feedback-items">
                <i class="icofont-quote-right"></i>
                <p>شكرا علي هذا العمل الرئع وعلي هذا الشغل ممتاز</p>

                <img src="{{asset('Adminlook/images/admin.png')}}" alt="client image" style="height: 60px;width60px">
                <h3>احمد جمال</h3>
                <span>رجل أعمال</span>
            </div>

            <div class="feedback-items">
                <i class="icofont-quote-right"></i>
                <p>شكرا علي هذا العمل الرئع وعلي هذا الشغل ممتاز</p>

                <img src="{{asset('Adminlook/images/admin.png')}}" alt="client image" style="height: 60px;width60px">
                <h3>احمد جمال</h3>
                <span>رجل أعمال</span>
            </div>

            <div class="feedback-items">
                <i class="icofont-quote-right"></i>
                <p>شكرا علي هذا العمل الرئع وعلي هذا الشغل ممتاز</p>

                <img src="{{asset('Adminlook/images/admin.png')}}" alt="client image" style="height: 60px;width60px">
                <h3>احمد جمال</h3>
                <span>رجل أعمال</span>
            </div>
        </div>
    </div>
</section>
<!-- Feedback Section End -->

<!-- Company Section Start -->
<div class="company-section">
    <div class="container">
        <div class="company-slider owl-carousel owl-theme">
            <div class="company-logo">
                <a href="#"><img src="{{asset('Frontend/ar/img/company/1.png')}}" alt="logo"></a>
            </div>
            <div class="company-logo">
                <a href="#"><img src="{{asset('Frontend/ar/img/company/2.png')}}" alt="logo"></a>
            </div>
            <div class="company-logo">
                <a href="#"><img src="{{asset('Frontend/ar/img/company/3.png')}}" alt="logo"></a>
            </div>
            <div class="company-logo">
                <a href="#"><img src="{{asset('Frontend/ar/img/company/4.png')}}" alt="logo"></a>
            </div>
            <div class="company-logo">
                <a href="#"><img src="{{asset('Frontend/ar/img/company/5.png')}}" alt="logo"></a>
            </div>
        </div>
    </div>
</div>
<!-- Company Section End -->

<!-- Blog Section Start -->
<section class="blog-section pt-100 pb-70" id="blogs">
    <div class="container">
        <div class="section-title text-center">
            <span>أخر المقالات</span>
            <h2>أخر الاخبار عن التسويق</h2>
            <p>أخر المقالات المضافة حديثا</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="{{asset('Frontend/ar/img/blog/1.png')}}" alt="blog image">
                        </a>
                    </div>
                    <div class="blog-text">
                        <h3>
                            <a href="blog-details.html">Liberalization of Transport & Logistics service</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-ui-calendar"></i>
                                01 April, 2021
                            </li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>

                        <div class="blog-btn text-left">
                            <a href="#">
                                <i class="icofont-rounded-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{asset('Frontend/ar/img/blog/2.png')}}" alt="blog image"></a>
                    </div>
                    <div class="blog-text">
                        <h3>
                            <a href="blog-details.html">New Vehicles in the Fleet – See Our New Scania Trucks</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-ui-calendar"></i>
                                02 April, 2021
                            </li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>

                        <div class="blog-btn text-left">
                            <a href="#">
                                <i class="icofont-rounded-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{asset('Frontend/ar/img/blog/3.png')}}" alt="blog image"></a>
                    </div>
                    <div class="blog-text">
                        <h3>
                            <a href="blog-details.html">Our Driver Confirm Lorry Repaired as soon as Possible</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-ui-calendar"></i>
                                03 April, 2021
                            </li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>

                        <div class="blog-btn text-left">
                            <a href="#">
                                <i class="icofont-rounded-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->


<!-- Contact Card Section Start
<div class="contact-card-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="contact-card">
                    <i class="icofont-phone"></i>
                    <a href="tel:+966*********">+966*********</a>
                    <a href="tel:+966*********">+966*********</a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="contact-card">
                    <i class="icofont-ui-message"></i>
                    <a href="mailto:info@parteners-me.com">info@parteners-me.com</a>
                    <a href="mailto:info@parteners-me.com">info@parteners-me.com</a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 offset-lg-0 offset-sm-3">
                <div class="contact-card">
                    <i class="icofont-location-pin"></i>
                    <ul>
                        <li>الرياض / السعودية</li>
                        <li>الرياض / السعودية</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
 Contact Card Section End -->

<!-- Contact Section Start -->
<section class="contact-section contact-style-two pb-100" id="contactus">
    <div class="container">
        <div class="section-title text-center">
            <h2>يسعدنا تواصلكم معنا</h2>
            <p>Found parents would couldn't said on. That, feedback there made he was may blind you simple, its yet a own blind you ago hand.</p>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="contact-area">
                    <form id="contactForm" action="{{route('send.message')}}" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="برجاء ادخال حقل الاسم" placeholder="الاسم">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="برجاء ادخال حقل البريد الالكتروني" placeholder="البريد الالكتروني">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="number" id="number" class="form-control" required data-error="برجاء ادخال رقم الجوال" placeholder="رقم الجوال">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" class="form-control" required data-error="برجاء ادخال عنوان الرسالة" placeholder="عنوان الرسالة">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="message-field" id="message" cols="30" rows="5" required data-error="برجاء ادخال نص الرسالة" placeholder="نص الرسالة"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn contact-btn">
                                    ارسال الرسالة
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
<!-- Contact Section End -->
@endsection
