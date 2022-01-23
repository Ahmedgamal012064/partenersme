<div class="main-menu menu-fixed menu-light menu-accordion  menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class="nav-item"><a href="{{route('admin.dashboard')}}"><i class="la la-home"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الصفحة الرئيسية </span></a>
            </li>

            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">الخدمات </span>
                        <span
                            class="badge badge badge-info  badge-pill float-right mr-2">{{App\Models\Service::count()}}</span>
                    </a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{--route('admin.services')--}}"
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        <li><a class="menu-item" href="{{--route('admin.services.create')--}}"
                            data-i18n="nav.dash.ecommerce">اضافة خدمة</a>
                        </li>
                    </ul>
            </li>
            <li class="nav-item">
                <a href=""><i class="la la-file"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">الباقات </span>
                        <span
                            class="badge badge badge-dark  badge-pill float-right mr-2">{{App\Models\Plan::count()}}</span>
                    </a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{--route('admin.plans')--}}"
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        <li><a class="menu-item" href="{{--route('admin.plans.create')--}}"
                            data-i18n="nav.dash.ecommerce">اضافة باقة</a>
                        </li>
                    </ul>
            </li>

                <li class="nav-item">
                    <a href=""><i class="la la-users"></i>
                            <span class="menu-title" data-i18n="nav.dash.main">المستخدمين  </span>
                            <span
                                class="badge badge badge-warning  badge-pill float-right mr-2">{{App\User::where('type','user')->count()}}</span>
                        </a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{--route('admin.users')--}}"
                                data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                            </li>
                            <li><a class="menu-item" href="{{--route('admin.users.create')--}}"
                                data-i18n="nav.dash.ecommerce">اضافة مستخدم</a>
                            </li>
                        </ul>
                </li>

                <li class="nav-item">
                    <a href=""><i class="la la-building"></i>
                            <span class="menu-title" data-i18n="nav.dash.main">المؤسسات  </span>
                            <span
                                class="badge badge badge-primary  badge-pill float-right mr-2">{{App\User::where('type','company')->count()}}</span>
                        </a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{--route('admin.companies')--}}"
                                data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                            </li>
                            <li><a class="menu-item" href="{{--route('admin.companies.create')--}}"
                                data-i18n="nav.dash.ecommerce">اضافة مؤسسة</a>
                            </li>
                        </ul>
                </li>
                <li class="nav-item">
                    <a href=""><i class="la la-bullhorn"></i>
                            <span class="menu-title" data-i18n="nav.dash.main">الاعلانات  </span>
                            <span
                                class="badge badge badge-dark  badge-pill float-right mr-2">{{App\Models\Ad::count()}}</span>
                        </a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{--route('admin.ads')--}}"
                                data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                            </li>
                            <li><a class="menu-item" href="{{--route('admin.ads.pending')--}}"
                                data-i18n="nav.dash.ecommerce"> بانتظار المراجعة  </a>
                            </li>
                            <li><a class="menu-item" href="{{--route('admin.ads.pendingpay')--}}"
                                data-i18n="nav.dash.ecommerce">لانتظار الدفع  </a>
                            </li>
                            <li><a class="menu-item" href="{{--route('admin.ads.active')--}}"
                                data-i18n="nav.dash.ecommerce"> النشطة  </a>
                            </li>
                            <li><a class="menu-item" href="{{--route('admin.ads.finished')--}}"
                                data-i18n="nav.dash.ecommerce"> المنتهية  </a>
                            </li>
                            <li><a class="menu-item" href="{{--route('admin.ads.cancel')--}}"
                                data-i18n="nav.dash.ecommerce"> الملغاة  </a>
                            </li>
                            <li><a class="menu-item" href="{{--route('admin.ads.create')--}}"
                                data-i18n="nav.dash.ecommerce">اضافة اعلان</a>
                            </li>
                        </ul>
                </li>

                <li class="nav-item">
                    <a href=""><i class="la la-male"></i>
                            <span class="menu-title" data-i18n="nav.dash.main">اراء العملاء  </span>
                            <span
                                class="badge badge badge-dark  badge-pill float-right mr-2">{{App\Models\Testmonial::count()}}</span>
                        </a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('admin.testmonials')}}"
                                data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                            </li>
                            <li><a class="menu-item" href="{{route('admin.testmonials.create')}}"
                                data-i18n="nav.dash.ecommerce">اضافة رأي</a>
                            </li>
                        </ul>
                </li>

                <li class="nav-item">
                    <a href=""><i class="la la-archive"></i>
                            <span class="menu-title" data-i18n="nav.dash.main">الاعمال  </span>
                            <span
                                class="badge badge badge-success  badge-pill float-right mr-2">{{App\Models\Work::count()}}</span>
                        </a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('admin.workers')}}"
                                data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                            </li>
                            <li><a class="menu-item" href="{{route('admin.workers.create')}}"
                                data-i18n="nav.dash.ecommerce">اضافة عمل</a>
                            </li>
                        </ul>
                </li>

                <li class="nav-item">
                    <a href=""><i class="la la-send"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">الاخبار البريدية  </span>
                        <span
                            class="badge badge badge-primary  badge-pill float-right mr-2">{{App\Models\Newsletter::count()}}</span>
                    </a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce">عرض الكل  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> ارسال ايميل</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href=""><i class="la la-life-bouy"></i>
                            <span class="menu-title" data-i18n="nav.dash.main">الاشعارات  </span>
                            <span
                                class="badge badge badge-warning  badge-pill float-right mr-2">{{App\Models\Alert::count()}}</span>
                        </a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href=""
                                data-i18n="nav.dash.ecommerce">عرض الكل  </a>
                            </li>
                            <li><a class="menu-item" href=""
                                data-i18n="nav.dash.ecommerce">المشتركين اليوم</a>
                            </li>
                        </ul>
                </li>
                <li class="nav-item">
                    <a href=""><i class="la la-money"></i>
                            <span class="menu-title" data-i18n="nav.dash.main">سحب الاموال  </span>
                            <span
                                class="badge badge badge-danger  badge-pill float-right mr-2">{{App\Models\Withdraw::count()}}</span>
                        </a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href=""
                                data-i18n="nav.dash.ecommerce">عرض الكل  </a>
                            </li>
                            <li><a class="menu-item" href=""
                                data-i18n="nav.dash.ecommerce">سحوبات اليوم</a>
                            </li>
                        </ul>
                </li>
        </ul>
    </div>
</div>
