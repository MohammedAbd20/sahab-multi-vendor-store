
@extends("app")
@section("titleBage")
{{ $titlePage }}
@endsection
@section("content")
    <div class="main-slider w-100">
        @if (\Auth::check())
        @else
            <div class="container position-relative">
                <div class="position-absolute bg-white text-dark p-4 rounded w-xs-100">
                    <h4 class="text-center m-1 pt-2">كل المراحب والله</h4>
                    <p class="small text-secondary text-center fw-bold">ضيفوا البيانات مشان تتمتعوا بالعديد من الميزات</p>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">رقم الجوال</label>
                            <input type="text" class="form-control p-2" placeholder="أدخل رقم الجوال">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">الاسم بالكامل</label>
                            <input type="password" class="form-control p-2" placeholder="أدخل اسمك بالكامل">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 p-2">إرسال</button>
                    </form>
                </div>
            </div>
        @endif
    </div>

    <div class="container pt-3">
        <h2>اكتشف أصنافنا</h2>
        <a href="/categories" class="d-block mb-2 text-secondary fw-bold text-end">كل التصنيفات <i class="fa-solid fa-angle-left"></i></a>
        @include("items")
    </div>

    <div class="container pt-3">
        <div class="row g-3 justify-content-center">
            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="card shadow-sm  bg-white rounded h-100" >
                    <img src="{{ asset('assets/images/adv1-2.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title">أكورد، القصة، وبناء الثقة</h5>
                        <p class="card-text">ن، تمتلك أكورد مئات الموردين وآلاف المنتجات التي تملأ المنصة الآن من جميع التصنيفات التي تهم المقبلين على الزواج بالإضافة ...</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="card shadow-sm  bg-white rounded h-100" >
                    <img src="{{ asset('assets/images/adv3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title">الشراكات، الطريق للراحة والتحكم</h5>
                        <p class="card-text">من خلال إضافة خيار التقسيط إلى خيارات الدفع الكاش المتوفر لدينا، يمكننا توفير تجربة تسوق أكثر شمولية، ومنح عملائنا مزيداً من الراحة والتحكم والوصول إلى خيارات ...</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="card shadow-sm  bg-white rounded h-100" >
                    <img src="{{ asset('assets/images/adv1-2.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title">المنتجات وقوة موردينا</h5>
                        <p class="card-text">الأفضل أمام عينك، مع وجود خطة تمكن الفريق من جلب منتجات عديدة بمواصفات حقيقية، كان لابد من وجود العديد من الاعتبارات التي نأخذها ليكون أحدهم من موردينا ...</p>
                    </div>
                </div>
            </div>

            <div class="advertising">
                <a href="">
                    <img class="w-100 rounded" src="{{ asset('assets/images/adv-search3.jpg') }}" alt="">
                </a>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="card shadow-sm  bg-white rounded h-100" >
                    <img src="{{ asset('assets/images/art1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title">كيف تخطط لحفل زفاف بأفضل التكاليف</h5>
                        <p class="card-text">يحلم الكثير من الشباب بإقامة فرحٍ جميل لا يُنسى، لكن ليس كثيراً منا يستطيع بسبب السيولة المالية. فالحل الأفضل هو إلقاء نظرة جادة على جميع النفقات المرتبطة بيوم ...</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="card shadow-sm  bg-white rounded h-100" >
                    <img src="{{ asset('assets/images/art2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title">كيف تدفع لحفل زفافك؟</h5>
                        <p class="card-text">من المهم أن تفهم كيف سيتم تقسيم ميزانيتك. التوفير في حفل الزفاف ليس بالمهمة المستعصية. إليك كيفية التوفير والدفع مقابل يوم الفرح عن طريق الإنفاق بذكاء والاقتطاع قليلاً على طول الطريق ...</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="card shadow-sm  bg-white rounded h-100" >
                    <img src="{{ asset('assets/images/art3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title">10 نصائح لشراء منتجات واختيار الخدمات لفرحك</h5>
                        <p class="card-text">إذا كنت ترغب في شراء عفش لمنزلك او إختيار صالة او مسرح لسهرة الشباب، فهناك بعض الأشياء التي يجب مراعاتها قبل الإقدام على عملية الشراء ...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-3">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets/images/temporary-2.png') }}" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title text-center">باقات أفراح صيف 2023</h5>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets/images/permanent-2.png') }}" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title text-center">أحدث العروض</h5>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets/images/individual-offers.png') }}" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title text-center">العروض الفردية</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
