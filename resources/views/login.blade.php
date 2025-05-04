@extends("form")

@section("content")
    <h4 class="text-center text-secondary  mt-4">تسجيل الدخول</h4>
    <form class="mt-3" id="login">
        <div class="form-group">
            <label class="mb-2 mt-3">البريد الالكتروني</label>
            <input name="email" type="email" class="form-control" placeholder="البريد الالكتروني">
        </div>
        <div class="form-group">
            <label class="mb-2 mt-3">كلمة المرور</label>
            <input name="password" type="password" class="form-control" placeholder="كلمة المرور">
        </div>
        <div class="mt-2 text-right pb-5">
            <a href="/forget-password" class="text-decoration-none small text-dark"> نسيت كلمة المرور </a>
        </div>
        <button type="submit" class="btn btn-primary w-100">تسجيل الدخول</button>
        <div class="mt-2 text-center">
            <a href="/register" class="text-decoration-none text-dark">ليس لديك حساب؟</a>
        </div>
    </form>
@endsection
@section("script")
    <script src="{{ asset('assets/Jquery/login.js') }}"></script>
@endsection
