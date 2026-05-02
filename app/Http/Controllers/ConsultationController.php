<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Setting;
use Illuminate\Http\Request;
use Resend;

class ConsultationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'note'  => 'nullable|string',
        ]);

        Consultation::create([
            'name'   => $request->name,
            'phone'  => $request->phone,
            'email'  => $request->email,
            'note'   => $request->note,
            'status' => 1,
        ]);

        // Gửi email qua Resend nếu có send_email trong settings
        $setting = Setting::get();
        if ($setting->send_email) {
            $resend = Resend::client(config('services.resend.api_key'));
            $resend->emails->send([
                'from'    => 'no-reply@inbat3tf.com',
                'to'      => $setting->send_email,
                'subject' => 'Tư vấn báo giá',
                'html'    => view('emails.consultation', [
                    'name'  => $request->name,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'note'  => $request->note,
                ])->render(),
            ]);
        }

        return response()->json(['success' => true]);
    }
}
