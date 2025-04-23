<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $companyInfo = [
            'description' => '新視野網頁設計成立於2005年，是一家專業的網站設計公司。我們擁有豐富的網站設計經驗，致力於為客戶打造最具效益的專業網站。',
            'mission' => '我們的使命是幫助企業在數位時代中脫穎而出，透過專業的網站設計和開發服務，為客戶創造最大的商業價值。',
            'vision' => '成為台灣最值得信賴的網站設計公司，為客戶提供最優質的數位解決方案。'
        ];

        $team = [
            [
                'name' => '王大明',
                'position' => '創辦人 / 設計總監',
                'image' => 'https://via.placeholder.com/200x200',
                'description' => '擁有15年以上的網站設計經驗，專注於UI/UX設計和品牌形象塑造。'
            ],
            [
                'name' => '李小華',
                'position' => '技術總監',
                'image' => 'https://via.placeholder.com/200x200',
                'description' => '資深後端開發工程師，擅長系統架構設計和效能優化。'
            ],
            [
                'name' => '張小美',
                'position' => '專案經理',
                'image' => 'https://via.placeholder.com/200x200',
                'description' => '負責專案管理和客戶溝通，確保每個專案都能準時完成。'
            ]
        ];

        $values = [
            [
                'title' => '專業',
                'description' => '我們擁有專業的設計和開發團隊，能夠為客戶提供最優質的服務。'
            ],
            [
                'title' => '創新',
                'description' => '我們不斷追求創新，為客戶提供最新的技術和設計趨勢。'
            ],
            [
                'title' => '誠信',
                'description' => '我們堅持誠信經營，與客戶建立長期穩定的合作關係。'
            ],
            [
                'title' => '服務',
                'description' => '我們提供完善的售後服務，確保客戶的網站能夠持續運作。'
            ]
        ];

        return view('about', compact('companyInfo', 'team', 'values'));
    }
} 