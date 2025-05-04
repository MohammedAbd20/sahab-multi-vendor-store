<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage() {
        $data['titlePage'] = "أكورد | تسجيل الدخول ";
        return view('login',$data);
    }
    public function storeLogin(Request $request) {
        if($request->email == "" || !filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            return response()->json(["يرجى التحقق من إدخال البريد الالكتروني"],403);
        }
        if($request->password == ""){
            return response()->json(["يرجى التحقق من إدخال كلمة المرور"],403);
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return response()->json(["تم تسجيل الدخول بنجاح"]);
        };
        return response()->json(["يرجى التحقق من البيانات المدخلة"],403);
    }
    public function logout(Request $request) {
        Auth::logout(); // ستقوم هذه الوظيفة بتسجيل المستخدم خارج النظام
        $request->session()->invalidate(); // تمحي جميع بيانات الجلسة
        $request->session()->regenerateToken(); // تعيد توليد توكن الجلسة
        return response()->json("okk");
    }
}
