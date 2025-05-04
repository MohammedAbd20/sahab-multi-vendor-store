@extends("form")

@section("content")
    <h3 class="text-center text-secondary  mt-4">التسجيل</h3>
    {{-- <form class="mt-3 d-none">
        <div class="form-group mb-5">
            <label class="mb-2 mt-3">رقم الجوال</label>
            <input type="number" class="form-control" placeholder="رقم الجوال">
            <small class="text-secondary fw-bold">سيتم ارسال رمز لرقم الجوال الخاص بك</small>
        </div>
    </form> --}}
    <form class="mt-3" id="register">
        <div class="form-group">
            <label class="mb-2 mt-3">الاسم</label>
            <input name="name" type="text" class="form-control" placeholder="الاسم">
        </div>
        <div class="form-group">
            <label class="mb-2 mt-3">البريد الالكتروني</label>
            <input name="email" type="email" class="form-control" placeholder="البريد الالكتروني">
        </div>
        <div class="form-group">
            <label class="mb-2 mt-3">كلمة المرور</label>
            <input name="password" type="password" class="form-control" placeholder="كلمة المرور">
        </div>
        <div class="form-group">
            <label class="mb-2 mt-3">تأكيد كلمة المرور</label>
            <input name="confirm_password" type="password" class="form-control" placeholder="تأكيد المرور">
        </div>
        <button type="submit" class="btn btn-primary w-100 mt-4">تسجيل</button>
        <div class="mt-2 text-center">
            <a href="/login" class="text-decoration-none text-dark">هل لديك حساب؟</a>
        </div>
    </form>
@endsection
@section("script")
    <script src="{{ asset('assets/Jquery/register.js') }}"></script>
@endsection
