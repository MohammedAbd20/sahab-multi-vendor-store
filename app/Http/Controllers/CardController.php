<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class CardController extends Controller
{
    /**
     * عرض البطاقات الصالحة.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkValidCards()
    {
        // قراءة البيانات من ملف JSON
        $jsonFile = Storage::get('cards.json');  // تأكد من المسار الصحيح للملف
        $cards = json_decode($jsonFile, true);  // تحويل البيانات إلى مصفوفة

        // الحصول على التاريخ الحالي
        $currentDate = Carbon::now();

        // تصفية البطاقات الصالحة
        $validCards = array_filter($cards, function ($card) use ($currentDate) {
            // تحويل تاريخ انتهاء البطاقة إلى كائن Carbon
            $expiryDate = Carbon::createFromFormat('m/Y', $card['Expiry']);

            // تحقق إذا كانت البطاقة صالحة
            return $expiryDate->isAfter($currentDate);
        });

        // إرجاع البطاقات الصالحة كـ JSON
        return response()->json(array_values($validCards)); // array_values لإعادة ترتيب المصفوفة بعد التصفية
    }
}
