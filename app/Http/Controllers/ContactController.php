<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index()
    {
        $contactInfo = [
            'phone' => '04-2260-9770',
            'email' => 'newscan@newscan.tw',
            'address' => '台中市南區忠明南路758號21樓',
            'line_id' => '@newscan'
        ];

        return view('contact', compact('contactInfo'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
            'plan' => 'nullable|string|max:255'
        ]);

        // Send email
        Mail::to('newscan@newscan.tw')->send(new ContactFormMail($validated));

        return redirect()->back()->with('success', '感謝您的留言，我們會盡快與您聯繫！');
    }
} 