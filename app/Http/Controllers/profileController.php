<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
{
    public function profilePage()
    {
        $data['titlePage'] = "أكورد | الصفحة الشخصية ";
        return view("profile", $data);
    }
    public function updateProfile(Request $request) {

        $newName = $request->name;
        $email = $request->email;
        if($email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            return response()->json(["يرجى إدخال بريد إلكتروني صحيح"],403);
        }
        if (trim((string) $newName) === '') {
            return response()->json(["يرجى إدخال الاسم"], 403);
        }
        if (User::where('email', $email)->where('id', '!=', Auth::id())->exists()) {
            return response()->json(["عذرًا، هذا البريد الإلكتروني مستخدم"], 403);
        }
        User::where('id', Auth::id())->update(['name' => $newName, 'email' => $email]);

        $successMessage = 'تم التحديث بنجاح';
        return response()->json(['success' => $successMessage]);
    }
}
