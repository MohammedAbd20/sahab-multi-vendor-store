@extends("app")
@section("titleBage")
    {{ $titlePage }}
@endsection
@section("content")
    <div class="text-center bg-light mt-3 pt-4 pb-3 @if(\Auth::check()) d-none @endif">
        <div class="container">
            <div class="pt-3">
                <img class="rounded" src="https://accord.ps/Modules/Website/Resources/assets/images/cartNoLogin.png" alt="">
            </div>
            <div class="pb-4 text-center">
                يجب عليك تسجيل الدخول أولاً <a class="text-primary a" href="/login">اضغط هنا</a>
                <br>
                أو انشاء حساب جديد <a class="text-primary a" href="/register">اضغط هنا</a>
            </div>
        </div>
    </div>
    <div class="bg-light mt-3 pb-3 @if(\Auth::check()) @else d-none @endif">
        <div class="container">
            <h3 class="color-black pt-5 pb-3">سلة المشتريات
                <span class="float-end fs-5 bg-danger p-2 rounded">
                    <a href="/recycle-bin" class="text-white">
                        <span class="d-none d-sm-inline-block">سلة المحذوفات</span>
                        <i class="fa fa-trash"></i>
                    </a>
                </span>
            </h3>
            <div class="col-md-12">
                <div class="noneWishList text-center text-secondary fw-bold d-none">
                    <h6 class="">لا يوجد أصناف محذوفة من سلة المشتريات</h6>
                    <a href="/search" class="text-primary">تصفح الأصناف</a>
                </div>
                <div class="allItem">
                    <div class="mt-2 mb-3 bg-white shadow-sm p-3 rounded position-relative">
                        <div class="row">
                            <button class="btn-close p-1 bg-dark position-absolute top-0 start-0"></button>
                            <div class="col-6 col-md-3 bg-light text-center rounded">
                                <div class="w-100 h-100" style="background-repeat: no-repeat; background-size: contain; background-position: 50% 50%; background-image: url(&quot;https://accordpal.com/storage/app/public/15163/conversions/0e302c24958900fa1b7ed740477553e2-thumb.jpg&quot;);"></div>
                            </div>
                            <div class="col-6 col-md-3">
                                <p>10402#</p>
                                <div class="text-secondary">
                                    <h5 class="d-flex flex-wrap">
                                        <a href="" class="fs-6 text-secondary">تزيين الورود</a> -
                                        <a href="" class="fs-6 text-secondary">مسكة عروس</a>
                                    </h5>
                                </div>
                                <h5 class="text-dark">مسكة عروس</h5>
                                <div class="bg-light d-inline-block">
                                    <span data-source="price">₪378</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-5">
                                <form class="row justify-content-center">
                                    <button class="col-auto border rounded me-2 bg-white increment" >+</button>
                                    <input  class="col-auto form-control w-auto counter" value="1">
                                    <button class="col-auto border rounded ms-2 bg-white decrement" disabled="">-</button>
                                    <div class="d-block text-center fw-bold text-secondary mt-2">
                                        السعر الكامل: <span class="fw-normal price">75</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="result p-4 fw-bold text-secondary fs-5 bg-white shadow-sm rounded">
                    <div id="count_of_items" class="mb-2">عدد الأصناف: 1</div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 pr-0">
                                <div id="totla_price_original_of_cart" class="mb-2">إجمالي قيمة الأصناف: 160.00₪</div>
                            </div>
                            <div class="col-md-6 pr-0">
                                <div id="totla_price_of_cart" class="mb-2">الإجمالي بعد الخصم: 150.00₪</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 pr-0">
                                <div id="discount_of_total_items" class="mb-2">قيمة الخصم:  10₪</div>
                            </div>
                            <div class="col-md-6 pr-0">
                                <div id="discount_percentage_of_total_items" class="mb-3">نسبة الخصم:  6.25%</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-danger">
                        ملاحظة: لا يتم احتساب الأصناف المنتهية كميتها ضمن الإجمالي.
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
    <script src="{{ asset('assets/Jquery/cartJQ.js') }}"></script>
@endsection


