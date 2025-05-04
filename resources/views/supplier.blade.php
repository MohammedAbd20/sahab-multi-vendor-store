@extends("app")
@section("library")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css/supplier.css') }}">
@endsection
@section("titleBage")
{{ $titlePage }}
@endsection
@section("content")
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-9">
                <div class="text-secondary">
                    <h4 class="text-dark">صالة اللوتس للأفراح</h4>
                    <h6 class="mt-3">مجالات العمل: صالات الأفراح </h6>
                    <h6 class="mt-3">نوع المورد: عادي</h6>
                    <h6 class="mt-3">سنة التأسيس: 2017</h6>
                    <div class="col-md-12 mt-3">
                        <h6>المحافظات التي يتم تغطيتها:</h6>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>- غزة</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <h6>العناوين: </h6>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="address">الزيتون - شارع 8 غرب مفترق دولة‏ ‏غزة‏</p>
                                <p class="mobile_number">
                                    رقم الجوال: 0599404506
                                </p>
                            </div>
                        </div>
                    </div>

                    <p class="bio mt-3">
                        نبذة المورد:
                        <br>
                        تأسست صالة اللوتس عام 2017 تعمل في مجال المناسبات السعيدة والأفراح.
                    </p>
                </div>
            </div>
            <div class="col-md-3 text-secondary">
                <div class="card">
                    <img class="card-img-top" src="https://accordpal.com/storage/app/public/6957/99.jpg"
                        alt="صالة اللوتس للأفراح">
                    <div class="card-body">
                        <h5 class="card-title">صالة اللوتس للأفراح</h5>
                        <hr>
                        <div class="mt-2">
                            <i class="fa fa-phone me-1" aria-hidden="true"></i>
                            0599404506
                        </div>
                        <div class="mt-2">
                            <i class="fa fa-map-marker  me-1" aria-hidden="true"></i>
                            الزيتون - شارع 8 غرب مفترق دولة‏ ‏غزة‏
                        </div>
                        <div class="mt-2">
                            <i class="fab fa-facebook-f  me-1" aria-hidden="true"></i>
                            <span class="link">
                                <a href="">صالة اللوتس للأفراح</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3" dir="ltr">
        <div class="mb-4 mt-5 text-start">
            <h3>صور الشركة</h3>
        </div>
        <div class="featured-carousel owl-carousel owl-loaded owl-drag">
            <div class="item">
                <div class="text-start">
                    <img class="h-100 d-inline" style="width: 250px; "
                        src="https://accordpal.com/storage/app/public/6958/101559610_857390001437533_6748110013971038208_n.jpg"
                        alt="Work 01">
                </div>
            </div>
            <div class="item">
                <div class="text-start">
                    <img class="h-100 d-inline" style="width: 250px; "
                        src="https://accordpal.com/storage/app/public/6959/103631193_861430564366810_6666461577988039599_o.jpg"
                        alt="Work 02">
                </div>
            </div>
            <div class="item">
                <div class="text-start">
                    <img class="h-100 d-inline" style="width: 250px; "
                        src="https://accordpal.com/storage/app/public/6957/99.jpg" alt="Work 02">
                </div>
            </div>
            <div class="item">
                <div class="text-start">
                    <img class="h-100 d-inline" style="width: 250px; "
                        src="https://accordpal.com/storage/app/public/6958/101559610_857390001437533_6748110013971038208_n.jpg"
                        alt="Work 01">
                </div>
            </div>
            <div class="item">
                <div class="text-start">
                    <img class="h-100 d-inline" style="width: 250px; "
                        src="https://accordpal.com/storage/app/public/6959/103631193_861430564366810_6666461577988039599_o.jpg"
                        alt="Work 02">
                </div>
            </div>
            <div class="item">
                <div class="text-start">
                    <img class="h-100 d-inline" style="width: 250px; "
                        src="https://accordpal.com/storage/app/public/6957/99.jpg" alt="Work 02">
                </div>
            </div>
            <div class="item">
                <div class="text-start">
                    <img class="h-100 d-inline" style="width: 250px; "
                        src="https://accordpal.com/storage/app/public/6958/101559610_857390001437533_6748110013971038208_n.jpg"
                        alt="Work 01">
                </div>
            </div>
            <div class="item">
                <div class="text-start">
                    <img class="h-100 d-inline" style="width: 250px; "
                        src="https://accordpal.com/storage/app/public/6959/103631193_861430564366810_6666461577988039599_o.jpg"
                        alt="Work 02">
                </div>
            </div>
            <div class="item">
                <div class="text-start">
                    <img class="h-100 d-inline" style="width: 250px; "
                        src="https://accordpal.com/storage/app/public/6957/99.jpg" alt="Work 02">
                </div>
            </div>
        </div>
    </div>

    <div class="same pt-3 bg-light">
        <div class="container">
            <h3 class="mt-2 mb-4">الأصناف</h3>
            <div class="row justify-content-center">
                <div class="col-10  col-sm-6 col-md-4 col-lg-3">
                    <div class="item mb-3">
                        <div class="card">
                            <div class="image position-relative">
                                <img src="https://accordpal.com/storage/app/public/1693/conversions/20374538_1579379165415950_2704049980498863032_n-thumb.jpg"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-muted">
                                <h6 class="category-name text-center p-2 rounded bg-secondary text-light"
                                    data-source="category_name">قاعة أفراح</h6>
                                <h5 class="card-title">قاعة روتانا</h5>
                                <h6 class="supplier-name text-center" data-source="supplier_name"> ( فندق سيتي ستار )
                                </h6>
                                <p class="card-text text-center" data-source="description"><span>من شهر 1
                                    </span><span>إلى شهر 12، </span><span>غزة، </span><span>مكيَف، </span><span>400
                                        كرسي، </span><span>30 طاولة</span></p>
                                <div class="text-center text-dark">
                                    <span class="price" data-source="price">₪1400</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10  col-sm-6 col-md-4 col-lg-3">
                    <div class="item mb-3">
                        <div class="card">
                            <div class="image position-relative">
                                <img src="https://accordpal.com/storage/app/public/1693/conversions/20374538_1579379165415950_2704049980498863032_n-thumb.jpg"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-muted">
                                <h6 class="category-name text-center p-2 rounded bg-secondary text-light"
                                    data-source="category_name">قاعة أفراح</h6>
                                <h5 class="card-title">قاعة روتانا</h5>
                                <h6 class="supplier-name text-center" data-source="supplier_name"> ( فندق سيتي ستار )
                                </h6>
                                <p class="card-text text-center" data-source="description"><span>من شهر 1
                                    </span><span>إلى شهر 12، </span><span>غزة، </span><span>مكيَف، </span><span>400
                                        كرسي، </span><span>30 طاولة</span></p>
                                <div class="text-center text-dark">
                                    <span class="price" data-source="price">₪1400</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10  col-sm-6 col-md-4 col-lg-3">
                    <div class="item mb-3">
                        <div class="card">
                            <div class="image position-relative">
                                <img src="https://accordpal.com/storage/app/public/1693/conversions/20374538_1579379165415950_2704049980498863032_n-thumb.jpg"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-muted">
                                <h6 class="category-name text-center p-2 rounded bg-secondary text-light"
                                    data-source="category_name">قاعة أفراح</h6>
                                <h5 class="card-title">قاعة روتانا</h5>
                                <h6 class="supplier-name text-center" data-source="supplier_name"> ( فندق سيتي ستار )
                                </h6>
                                <p class="card-text text-center" data-source="description"><span>من شهر 1
                                    </span><span>إلى شهر 12، </span><span>غزة، </span><span>مكيَف، </span><span>400
                                        كرسي، </span><span>30 طاولة</span></p>
                                <div class="text-center text-dark">
                                    <span class="price" data-source="price">₪1400</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10  col-sm-6 col-md-4 col-lg-3">
                    <div class="item mb-3">
                        <div class="card">
                            <div class="image position-relative">
                                <img src="https://accordpal.com/storage/app/public/1693/conversions/20374538_1579379165415950_2704049980498863032_n-thumb.jpg"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-muted">
                                <h6 class="category-name text-center p-2 rounded bg-secondary text-light"
                                    data-source="category_name">قاعة أفراح</h6>
                                <h5 class="card-title">قاعة روتانا</h5>
                                <h6 class="supplier-name text-center" data-source="supplier_name"> ( فندق سيتي ستار )
                                </h6>
                                <p class="card-text text-center" data-source="description"><span>من شهر 1
                                    </span><span>إلى شهر 12، </span><span>غزة، </span><span>مكيَف، </span><span>400
                                        كرسي، </span><span>30 طاولة</span></p>
                                <div class="text-center text-dark">
                                    <span class="price" data-source="price">₪1400</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="text-end small mb-2">تم عرض 50 صنف من 4251 صنف</div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pe-0" dir="ltr">
                        <li class="page-item p-1">
                            <a class="page-link rounded-1" href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li class="page-item p-1 active"><a class="page-link rounded-1" href="#">1</a></li>
                        <li class="page-item p-1"><a class="page-link rounded-1" href="#">2</a></li>
                        <li class="page-item p-1"><a class="page-link rounded-1" href="#">3</a></li>
                        <li class="page-item p-1"><a class="page-link rounded-1" href="#">4</a></li>
                        <li class="page-item p-1"><a class="page-link rounded-1" href="#">5</a></li>
                        <li class="page-item p-1 bg-light border-0">....</li>
                        <li class="page-item p-1"><a class="page-link rounded-1" href="#">85</a></li>
                        <li class="page-item p-1"><a class="page-link rounded-1" href="#">86</a></li>
                        <li class="page-item p-1 pe-0">
                            <a class="page-link rounded-1" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection

@section("script")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('assets/Jquery/suppliersJQ.js')}}"></script>
@endsection
