<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerPage()
    {
        $data['titlePage'] = "أكورد | التسجيل ";
        return view("register", $data);
    }
    public function newRegister(Request $request)
    {
        if($request->name == ""){
            return response()->json(["يرجى التحقق من إدخال الاسم بالكامل"],403);
        }
        if($request->email == ""||!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            return response()->json(["يرجى التحقق من إدخال البريد الالكتروني"],403);
        }
        if($request->password == ""){
            return response()->json(["يرجى التحقق من إدخال كلمة المرور"],403);
        }
        if($request->confirm_password == ""){
            return response()->json(["يرجى التحقق من تأكيد كلمة المرور"],403);
        }
        if($request->confirm_password !== $request->password){
            return response()->json(["كلمة المرور غير متطابقة"],403);
        }
        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            return response()->json(["عذرًا، هذا البريد الإلكتروني مسجل مسبقًا"], 403);
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user -> save();
    }


}
