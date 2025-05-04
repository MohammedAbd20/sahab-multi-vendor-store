<!DOCTYPE html>
<html lang="en" dir="rtl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            {{-- الmeta الخاصة بالباك اند  --}}
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <meta name="base_url" content="{{ url('/') }}">
        <link rel="icon" type="image/png"
            href="https://accord.ps/Modules/Website/Resources/assets/images/accord-favicon.png">

        <!-- link css -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <!-- link font  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Almarai:wght@800&family=Cairo:wght@200;400;500&family=Lalezar&family=Lato:wght@300;400;900&family=Noto+Nastaliq+Urdu:wght@500&family=Open+Sans:wght@300;400;700&family=Poppins:wght@400;500;600&family=Tajawal:wght@300;400;700&display=swap"
            rel="stylesheet">
        <!-- icon link  -->
        <link rel="stylesheet" href="{{ asset('assets/Fonts/fontawesome-free-6.1.1-web/css/all.min.css') }}">
        <!-- link bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
        @yield("library")
        <title>@yield("titleBage")</title>
    </head>

    <body>
        <div class="main border-bottom">
            <div class="header-line mb-1">
            </div>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light justify-content-between p-lg-0">
                    <div class="d-flex align-items-center">
                        <a class="navbar-brand" href="/"><img style="width: 140px;"
                                src="https://accord.ps/Modules/Website/Resources/assets/images/rasel-logo.png" alt=""></a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-none d-lg-block">
                            <li class="nav-item ps-sm-1  pe-sm-1 p-lg-0 dropdown">
                                <a class="nav-link dropdown-toggle text-secondary small fw-bold" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    التصنيقات
                                </a>
                                <div class="dropdown-menu mt-3 mb-5 p-3" aria-labelledby="navbarDropdown" >
                                    @include("allCategoris")
                                </div>
                            </li>
                        </ul>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse mt-3" id="navbarSupportedContent">
                        <a class="p-2 pt-1 pb-1 me-2 text-white text-nowrap rounded btn" style="background-color: rgb(73, 185, 117); font-size: 14px;">
                            <i class="fa fa-plus p-1 border border-2 rounded-circle text-center" style="width: 20px; height: 20px; font-size: 11px;"></i> سجل كمورد</a>
                        <ul class="navbar-nav text-center flex-row mt-3 mt-lg-0 me-auto mb-2 mb-lg-0">
                            <li class="nav-item ps-sm-1  pe-1 p-lg-0">
                                <a class="nav-link fm-bold text-secondary" href="/search">
                                    <svg viewBox="0 0 32 32" class="text-secondary" width="20" height="20"><defs><path id="iconSearchFill_svg__a" d="M21.464 24.053c-2.152 1.506-4.936 2.268-8.303 2.268C4.797 26.321 0 21.524 0 13.161 0 4.797 4.797 0 13.161 0c8.363 0 13.16 4.797 13.16 13.161 0 3.566-.865 6.47-2.555 8.669l8.04 8.038-2.263 2.263-8.079-8.078zm-8.303-.848c3.245 0 5.758-.867 7.468-2.576 1.709-1.71 2.576-4.223 2.576-7.468 0-6.477-3.567-10.044-10.044-10.044-6.478 0-10.044 3.567-10.044 10.044s3.566 10.044 10.044 10.044z"></path></defs><use fill="currentColor" xlink:href="#iconSearchFill_svg__a" fill-rule="evenodd"></use></svg>
                                    <p class="mb-0 mt-1" style="font-weight: 600; font-size: 11px !important;">البحث</p>
                                </a>
                            </li>
                            <li class="nav-item ps-sm-1  pe-1 p-lg-0 p myheart">
                                <a class="nav-link fm-bold text-secondary position-relative" href="/wishlist">
                                    <span class="position-absolute top-0 translate-middle badge rounded-pill bg-primary" style="right: 5px;">
                                        99+
                                    </span>
                                    <i class="fa-regular fa-heart"></i>
                                    <p class="mb-0 mt-1" style="font-weight: 600; font-size: 11px !important;">المفضلة</p>
                                </a>
                            </li>
                            <li class="nav-item ps-sm-1  pe-1 p-lg-0">
                                <a class="nav-link fm-bold text-secondary position-relative" href="/cart" >
                                    <span class="position-absolute top-0 translate-middle badge rounded-pill bg-primary" style="right: 5px;">
                                        99+
                                    </span>
                                    <i class="fa fa-shopping-cart"></i>
                                    <p class="mb-0 mt-1" style="font-weight: 600; font-size: 11px !important;">سلة المشتريات</p>
                                </a>
                            </li>
                            <li class="nav-item ps-sm-1  pe-1 p-lg-0">

                                @if (\Auth::check())
                                    <a class="nav-link fm-bold text-secondary" href="/profile">
                                        <i class="fa-regular fa-circle-user"></i>
                                        <p class="mb-0 mt-1" style="font-weight: 600; font-size: 11px !important;">
                                            {{ \Auth::user() ->name }}
                                        </p>
                                    </a>
                                @else
                                    <a class="nav-link fm-bold text-secondary" href="/login">
                                        <i class="fa-regular fa-circle-user"></i>
                                        <p class="mb-0 mt-1" style="font-weight: 600; font-size: 11px !important;">
                                            تسجيل الدخول
                                        </p>
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        @yield("content")


        <footer>
            <div class="header-line mt-3" style="height: 10px;"></div>
            <div class="container pt-3">
                <div class="row">
                    <div class="col-12 col-xl-4">
                        <h5>للإتصاال بنا</h5>
                        <p class="">يسرنا تواصلك معنا من خلال أي من القنوات المتاحة.</p>
                        <div class="row pt-4">
                            <div class="col-5 col-sm-6">
                                <h6>أرقام التواصل:</h6>
                                <p>02030202020</p>
                            </div>
                            <div class="col-5 col-sm-6">
                                <h6>البريد الالكتروني:</h6>
                                <p>info@gmail.com</p>
                            </div>
                            <div class="col-5 col-sm-6">
                                <h6>العنوان:</h6>
                                <p>فلسطين، غزة، مقابل البوابة الشمالية لجامعة الأزهر، مجمع الرؤيا التجاري</p>
                            </div>
                            <div class="col-5 col-sm-6">
                                <h6>ساعات العمل:</h6>
                                <p>السبت - الخميس <br> 9:00 صباحاً - 3:30 مساءً</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-xl-2">
                        <h5>معلومات</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="" class="text-muted">من نحن</a></li>
                            <li class="mb-2"><a href="" class="text-muted">سياسة الخصوصية</a></li>
                            <li class="mb-2"><a href="" class="text-muted">للإتصال بنا</a></li>
                            <li class="mb-2"><a href="" class="text-muted">الأسئلة الشائعة</a></li>
                            <li class="mb-2"><a href="" class="text-muted">مورد جديد</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 col-xl-2">
                        <h5>الملف الشخصي</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="" class="text-muted">تسجيل</a></li>
                            <li class="mb-2"><a href="" class="text-muted">تسجيل الدخول</a></li>
                            <li class="mb-2"><a href="" class="text-muted">المفضلة</a></li>
                            <li class="mb-2"><a href="" class="text-muted">سلة المشتريات</a></li>
                            <li class="mb-2"><a href="" class="text-muted">البحث</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4">
                        <h5>قائمة الواتس أب</h5>
                        <p>انضم إلى قائمة الواتس أب الخاصة بالمنصة للبقاء على إطلاع بأحدث الخصومات والعروض الخاصة.</p>
                        <div class="number-whats mb-3">
                            <form>
                                <input class="p-1" type="number" placeholder="رقم الواتس أب...">
                                <button class="p-1 ps-3 pe-3 border-0 text-white">الإشتراك</button>
                            </form>
                        </div>
                        <div class="socil-media mt-4">
                            <h6>وسائل التواصل الإجتماعي</h6>
                            <i class="fab fa-facebook text-white text-center rounded-circle"></i>
                            <i class="fab fa-instagram text-white text-center rounded-circle"></i>
                        </div>
                    </div>
                </div>
                <div class="text-center h6 text-secondary">
                    Powered by Accord - Accord Group for Marketing &amp; Trade
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/Jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/Jquery/global.js') }}"></script>
        @yield("script")
    </body>

</html>
