@extends("app")

@section("titleBage")
{{ $titlePage }}
@endsection

@section("content")
    {{-- <div class="container pt-3 mt-5">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1 pr-0">
                    <svg viewBox="0 0 68 68" color="#363433" width="64" height="64"><g fill="none"><path fill="#699CD1" d="M59.288 8.712C53.15 2.447 43.574.065 34 0 24.426.065 14.852 2.447 8.712 8.712 2.446 14.852.065 24.426 0 34c.065 9.574 2.447 19.149 8.712 25.288C14.85 65.554 24.426 67.935 34 68c9.574-.065 19.148-2.446 25.288-8.712C65.553 53.148 67.935 43.574 68 34c-.065-9.574-2.447-19.149-8.712-25.288"></path><path fill="#336194" d="M62.44 55.454a23.63 23.63 0 01-3.152 3.834C53.148 65.554 43.574 67.935 34 68c-9.574-.065-19.149-2.446-25.288-8.712a23.774 23.774 0 01-3.393-4.203c6.174-2.059 16.431-3.405 28.039-3.405 12.289 0 23.063 1.509 29.082 3.774z"></path><path fill="#FFC446" d="M46.24 30.6c0 6.76-5.48 12.24-12.24 12.24-6.761 0-12.24-5.48-12.24-12.24S27.239 18.36 34 18.36c6.76 0 12.24 5.48 12.24 12.24z"></path></g></svg>
                </div>
                <div class="col-md-11">
                    <div class="data">
                        <h2 class="name">{{ \Auth::user()->name }}</h2>
                        <p class="created-at">تم الاشتراك في أكورد بتاريخ {{ \Auth::user()->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="settings">
            <div class="col-md-12 mb-3">
                <div class="row">
                    <div class="col-md-3 pr-0">
                        <h3>الملف الشخصي</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-pen"></i>
                            تعديل
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 pr-0">
                        <div class="name-label">الاسم</div>
                    </div>
                    <div class="col-md-9">
                        <div class="name-value">{{ \Auth::user()->name }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 pr-0">
                        <div class="name-label">البريد الالكتروني</div>
                    </div>
                    <div class="col-md-9">
                        <div class="name-value">{{ \Auth::user()->email }}</div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">تعديل الملف الشخصي</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form id="saveUpdateProfile">
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">الاسم:</label>
                          <input type="text" class="form-control" name="name" id="recipient-name" value="{{ \Auth::user()->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-number" class="col-form-label">بريدك الالكتروني</label>
                            <input type="email" class="form-control" name="email" id="recipient-email" value="{{ \Auth::user()->email }}" >
                          </div>
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">حفظ البيانات</button>
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3 mb-2 ">
                    <a  href="/wishlist">
                        <div class="card-info p-3 bg-light">
                            <svg viewBox="0 0 32 32" fill="none" width="32" height="32"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.878 5.67C26.485 2.482 20.876 3.471 16 8.017 11.125 3.474 5.516 2.485 2.122 5.67c-3.58 3.363-2.553 9.344 2.499 14.542 3.442 3.542 10.584 7.536 10.887 7.705l.492.274.492-.274c.303-.169 7.445-4.163 10.887-7.705 5.052-5.198 6.08-11.179 2.498-14.542z" fill="#B4303B"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M15.995 28.188l.005.003.492-.275c.303-.169 7.445-4.163 10.887-7.705 5.052-5.198 6.08-11.179 2.498-14.542-3.392-3.186-9-2.197-13.877 2.35l-.005-.006v20.175z" fill="#EF404F"></path></svg>
                            <div class="title">
                                المنتجات المفضلة
                            </div>
                            <div class="description">
                                المنتجات التي قمت حفظها
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 mb-2 ">
                    <a  href="/cart">
                        <div class="card-info p-3 bg-light">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <div class="title">
                                سلة المشتريات
                            </div>
                            <div class="description">
                                المنتجات التي قمت بإضافتها لسلة المشتريات
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 mb-2 ">
                    <a  href="/recycle-bin">
                        <div class="card-info p-3 bg-light">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            <div class="title">
                                سلة المحذوفات
                            </div>
                            <div class="description">
                                المنتجات التي قمت بحذفها من سلة المشتريات
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 mb-2 ">
                    <a  href="/change-password">
                        <div class="card-info p-3 bg-light">
                            <svg viewBox="0 0 32 32" fill="none" width="32" height="32"><path fill-rule="evenodd" clip-rule="evenodd" d="M28.444 15.177c-.5.323-.678.638-.678.824 0 .186.179.5.677.823l2.03 1.316-.114.595a14.613 14.613 0 01-2.274 5.486l-.34.5-2.363-.505c-.372-.079-.707-.074-.919.014-.409.169-.308.861-.246 1.152l.505 2.367-.5.34a14.686 14.686 0 01-5.486 2.274l-.595.113-1.317-2.032c-.162-.25-.587-.806-.989-.641-.124.051-.375.203-.66.641l-1.312 2.029-.594-.114a14.59 14.59 0 01-5.49-2.275l-.499-.34.503-2.362c.105-.487.065-.894-.104-1.064-.165-.165-.573-.206-1.06-.102l-2.368.505-.34-.5a14.738 14.738 0 01-2.274-5.486l-.113-.595 2.034-1.317c.5-.323.677-.638.677-.825 0-.235-.26-.55-.678-.821L1.528 13.86l.114-.594a14.619 14.619 0 012.273-5.488l.34-.501 2.365.507c.37.079.705.074.92-.014.405-.169.306-.862.244-1.152l-.505-2.367.498-.34a14.711 14.711 0 015.488-2.273l.594-.114 1.318 2.032c.16.25.582.808.986.641.125-.052.378-.205.662-.641l1.313-2.03.594.115a14.605 14.605 0 015.488 2.273l.5.34-.505 2.364c-.103.487-.063.894.105 1.062.13.132.48.229 1.06.103l2.37-.506.34.5a14.682 14.682 0 012.272 5.487l.113.594-2.03 1.319zm-17.873.822A5.434 5.434 0 0116 10.572 5.435 5.435 0 0121.43 16a5.435 5.435 0 01-5.43 5.43 5.434 5.434 0 01-5.428-5.43z" fill="#696766"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16 20.452a4.452 4.452 0 100-8.904 4.452 4.452 0 000 8.904zm0 3.048a7.5 7.5 0 100-15 7.5 7.5 0 000 15z" fill="#363433"></path></svg>
                            <div class="title">
                                اعدادات الحساب
                            </div>
                            <div class="description">
                                تغيير كلمة المرور الخاصة بحسابك في أكورد
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div id="logout">
            <p class="text-dark fw-bold" style="cursor: pointer">تسجيل الخروج</p>
        </div>
    </div> --}}
    <div class="section-profile text-right pt-4 pb-4">
        <div class="container">
            <div class="information">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1 pr-0">
                            <svg viewBox="0 0 68 68" color="#363433" width="64" height="64"><g fill="none"><path fill="#699CD1" d="M59.288 8.712C53.15 2.447 43.574.065 34 0 24.426.065 14.852 2.447 8.712 8.712 2.446 14.852.065 24.426 0 34c.065 9.574 2.447 19.149 8.712 25.288C14.85 65.554 24.426 67.935 34 68c9.574-.065 19.148-2.446 25.288-8.712C65.553 53.148 67.935 43.574 68 34c-.065-9.574-2.447-19.149-8.712-25.288"></path><path fill="#336194" d="M62.44 55.454a23.63 23.63 0 01-3.152 3.834C53.148 65.554 43.574 67.935 34 68c-9.574-.065-19.149-2.446-25.288-8.712a23.774 23.774 0 01-3.393-4.203c6.174-2.059 16.431-3.405 28.039-3.405 12.289 0 23.063 1.509 29.082 3.774z"></path><path fill="#FFC446" d="M46.24 30.6c0 6.76-5.48 12.24-12.24 12.24-6.761 0-12.24-5.48-12.24-12.24S27.239 18.36 34 18.36c6.76 0 12.24 5.48 12.24 12.24z"></path></g></svg>
                        </div>
                        <div class="col-md-11">
                            <div class="data">
                                <div class="name">
                                    محمد عبدالرحمن
                                    {{-- {{\Auth::user()->name}} --}}

                                </div>
                                <div class="created-at">تم الاشتراك في أكورد بتاريخ

                                 {{-- {{\Auth::user()->created_at}} --}}
                                    18/5/2025
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="settings">
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-md-3 pr-0">
                                <div class="profile-label">الملف الشخصي</div>
                            </div>
                            <div class="col-md-9">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                   تعديل
                                  </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 pr-0">
                                <div class="name-label"> محمد عبدالرحمن{{-- {{\Auth::user()->name}}--}}</div>
                            </div>
                            <div class="col-md-9">
                                <div class="name-value"  > محمد عبدالرحمن{{-- {{\Auth::user()->name}}--}}</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 pr-0">
                                <div class="mobile-label">رقم الجوال</div>
                            </div>
                            <div class="col-md-9">
                                <div class="mobile-value">0592280021</div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <a href="https://accord.ps/wishlist">
                                <div class="card-info">
                                    <svg viewBox="0 0 32 32" fill="none" width="32" height="32"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.878 5.67C26.485 2.482 20.876 3.471 16 8.017 11.125 3.474 5.516 2.485 2.122 5.67c-3.58 3.363-2.553 9.344 2.499 14.542 3.442 3.542 10.584 7.536 10.887 7.705l.492.274.492-.274c.303-.169 7.445-4.163 10.887-7.705 5.052-5.198 6.08-11.179 2.498-14.542z" fill="#B4303B"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M15.995 28.188l.005.003.492-.275c.303-.169 7.445-4.163 10.887-7.705 5.052-5.198 6.08-11.179 2.498-14.542-3.392-3.186-9-2.197-13.877 2.35l-.005-.006v20.175z" fill="#EF404F"></path></svg>
                                    <div class="">
                                        المنتجات المفضلة
                                    </div>
                                    <div class="">
                                        المنتجات التي قمت حفظها
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 mb-2">
                            <a href="https://accord.ps/cart">
                                <div class="card-info">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <div class="">
                                        سلة المشتريات
                                    </div>
                                    <div class="">
                                        المنتجات التي قمت بإضافتها لسلة المشتريات
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 mb-2">
                            <a href="https://accord.ps/recycle-bin">
                                <div class="card-info">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    <div class="">
                                        سلة المحذوفات
                                    </div>
                                    <div class="">
                                        المنتجات التي قمت بحذفها من سلة المشتريات
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="https://accord.ps/change-password">
                                <div class="card-info">
                                    <svg viewBox="0 0 32 32" fill="none" width="32" height="32"><path fill-rule="evenodd" clip-rule="evenodd" d="M28.444 15.177c-.5.323-.678.638-.678.824 0 .186.179.5.677.823l2.03 1.316-.114.595a14.613 14.613 0 01-2.274 5.486l-.34.5-2.363-.505c-.372-.079-.707-.074-.919.014-.409.169-.308.861-.246 1.152l.505 2.367-.5.34a14.686 14.686 0 01-5.486 2.274l-.595.113-1.317-2.032c-.162-.25-.587-.806-.989-.641-.124.051-.375.203-.66.641l-1.312 2.029-.594-.114a14.59 14.59 0 01-5.49-2.275l-.499-.34.503-2.362c.105-.487.065-.894-.104-1.064-.165-.165-.573-.206-1.06-.102l-2.368.505-.34-.5a14.738 14.738 0 01-2.274-5.486l-.113-.595 2.034-1.317c.5-.323.677-.638.677-.825 0-.235-.26-.55-.678-.821L1.528 13.86l.114-.594a14.619 14.619 0 012.273-5.488l.34-.501 2.365.507c.37.079.705.074.92-.014.405-.169.306-.862.244-1.152l-.505-2.367.498-.34a14.711 14.711 0 015.488-2.273l.594-.114 1.318 2.032c.16.25.582.808.986.641.125-.052.378-.205.662-.641l1.313-2.03.594.115a14.605 14.605 0 015.488 2.273l.5.34-.505 2.364c-.103.487-.063.894.105 1.062.13.132.48.229 1.06.103l2.37-.506.34.5a14.682 14.682 0 012.272 5.487l.113.594-2.03 1.319zm-17.873.822A5.434 5.434 0 0116 10.572 5.435 5.435 0 0121.43 16a5.435 5.435 0 01-5.43 5.43 5.434 5.434 0 01-5.428-5.43z" fill="#696766"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16 20.452a4.452 4.452 0 100-8.904 4.452 4.452 0 000 8.904zm0 3.048a7.5 7.5 0 100-15 7.5 7.5 0 000 15z" fill="#363433"></path></svg>
                                    <div class="title">
                                        اعدادات الحساب
                                    </div>
                                    <div class="">
                                        تغيير كلمة المرور الخاصة بحسابك في أكورد
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="logout">

                    <a  href="" >تسجيل الخروج</a>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> تعديل الملف الشخصي</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-right">
                <form>
                    <div class="form-group">
                      <label>الاسم</label>
                      <input type="text" name="name" class="form-control" placeholder="أدخل اسمك بالكامل" value=" {{-- {{\Auth::user()->name}}--}} محمد عبدالرحمن" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>رقم الجوال</label>
                        <input type="number" name="mobile_number" class="form-control" placeholder="أدخل رقم الجوال الخاص بك" value="  " autocomplete="off">
                      </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
              <button type="button" class="btn btn-primary">حفظ</button>
            </div>
          </div>
        </div>
    </div>
@endsection
@section("script")
    <script src="{{ asset('assets/Jquery/update.js') }}"></script>
@endsection
