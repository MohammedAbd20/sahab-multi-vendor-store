<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- الmeta الخاصة بالباك اند  --}}
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <meta name="base_url" content="{{ url('/') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/rasel-logo.png') }}">
    <!-- link css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- icon link  -->
    <link rel="stylesheet" href="{{ asset('assets/Fonts/fontawesome-free-6.1.1-web/css/all.min.css') }}">
        <!-- link font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@800&family=Cairo:wght@200;400;500&family=Lalezar&family=Lato:wght@300;400;900&family=Noto+Nastaliq+Urdu:wght@500&family=Open+Sans:wght@300;400;700&family=Poppins:wght@400;500;600&family=Tajawal:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
    <title>{{ $titlePage }}</title>
</head>
<body>

    <div class="container mb-5 mb-lg-0 mt-5 pt-1">
        <div class="row mt-5">
            <div class="col-sm-12 col-lg-5 shadow p-4 bg-body rounded">
                <div class="pt-3">
                    <a href="">
                        <img width="150" src="{{ asset('assets/images/rasel-logo.png') }}" alt="">
                    </a>
                </div>
                @yield("content")
            </div>
            <div class="col-sm-12 col-lg-7 p-0">
                <img class="rounded w-100 h-100" src="{{ asset('assets/images/login-2.jpg') }}" class="w-100" alt="">
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/Jquery/jquery.min.js') }}"></script>
    @yield("script")
</body>
</html>
