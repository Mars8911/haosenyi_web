<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'username' => '提供的憑證與我們的記錄不符。',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function inquiries()
    {
        // In a real application, this would fetch inquiries from the database
        $inquiries = [
            [
                'id' => 1,
                'name' => '王先生',
                'email' => 'example@example.com',
                'phone' => '0912-345-678',
                'company' => '測試公司',
                'plan' => '7800超值方案',
                'message' => '想要了解網站設計的相關資訊',
                'created_at' => '2024-03-01 10:00:00'
            ],
            // Add more sample inquiries as needed
        ];

        return view('admin.inquiries', compact('inquiries'));
    }
} 