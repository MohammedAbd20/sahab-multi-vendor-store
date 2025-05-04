@extends("app")
@section("titleBage")
    {{ $titlePage }}
@endsection
@section("content")
    <div class="container advertising-home pt-3">
        <a href=""><img class="rounded w-100"
                src="https://accord.ps/Modules/Website/Resources/assets/images/advertising-home/adv2.jpg" alt=""></a>
    </div>

    <nav class="container" aria-label="breadcrumb">
        <ol class="breadcrumb pt-3">
            <li class="breadcrumb-item"><a href="">الصفحة الرئيسية</a></li>
            <li class="breadcrumb-item"><a href="">صالات الأفراح</a></li>
            <li class="breadcrumb-item"><a href="">قاعة أفراح</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-9">
                <div class="item">
                    <div class="images">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                            </div>
                            <div class="carousel-inner">
                                @foreach ($images as $key=> $image)
                                    <div class="carousel-item @if ($key ==0 ) active @endif">
                                        <img src={{ $image }}
                                            class="d-block w-100 h-75 rounded" alt="...">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span
                                    class="carousel-control-prev-icon border border-3 rounded-circle text-center bg-dark"
                                    aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span
                                    class="carousel-control-next-icon border border-3 rounded-circle text-center bg-dark"
                                    aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="item-details mt-3 text-right">
                        <div class="item_id">{{ $id }}#</div>
                        <div class="d-sm-blok d-md-flex justify-content-between">
                            <div>
                                <h2 class="name">{{ $title }}</h2>
                                <p><span>السعر</span>: {{ $price }}₪</p>
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-secondary action" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    أضف إلى السلة
                                </button>
                                <button type="button" class="btn btn-outline-secondary action" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    &#9829; حفظ
                                </button>
                                <button type="button" class="btn btn-outline-secondary action" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    مشاركة الصنف
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="supplier-name mt-4">
                            <span style="color: rgb(105, 103, 102)" data-bs-toggle="modal"
                                data-bs-target="#loatesEye">
                                اسم المورد: صالة اللوتس للأفراح
                                <i class="fa fa-eye pe-auto"></i>
                            </span>
                            <div class="modal fade" id="loatesEye" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="mt-4 p-4 ps-3 pe-3 border rounded description">
                            <h5 class="color-black">الوصف</h5>
                            <p>{{ $description }}</p>
                        </div>
                        <div class="mt-4 p-4 ps-3 pe-3 border rounded attributes">
                            <h5 class="color-black">المواصفات</h5>
                            <table class="table text-secondary">
                                <thead>
                                    <tr>
                                        <th scope="col">نوع الصفة</th>
                                        <th scope="col">قيمة الصفة</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($attriputes as $key => $value )
                                        <tr>
                                            <td>{{ $key }}</td>
                                            <td>{{ $value }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 p-4 ps-3 pe-3 border rounded additional-description">
                            <h5 class="color-black">تفاصيل اضافية</h5>
                            <p>السعر يشمل :ضيافة الرجال قهوة وشاي بدون اشهار رجال "أشهار رجال : زيادة 100$</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3 text-center">
                <img class="" src="https://accord.ps/Modules/Website/Resources/assets/images/advertising-item/04.png"
                    alt="">
                <img class="" src="https://accord.ps/Modules/Website/Resources/assets/images/advertising-item/03.png"
                    alt="">
                <img class="" src="https://accord.ps/Modules/Website/Resources/assets/images/advertising-item/05.png"
                    alt="">
            </div>
        </div>
    </div>

    <div class="same pt-3 bg-light mt-3">
        <div class="container">
            <h4 class="pt-3 pb-3">الأصناف المشابهة</h4>
            <div class="row justify-content-center mb-3">

                @foreach ($other_items as $item )
                    <div class="col-10  col-sm-6 col-md-4 col-lg-3" >
                        <div class="item mb-3">
                            <div class="card">
                                <div class="image position-relative p-3 bg-light" style="height: 165px">
                                    <div class="h-100 img" style="background-image: url({{ $item["img"] }})"></div>
                                </div>
                                <div class="card-body text-muted">
                                    <h6 class="category-name text-center p-2 rounded bg-secondary text-light" data-source="category_name">{{ $item["title"] }}</h6>
                                    <h5 class="card-title">{{ $item["nameTitle"] }}</h5>
                                    <h6 class="supplier-name text-center" data-source="supplier_name">{{ $item["description"] }} </h6>
                                    <p class="card-text text-center" data-source="description">{{ $item["avilable"] }}</p>
                                    <div class="text-center text-dark">
                                        <span class="price" data-source="price">₪{{ $item["price"] }}</span>
                                        <del class="discount @if($item["discount"] ==0 ||$item["discount"] =="" ) d-none @endif" data-source="discount">₪{{ $item["discount"] }}</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <div class="pb-3 pt-3">
        <div class="container">
            <div class="row">

                 @foreach ($cards as $i => $card)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <img class="w-100 mb-3"
                                    src="https://accordpal.com/storage/app/public/66/conversions/31178230_1033429600144204_3346188786722668544_o-thumb.jpg">
                                <h6 class="bg-light p-2 rounded text-center" data-source="category_name">قاعة أفراح</h6>
                                <h5 class="card-title" data-source="item_name">{{ $card['name'] }}</h5>
                                <h6 class="supplier-name text-center" data-source="supplier_name">
                                    {{ $card['supplier_name'] }}
                                </h6>
                                <p class="card-text text-center" data-source="description">
                                    <span>{{ $card['price'] }}</span>
                                    <span>{{ $card['span'] }}</span>
                                </p>
                                <div class="text-center">
                                    <span class="price" data-source="price">₪{{ $card['price'] }}</span>
                                    <span class="discount-original-price">
                                        <span class="discount" data-source="discount">%{{ $card['discount'] }}</span>
                                        <span class="original-price"><del data-source="original_price">₪{{ $card['price'] }}</del></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <div class="container advertising-home pt-3">
        <a href=""><img class="rounded w-100"
                src="https://accord.ps/Modules/Website/Resources/assets/images/advertising-item/bottom-adv.jpg" alt=""></a>
    </div>
@endsection
