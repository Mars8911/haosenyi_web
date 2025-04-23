<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'title' => '網站設計趨勢：2024年最新趨勢分析',
                'slug' => 'web-design-trends-2024',
                'excerpt' => '本文將介紹2024年最新的網站設計趨勢，包括AI整合、動態設計、微互動等趨勢。',
                'content' => '網站設計趨勢：2024年最新趨勢分析...',
                'published_at' => '2024-03-01',
                'image' => 'https://via.placeholder.com/800x400'
            ],
            [
                'title' => '如何選擇適合的網站設計公司？',
                'slug' => 'how-to-choose-web-design-company',
                'excerpt' => '選擇網站設計公司時需要注意的幾個重要因素，幫助您找到最適合的合作夥伴。',
                'content' => '如何選擇適合的網站設計公司？...',
                'published_at' => '2024-02-15',
                'image' => 'https://via.placeholder.com/800x400'
            ],
            [
                'title' => '響應式網頁設計的重要性',
                'slug' => 'importance-of-responsive-web-design',
                'excerpt' => '為什麼響應式網頁設計如此重要？本文將深入探討其對SEO和使用者體驗的影響。',
                'content' => '響應式網頁設計的重要性...',
                'published_at' => '2024-02-01',
                'image' => 'https://via.placeholder.com/800x400'
            ],
            [
                'title' => '網站SEO優化指南',
                'slug' => 'website-seo-optimization-guide',
                'excerpt' => '完整的網站SEO優化指南，幫助您的網站在搜尋引擎中獲得更好的排名。',
                'content' => '網站SEO優化指南...',
                'published_at' => '2024-01-15',
                'image' => 'https://via.placeholder.com/800x400'
            ],
            [
                'title' => '電子商務網站設計要點',
                'slug' => 'ecommerce-website-design-tips',
                'excerpt' => '設計電子商務網站時需要注意的關鍵要素，提升轉換率和使用者體驗。',
                'content' => '電子商務網站設計要點...',
                'published_at' => '2024-01-01',
                'image' => 'https://via.placeholder.com/800x400'
            ],
            [
                'title' => '網站安全性最佳實踐',
                'slug' => 'website-security-best-practices',
                'excerpt' => '保護網站安全的重要措施和最佳實踐，確保您的網站免受攻擊。',
                'content' => '網站安全性最佳實踐...',
                'published_at' => '2023-12-15',
                'image' => 'https://via.placeholder.com/800x400'
            ]
        ];

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $posts = [
            'web-design-trends-2024' => [
                'title' => '網站設計趨勢：2024年最新趨勢分析',
                'content' => '網站設計趨勢：2024年最新趨勢分析...',
                'published_at' => '2024-03-01',
                'image' => 'https://via.placeholder.com/800x400'
            ],
            'how-to-choose-web-design-company' => [
                'title' => '如何選擇適合的網站設計公司？',
                'content' => '如何選擇適合的網站設計公司？...',
                'published_at' => '2024-02-15',
                'image' => 'https://via.placeholder.com/800x400'
            ],
            'importance-of-responsive-web-design' => [
                'title' => '響應式網頁設計的重要性',
                'content' => '響應式網頁設計的重要性...',
                'published_at' => '2024-02-01',
                'image' => 'https://via.placeholder.com/800x400'
            ],
            'website-seo-optimization-guide' => [
                'title' => '網站SEO優化指南',
                'content' => '網站SEO優化指南...',
                'published_at' => '2024-01-15',
                'image' => 'https://via.placeholder.com/800x400'
            ],
            'ecommerce-website-design-tips' => [
                'title' => '電子商務網站設計要點',
                'content' => '電子商務網站設計要點...',
                'published_at' => '2024-01-01',
                'image' => 'https://via.placeholder.com/800x400'
            ],
            'website-security-best-practices' => [
                'title' => '網站安全性最佳實踐',
                'content' => '網站安全性最佳實踐...',
                'published_at' => '2023-12-15',
                'image' => 'https://via.placeholder.com/800x400'
            ]
        ];

        if (!isset($posts[$slug])) {
            abort(404);
        }

        $post = $posts[$slug];
        return view('blog.show', compact('post'));
    }
} 