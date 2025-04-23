<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans = [
            [
                'name' => '8800超值方案',
                'price' => 'NT$8,800 起',
                'features' => [
                    '響應式網站設計',
                    '5個頁面以內',
                    '基本SEO優化',
                    '一年免費維護',
                    '網站後台管理',
                    'Google Analytics 安裝',
                    '網站備份服務',
                    '技術支援服務'
                ],
                'description' => '最熱銷方案，適合小型企業或個人工作室，快速建立專業形象網站。'
            ],
            [
                'name' => '模組購物車方案',
                'price' => 'NT$45,000 起',
                'features' => [
                    '完整購物車功能',
                    '金流串接',
                    '訂單管理系統',
                    '會員管理系統',
                    '商品管理系統',
                    '優惠券系統',
                    '庫存管理',
                    '報表統計'
                ],
                'description' => '適合想要經營電商的企業，提供完整的購物車功能，讓您輕鬆管理線上商店。'
            ],
            [
                'name' => '半客製形象網站',
                'price' => 'NT$45,000 起',
                'features' => [
                    '客製化設計',
                    '10個頁面以內',
                    '進階SEO優化',
                    '一年免費維護',
                    '網站後台管理',
                    '多語系支援',
                    '表單系統',
                    '圖片管理'
                ],
                'description' => '適合需要客製化設計的中型企業，打造專屬的品牌形象網站。'
            ],
            [
                'name' => '客製化網站專案',
                'price' => '依功能報價',
                'features' => [
                    '完全客製化開發',
                    '特殊功能開發',
                    '系統整合',
                    '長期技術支援',
                    'API串接',
                    '第三方系統整合',
                    '客製化報表',
                    '進階安全機制'
                ],
                'description' => '適合有特殊需求的大型企業，提供完全客製化的網站開發服務。'
            ]
        ];

        return view('plans', compact('plans'));
    }
} 