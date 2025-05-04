@extends("app")
@section("titleBage")
{{ $titlePage }}
@endsection
@section("content")

    <div class="bg-primary pt-2 pb-2">
        <div class="container">
            <div class="form-group d-flex position-relative">
                <i class="fa fa-search text-muted form-control-feedback position-absolute top-50"></i>
                <input type="text" id="searchInput" class="form-control p-2 ps-5" placeholder="البحث ...">
            </div>
        </div>
    </div>

    <div class="container pt-3">
        @include("items")
    </div>

    <div class="container pt-3">
        <div class="advertising">
            <!-- in jquery  -->
            <a class="a" href="/supplier/1"><img class="w-100 rounded" src="" alt=""></a>
        </div>
    </div>

    <div class="bg-light pt-3 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="btn-group d-flex flex-wrap">
                            <div>
                                <button class="border-0 bg-light" type="button">
                                    الترتيب حسب
                                </button>
                                <button type="button" class=" dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">الأقل سعرًا</a></li>
                                    <li><a class="dropdown-item" href="#">الأعلى سعرًا</a></li>
                                    <li><a class="dropdown-item" href="#">الأكثر خصومات</a></li>
                                    <li><a class="dropdown-item" href="#">الأحدث</a></li>
                                    <li><a class="dropdown-item" href="#">الأقدم</a></li>
                                </ul>
                            </div>
                            <div class="ms-3 mt-2 mt-lg-0 border-3 border-secondary border-start">
                                <div class="form-group mb-1">
                                    <div class="d-flex ms-4 me-4">
                                        <input class="form-control" type="number"  placeholder="الأقل سعراً">
                                        <span class="ms-3 me-3">إلى</span>
                                        <input class="form-control" type="number" placeholder="الأعلى سعراً">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-sm-2 mt-lg-0">4260 صنف</p>
                    </div>
                    <h3 class="nonShow d-none text-center text-danger p-3 fm-bold m-3">لا يوجد هذا المنتج</h3>

                    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

                    <div class="allRow">
                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/1.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">صالة اللوتس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">

                                <!-- Button trigger modal -->
                                <!-- Modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>
                                @if (\Auth::check())
                                @else
                                    <div class="modal fade" id="notLoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title text-secondary" id="exampleModalLabel">أهلاً وسهلاً بك في أكورد</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع أكورد
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="/login" class="btn btn-primary text-white">تسجيل الدخول</a>
                                                    <a href="/register" class="btn btn-primary text-white">تسجيل</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/2.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">باقة - 5 خدمات<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪75</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount">%6.3</span>
                                        <span class="original-price">
                                            <del data-source="original_price">₪80</del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal" @endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>
                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/3.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">مسكة عروس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount">%16.4</span>
                                        <span class="original-price">
                                            <del data-source="original_price">₪450</del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/5.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">باص 50 راكب<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/5.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">مسكة عروس 55<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪3766</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount">%1.4</span>
                                        <span class="original-price">
                                            <del data-source="original_price">₪830</del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/8.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">مسكة عروس 55<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪763</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount">%25.4</span>
                                        <span class="original-price">
                                            <del data-source="original_price">₪50</del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/7.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">باص 50 راكب<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/9.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">صالة اللوتس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
                        <div class="item-adverting">
                            <div class="advertising-home mb-2">
                                <img class="w-100 rounded d-none d-sm-block" src="https://accord.ps/Modules/Website/Resources/assets/images/adv-home.jpg">
                                <img class="w-100 rounded d-block d-sm-none" src="https://accord.ps/Modules/Website/Resources/assets/images/mobile/adv-home.jpg">
                            </div>
                        </div>
                        <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/10.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">صالة اللوتس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/1.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">صالة اللوتس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/5.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">صالة اللوتس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/1.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">صالة اللوتس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/1.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">صالة اللوتس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/1.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">صالة اللوتس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/1.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">صالة اللوتس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
                        <div class="item-adverting">
                            <div class="advertising-wedding mb-2">
                                <img class="w-100 rounded d-none d-sm-block" src="https://accord.ps/Modules/Website/Resources/assets/images/adv-wedding.jpg">
                                <img class="w-100 rounded d-block d-sm-none" src="https://accord.ps/Modules/Website/Resources/assets/images/mobile/adv-wedding.jpg">
                            </div>
                        </div>
                        <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/3.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">صالة اللوتس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/1.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">صالة اللوتس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/1.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">صالة اللوتس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/1.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">صالة اللوتس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/1.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">صالة اللوتس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>

                        <div class="row p-2 mt-2 mb-3 bg-white shadow-sm p-3 bg-body rounded">
                            <div class="col-3 bg-light text-center rounded">
                                <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/1.jpg');"></div>
                            </div>
                            <div class="col-7 col-md-8">
                                <p>صالات أفراح - قاعة أفراح</p>
                                <div class="d-flex">
                                    <h5 class="d-flex flex-wrap"><a href="/product/1" class="fs-5 text-dark">صالة اللوتس<span class="d-block fs-6 text-secondary"></span> </a>
                                        @if (\Auth::check())
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white">
                                                <a class="a" href="/supplier/1">( صالة اللوتس للأفراح )</a>
                                            </span>
                                        @else
                                            <span class="fs-6 ms-2 text-secondary" type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#notLoginModal">
                                                ( صالة اللوتس للأفراح )
                                            </span>
                                        @endif
                                    </h5>
                                </div>
                                <p class="text-secondary small fw-normal"><span>من شهر 11 </span><span>إلى شهر 4، </span><span>غزة، </span><span>مكيَف، </span><span>600 كرسي، </span><span>68 طاولة</span></p>
                                <div class="">
                                    <span data-source="price">₪376</span>
                                    <span>
                                        <span class="ps-2 pe-2" data-source="discount"></span>
                                        <span class="original-price">
                                            <del data-source="original_price"></del>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white @if (\Auth::check()) colorChangeButton" @else " data-bs-toggle="modal" data-bs-target="#notLoginModal"@endif>
                                    <svg viewBox="0 0 32 32" color="#696766" width="30" height="30"><defs><path id="iconFavorit_svg__a" d="M6.997 1.998c-1.346 0-2.548.436-3.493 1.339-2.73 2.608-1.676 7.529 2.562 11.965 2.743 2.87 8.259 6.21 9.934 7.192 1.675-.982 7.193-4.323 9.933-7.192 4.24-4.436 5.292-9.357 2.563-11.965C25.784.746 20.94 1.997 16.72 6.382L16 7.13l-.72-.748c-2.75-2.857-5.766-4.384-8.283-4.384zM16 24.8l-.492-.28c-.303-.171-7.445-4.234-10.887-7.837-5.052-5.287-6.08-11.37-2.499-14.792C5.516-1.348 11.124-.343 16 4.281c4.875-4.624 10.485-5.63 13.878-2.39 3.58 3.421 2.553 9.505-2.499 14.792-3.442 3.603-10.584 7.666-10.887 7.838L16 24.8z"></path></defs><use fill="currentColor" xlink:href="#iconFavorit_svg__a" fill-rule="evenodd" transform="translate(0 4)"></use></svg>
                                </button>


                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="text-end small mb-2">تم عرض 50 صنف من 4251 صنف</div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pe-0" dir="ltr">
                                <li class="page-item p-1">
                                    <a class="page-link rounded-1" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
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
                                    <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>

                <div class="col-md-3">
                    <div class="bg-white mb-3 shadow-sm bg-body rounded">
                        <div class="p-3">
                            <div class="mb-3 pb-2 border-1 border-bottom">
                                <div class="w-100 bg-light" style="height: 140px;">
                                    <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/t.jpg');"></div>
                                </div>
                                <div>
                                    <h6 class="mt-2 text-secondary">طاولة وسط 20026</h6>
                                    <span>₪1636</span>
                                </div>
                            </div>
                            <div class="mb-3 pb-2 border-1 border-bottom">
                                <div class="w-100 bg-light" style="height: 140px;">
                                    <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/t.jpg');"></div>
                                </div>
                                <div>
                                    <h6 class="mt-2 text-secondary">طاولة وسط 20016</h6>
                                    <span>₪1400</span>
                                </div>
                            </div>
                            <div class="mb-3 pb-2 border-1 border-bottom">
                                <div class="w-100 bg-light" style="height: 140px;">
                                    <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/d.jpg');"></div>
                                </div>
                                <div>
                                    <h6 class="mt-2 text-secondary">W-507</h6>
                                    <p class="bt-2 mt-3 mb-1">( سنتر اجمل العرائس )</p>
                                    <span>₪750</span>
                                </div>
                            </div>
                            <div class="mb-3 pb-2 border-1 border-bottom">
                                <div class="w-100 bg-light" style="height: 140px;">
                                    <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/d.jpg');"></div>
                                </div>
                                <div>
                                    <h6 class="mt-2 text-secondary">فيديو سهرة الشباب</h6>
                                    <p class="bt-2 mt-3 mb-1">( استوديو غرام )</p>
                                    <span>₪106</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white mb-3 shadow-sm bg-body rounded">
                        <p class="text-center bg-secondary text-white pt-1 pb-2 mb-3">شركة آت هوم للأثاث العصري</p>
                        <div>
                            <div class="mb-3 pb-2 border-1 border-bottom">
                                <div class="p-2 pb-0">
                                    <div class="d-flex">
                                        <div class="w-25" style="height: 80px;">
                                            <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/z.jpg');"></div>
                                        </div>
                                        <div class="ms-4">
                                            <div class="d-flex">
                                                <p class="mb-0">₪3900</p>
                                                <del class="ms-3">₪4200</del>
                                            </div>
                                            <small class="text-secondary">غرفة نوم اسطنبول - 2010058</small>
                                            <p class="small">( شركة آت هوم للأثاث العصري )</p>
                                        </div>
                                    </div>
                                    <div class="fw-bold text-muted" style="font-size: 11px;"><span>ساندويش + mdf، </span><span>محلي، </span><span>قشرة زان، </span><span>6 قطعة</span></div>
                                </div>
                            </div>
                            <div class="mb-3 pb-2 border-1 border-bottom">
                                <div class="p-2 pb-0">
                                    <div class="d-flex">
                                        <div class="w-25" style="height: 80px;">
                                            <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/x.jpg');"></div>
                                        </div>
                                        <div class="ms-4">
                                            <div class="d-flex">
                                                <p class="mb-0">₪181</p>
                                                <del class="ms-3">₪200</del>
                                            </div>
                                            <small class="text-secondary">ساعة_100183</small>
                                            <p class="small">( شركة آت هوم للأثاث العصري )</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 pb-2 border-1 border-bottom">
                                <div class="p-2 pb-0">
                                    <div class="d-flex">
                                        <div class="w-25" style="height: 80px;">
                                            <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/v.jpg');"></div>
                                        </div>
                                        <div class="ms-4">
                                            <div class="d-flex">
                                                <p class="mb-0">₪137</p>
                                                <del class="ms-3">₪150</del>
                                            </div>
                                            <small class="text-secondary">ساعة_كرسي سفرة_30009</small>
                                            <p class="small">( شركة آت هوم للأثاث العصري )</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 pb-2 border-1 border-bottom">
                                <div class="p-2 pb-0">
                                    <div class="d-flex">
                                        <div class="w-25" style="height: 80px;">
                                            <div class="w-100 h-100 imgBackGround" style="background-image: url('/assets/images/z.jpg');"></div>
                                        </div>
                                        <div class="ms-4">
                                            <div class="d-flex">
                                                <p class="mb-0">₪91</p>
                                                <del class="ms-3">₪100</del>
                                            </div>
                                            <small class="text-secondary">ساعة_كرسي سفرة_30006</small>
                                            <p class="small">( شركة آت هوم للأثاث العصري )</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="w-100 d-none d-md-block rounded" src="https://accord.ps/Modules/Website/Resources/assets/images/adv-callcenter.jpg?vid=2021120901" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="contact-us-image">
            <img class="w-100 rounded d-none d-sm-block" src="https://accord.ps/Modules/Website/Resources/assets/images/offers/call-center.jpg?vid=2021120901" alt="">
            <img class="w-100 rounded d-block d-sm-none w-100" src="https://accord.ps/Modules/Website/Resources/assets/images/mobile/contactusmobile.jpg" alt="">
        </div>
    </div>
@endsection

@section("script")
    <script src="{{ asset('assets/Jquery/searchJQ.js') }}"></script>
@endsection
