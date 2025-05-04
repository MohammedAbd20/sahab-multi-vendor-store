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
            return response()->json(["دخل الإيميل صح يحبيبي وتقعدش تتهبل"],403);
        }
        User::where('id', Auth::id())->update(['name' => $newName ]);
        User::where('id', Auth::id())->update(['email' => $email ]);

        $successMessage = 'تم التحديث بنجاح';
        return response()->json(['success' => $successMessage]);
    }
}
