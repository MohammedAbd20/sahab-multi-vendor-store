@extends("app")
@section("library")
    <!-- مكتبة sweetalert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.min.css">
@endsection
@section("titleBage")
{{ $titlePage }}
@endsection
@section("content")
    <div class="bg-light mt-3 pb-3">
        <div class="container">
            <h3 class="color-black pt-5 pb-3 pe-4">سلة المحذوفات </h3>
            <div class="col-md-12">
                <div class="noneWishList text-center text-secondary fw-bold d-none">
                    <h6 class="">لم يتم اضافة أصناف لسلة المشتريات</h6>
                    <a href="../html/search.html" class="text-primary">تصفح الأصناف</a>
                </div>
                <div class="allItem">
                    <div class="mt-2 mb-3 bg-white shadow-sm p-3 rounded">
                        <div class="row">
                            <div class="col-6 col-md-3 bg-light text-center rounded">
                                <div class="w-100 h-100" style="background-repeat: no-repeat; background-size: contain; background-position: 50% 50%; background-image: url(&quot;https://accordpal.com/storage/app/public/15163/conversions/0e302c24958900fa1b7ed740477553e2-thumb.jpg&quot;);"></div>
                            </div>
                            <div class="col-6 col-md-5">
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
                            <div class="col-12 col-md-4 btn-return mt-3 text-md-end align-self-end ">
                                <button class="btn btn-success fs-5 p-2 ps-4 pe-4 w-100 w-sm-50">إرجاع إلى سلة المشتريات</button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 mb-3 bg-white shadow-sm p-3 rounded">
                        <div class="row">
                            <div class="col-6 col-md-3 bg-light text-center rounded">
                                <div class="w-100 h-100" style="background-repeat: no-repeat; background-size: contain; background-position: 50% 50%; background-image: url(&quot;https://accordpal.com/storage/app/public/15163/conversions/0e302c24958900fa1b7ed740477553e2-thumb.jpg&quot;);"></div>
                            </div>
                            <div class="col-6 col-md-5">
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
                            <div class="col-12 col-md-4 btn-return mt-3 text-md-end align-self-end ">
                                <button class="btn btn-success fs-5 p-2 ps-4 pe-4 w-100 w-sm-50">إرجاع إلى سلة المشتريات</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('assets/Jquery/wishlistJQ.js') }}"></script>
@endsection
