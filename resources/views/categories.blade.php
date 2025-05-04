@extends('app')
@section("titleBage")
    {{ $titlePage }}
@endsection
@section("content")

    <div class="pt-3">
        <div class="container">
            <h3 class="color-black pt-2 ">كل التصنيفات</h3>
            <div class="mb-5 p-3">
                @include("allCategoris")
            </div>
        </div>
    </div>

@endsection
