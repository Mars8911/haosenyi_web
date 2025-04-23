<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $categories = [
            'all' => '全部作品',
            'website' => '形象網站',
            'ecommerce' => '購物網站',
            'system' => '系統開發'
        ];

        $portfolios = [
            [
                'title' => '魷太郎',
                'category' => 'website',
                'image' => 'https://via.placeholder.com/400x300',
                'description' => '企業形象網站設計案例'
            ],
            [
                'title' => '新世界美語補習班',
                'category' => 'website',
                'image' => 'https://via.placeholder.com/400x300',
                'description' => '教育機構網站設計案例'
            ],
            [
                'title' => '益呂蜂蜜有限公司',
                'category' => 'ecommerce',
                'image' => 'https://via.placeholder.com/400x300',
                'description' => '購物網站設計案例'
            ],
            [
                'title' => '祺晉有限公司',
                'category' => 'website',
                'image' => 'https://via.placeholder.com/400x300',
                'description' => '企業形象網站設計案例'
            ],
            [
                'title' => '旭森餐具',
                'category' => 'ecommerce',
                'image' => 'https://via.placeholder.com/400x300',
                'description' => '購物網站設計案例'
            ],
            [
                'title' => '聖祖食品',
                'category' => 'system',
                'image' => 'https://via.placeholder.com/400x300',
                'description' => '系統開發案例'
            ]
        ];

        return view('portfolio', compact('categories', 'portfolios'));
    }
} 