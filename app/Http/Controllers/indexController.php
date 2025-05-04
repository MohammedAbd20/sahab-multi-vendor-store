<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{


    public function indexPage()
    {
        $data['titlePage'] = "أكورد | الصفحة الرئيسية ";
        return view("main", $data);
    }
    public function productPage($id)
    {
        $data['id'] = $id;
        $data['titlePage'] = "أكورد | صفحة المنتج";
        $data['title'] = "صالة اللوتس";
        $data['price'] = 85431;
        $data['description'] = "صالة اللوتس لمناسبات السعيدة والأفراح, التفاصيل الجميلة هي من تصنع زفاف جميل و نحن في صالة اللوتس نعمل على التفاصيل المميزة.";
        $data['attriputes'] = array(
            "عدد الطاولات" => "600",
            "تلبيسة كراسي " => "68",
            "عدد الكراسي" => "250",
            "كوشة" => "متوفر",
            "التكييف" => "متوفر",
            "الدي جي" => "500",
            "تصوير" => "متوفر",
        );
        $data["images"] = array(
            "https://accordpal.com/storage/app/public/6960/conversions/83098745_865228797320320_8855934933935370518_o-thumb.jpg",
            "https://accordpal.com/storage/app/public/6961/conversions/103364009_862002234309643_172805686690455365_n-thumb.jpg",
            "https://accordpal.com/storage/app/public/6964/conversions/83214328_867384960438037_3523235617817709794_o-thumb.jpg",
            "https://accordpal.com/storage/app/public/6962/conversions/103932222_863318307511369_2793418672668521106_o-thumb.jpg",
            "https://accordpal.com/storage/app/public/6963/conversions/104138273_862205307622669_8960502242122752434_o-thumb.jpg",
            "https://accordpal.com/storage/app/public/6965/conversions/104269794_866414053868461_7440000555912196829_o-thumb.jpg",
            "https://accordpal.com/storage/app/public/6966/conversions/104483426_868884763621390_9186871306076698141_o-thumb.jpg",
        );
        $data['other_items'] = array(
            array(
                "img" => "https://accordpal.com/storage/app/public/1693/conversions/20374538_1579379165415950_2704049980498863032_n-thumb.jpg",
                "title" => "قاعة أفراح",
                "nameTitle" => "قاعة روتانا",
                "description" => "( فندق سيتي ستار )",
                "avilable" => "من شهر 1 إلى شهر 12، غزة، مكيَف، 400 كرسي، 30 طاولة",
                "price" => "250",
                "discount" => "45"
            ),
            array(
                "img" => "https://accordpal.com/storage/app/public/1679/conversions/56795557_2346418828711976_2528603154468044800_n-thumb.jpg",
                "title" => "قاعة أفراح",
                "nameTitle" => "قاعة هيهات",
                "description" => "( فندق سيتي ستار )",
                "avilable" => "من شهر 1 إلى شهر 12، غزة، مكيَف، 400 كرسي، 30 طاولة",
                "price" => "250",
                "discount" => "25"
            ),
            array(
                "img" => "https://accordpal.com/storage/app/public/1693/conversions/20374538_1579379165415950_2704049980498863032_n-thumb.jpg",
                "title" => "قاعة أفراح",
                "nameTitle" => "قاعة قصر السلطان",
                "description" => "( صالة قصر السلطان )",
                "avilable" => "من شهر 1 إلى شهر 12، غزة، مكيَف، 400 كرسي، 30 طاولة",
                "price" => "250",
                "discount" => ""
            ),
            array(
                "img" => "https://accordpal.com/storage/app/public/1679/conversions/56795557_2346418828711976_2528603154468044800_n-thumb.jpg",
                "title" => "قاعة أفراح",
                "nameTitle" => "قاعة قصر السلطان",
                "description" => "( صالة قصر السلطان )",
                "avilable" => "من شهر 12 إلى شهر 2، المغازي، مكيَف، 500 كرسي، 20 طاولة",
                "price" => "250",
                "discount" => ""
            ),
        );
        $data['cards'] = array(
            array(
                'name' => "صالة روتانا",
                'supplier_name' => " ( فندق سيتي ستار ) ",
                'span' => " من الي ",
                'price' => "250",
                'discount' => "45"
            ),
            array(
                'name' => " صالة روتانا",
                'supplier_name' => " ( فندق سيتي ستار ) ",
                'span' => " من الي ",
                'price' => "250",
                'discount' => "45"
            ),
            array(
                'name' => "صالة روتانا",
                'supplier_name' => " ( فندق سيتي ستار ) ",
                'span' => " من الي ",
                'price' => "250",
                'discount' => "45"
            ),
            array(
                'name' => " صالة روتانا",
                'supplier_name' => " ( فندق سيتي ستار ) ",
                'span' => " من الي ",
                'price' => "250",
                'discount' => "45"
            )

        );
        return view("product", $data);
    }
    public function cartPage()
    {
        $data['titlePage'] = "أكورد | سلة المشتريات ";
        return view("cart", $data);
    }
    public function searchPage()
    {
        $data['titlePage'] = "أكورد | صفحة البحث";
        return view("search", $data);
    }
    public function supplierPage($id)
    {
        $data['titlePage'] = "أكورد | والله منا عارف  ";
        return view("supplier", $data);
    }
    public function categoriesPage()
    {
        $data['titlePage'] = "أكورد | التصنيفات ";
        return view("categories", $data);
    }
    public function forgetPassPage()
    {
        $data['titlePage'] = "أكورد | نسيت كلمة المرور ";
        return view("forget-password", $data);
    }
    public function wishlistPage()
    {
        $data['titlePage'] = "أكورد | المفضلة ";
        return view("wishlist", $data);
    }
    public function recycleBinPage()
    {
        $data['titlePage'] = "أكورد | سلة المحذوفات ";
        return view("recycle-bin", $data);
    }
}
