@extends('app')
@section("titleBage")
    {{ $titlePage }}
@endsection
@section("content")

<div class="container pt-3 mt-5">
    <div class="settings w-50">
        <h2 class="title mb-3">
            تغيير كلمة المرور
        </h2>
        <form id="saveUpdatepPassword">
            <div class="form-group mt-3">
                <label class="mb-1">كلمة المرور الحالية</label>
                <input type="password" name="old_password" class="form-control" placeholder="كلمة المرور الحالية" >
            </div>

            <div class="form-group mt-3">
                <label class="mb-1">كلمة المرور الجديدة</label>
                <input type="password" name="new_password" class="form-control" placeholder="كلمة المرور الجديدة" >
            </div>

            <div class="form-group mt-3">
                <label class="mb-1">تأكيد كلمة المرور الجديدة</label>
                <input type="password" name="confirm_password" class="form-control" placeholder="تأكيد كلمة المرور الجديدة" >
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3">حفظ البيانات</button>
        </form>
    </div>
</div>

@endsection
@section("script")
    <script src="{{ asset('assets/Jquery/changePassword.js') }}"></script>
@endsection
