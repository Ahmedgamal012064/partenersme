<div class="main-menu menu-fixed menu-light menu-accordion  menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class="nav-item"><a href="{{route('admin.dashboard')}}"><i class="la la-home"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الصفحة الرئيسية </span></a>
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
                    <a href=""><i class="la la-male"></i>
                            <span class="menu-title" data-i18n="nav.dash.main">الاعمال  </span>
                            <span
                                class="badge badge badge-dark  badge-pill float-right mr-2">{{App\Models\Work::count()}}</span>
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
            <a href=""><i class="la la-life-bouy"></i>
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
                            class="badge badge badge-primary  badge-pill float-right mr-2">{{App\Models\Alert::count()}}</span>
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
        </ul>
    </div>
</div>
