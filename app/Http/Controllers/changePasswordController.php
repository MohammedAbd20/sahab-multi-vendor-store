<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class changePasswordController extends Controller
{
    public function changePassword()
    {
        $data['titlePage'] = "أكورد | تغيير كلمة المرور ";
        return view("change-password", $data);
    }

    public function updatePassword(Request $request) {

        $user = auth()->user();

        if($request->old_password == ""){
            return response()->json(["أدخل كلمة المرور القديمة"],403);
        }
        if($request->new_password == ""){
            return response()->json(["أدخل كلمة المرور الجديدة"],403);
        }
        if($request->confirm_password == ""){
            return response()->json(["يرجى تأكيد كلمة المرور"],403);
        }

        if (Hash::check($request->old_password, $user->password)) {

            $newPassword = $request->new_password;
            User::where('id', Auth::id())->update(['password' => Hash::make($newPassword)]);
            return redirect()->back()->with('success', 'تم تحديث الاسم بنجاح');

        } else {
            return back()->with('error', 'كلمة المرور المدخلة خاطئة');
        }
    }
}
