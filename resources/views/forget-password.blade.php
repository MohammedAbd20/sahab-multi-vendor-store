@extends("form")

@section("content")
    <h3 class="text-center text-secondary  mt-4">إعادة تعيين كلمة المرور</h3>
    <form class="mt-3">
        <div class="form-group mb-5">
            <label class="mb-2 mt-3">رقم الجوال</label>
            <input type="number" class="form-control" placeholder="رقم الجوال">
            <small class="text-secondary fw-bold">أدخل رقم الجوال الخاص بك لإرسال كلمة المرور عبر SMS</small>
        </div>
        <button class="btn btn-primary w-100 p-2">إرسال</button>
    </form>

@endsection
