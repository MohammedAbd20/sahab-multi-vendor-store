@extends("app")
@section("library")
    <!-- مكتبة sweetalert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.min.css">
@endsection
@section("titleBage")
{{ $titlePage }}
@endsection
@section("content")
    <div class="bg-light text-right pt-4 mt-3 @if(\Auth::check()) d-none @endif">
        <div class="container">
            <div class="text-center">
                <img src="{{ asset('assets/Jquery/wishlistJQ.js') }}" alt="">
                <h2 class="mt-2">المفضلة لديك فارغة!</h2>
                <div class="mt-2">
                    ليس لديك أي أصناف محفوظة، قم بالنقر على صفحة البحث وإضغط على أيقونة الحفظ
                </div>

                <div class="mt-3 mb-3">
                    <a href="/login" class="btn btn-success text-white p-2 ps-4 pe-4">تسجيل الدخول</a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light mt-3 pb-3 @if(\Auth::check()) @else d-none @endif">
        <div class="container">
            <h3 class="color-black pt-5 pb-3">الأصناف المفضلة</h3>
            <div class="col-md-12">
                <div class="noneWishList text-center text-secondary fw-bold d-none">
                    <h6 class="">لم يتم اضافة أصناف للمفضلة</h6>
                    <a href="../html/search.html" class="text-primary">تصفح الأصناف</a>
                </div>
                <div class="row allItem">
                    <div class="col-md-4 mb-3">
                        <div class="card p-3 h-100 position-relative">
                            <button class="btn-close p-1 bg-dark position-absolute top-0 start-0"></button> <!-- أيقونة الإغلاق -->
                            <div class="col-3 w-100 bg-light text-center rounded mb-3" style="height: 200px;">
                                <div class="w-100 h-100" style="background-repeat: no-repeat; background-size: contain; background-position: 50% 50%; background-image: url(&quot;https://accordpal.com/storage/app/public/6960/conversions/83098745_865228797320320_8855934933935370518_o-thumb.jpg&quot;);"></div>
                            </div>
                            <p>
                                <a href=""  class="text-secondary">تزيين الورود</a>
                                -
                                <a href=""  class="text-secondary">مسمكة العروس</a>
                            </p>
                            <p><a href="" class="text-dark">مسمكة العروس 55</a></p>
                            <p class="bg-light p-1 text-secondary text-center rounded">₪75</p>
                            <h6 class="text-secondary text-center fw-bold">ورد فلين ،حجم كبير ،غير مرجع</h6>
                            <button class="btn btn-primary mt-3">أضف إلى السلة</button>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card p-3 h-100 position-relative">
                            <button class="btn-close p-1 bg-dark position-absolute top-0 start-0"></button> <!-- أيقونة الإغلاق -->
                            <div class="col-3 w-100 bg-light text-center rounded mb-3" style="height: 200px;">
                                <div class="w-100 h-100" style="background-repeat: no-repeat; background-size: contain; background-position: 50% 50%; background-image: url(&quot;https://accordpal.com/storage/app/public/6960/conversions/83098745_865228797320320_8855934933935370518_o-thumb.jpg&quot;);"></div>
                            </div>
                            <p>
                                <a href=""  class="text-secondary">تزيين الورود</a>
                                -
                                <a href=""  class="text-secondary">مسمكة العروس</a>
                            </p>
                            <p><a href="" class="text-dark">مسمكة العروس 55</a></p>
                            <p class="bg-light p-1 text-secondary text-center rounded">₪75</p>
                            <h6 class="text-secondary text-center fw-bold">ورد فلين ،حجم كبير ،غير مرجع</h6>
                            <button class="btn btn-primary mt-3">أضف إلى السلة</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("script")
    <!-- مكتبة sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('assets/Jquery/wishlistJQ.js') }}"></script>
@endsection
