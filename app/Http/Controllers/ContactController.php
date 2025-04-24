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
            'phone' => '02-77538598',
            'email' => 'service@haosenyi.com',
            'address' => '221新北市汐止區新台五路一段97號27樓',
            'line_id' => '@gaosenti'
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