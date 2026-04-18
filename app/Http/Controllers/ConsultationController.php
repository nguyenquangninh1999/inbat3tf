<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

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

        return response()->json(['success' => true]);
    }
}
