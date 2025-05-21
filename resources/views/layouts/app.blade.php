<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '好森逸行銷科技')</title>
    <meta name="description" content="@yield('description', '好森逸行銷科技，堅持以超值的價格，打造最具效益的專業網站')">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
    
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">好森逸行銷科技</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link @if(request()->routeIs('home')) active @endif" href="{{ route('home') }}">首頁</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle @if(request()->routeIs('ai-web-solution') || request()->routeIs('plan.basic') || request()->routeIs('plan.custom') || request()->routeIs('plan.ecommerce') || request()->routeIs('plan.advanced')) active @endif" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            AI 網站方案
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item @if(request()->routeIs('plan.basic')) active @endif" href="{{ route('plan.basic') }}">7800超值方案</a></li>
                            <li><a class="dropdown-item @if(request()->routeIs('plan.custom')) active @endif" href="{{ route('plan.custom') }}">半客製形象網站</a></li>
                            <li><a class="dropdown-item @if(request()->routeIs('plan.ecommerce')) active @endif" href="{{ route('plan.ecommerce') }}">模組購物車方案</a></li>
                            <li><a class="dropdown-item @if(request()->routeIs('plan.advanced')) active @endif" href="{{ route('plan.advanced') }}">客製化網站專案</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->routeIs('ai-solution')) active @endif" href="{{ route('ai-solution') }}">AI 智能整合方案</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->routeIs('portfolio')) active @endif" href="{{ route('portfolio') }}">成功案例</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about*') ? 'active' : '' }}" href="/about">關於我們</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('blog*') ? 'active' : '' }}" href="/blog">最新消息</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact*') ? 'active' : '' }}" href="/contact">聯絡我們</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-5 text-white" style="background-color: #003f88;">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <h5 class="fw-bold mb-3">好森逸行銷科技</h5>
                    <p class="mb-3">推動 AI + 科技，打造智慧品牌</p>
                    <div class="social-links">
                        <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="fw-bold mb-3">服務項目</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/ai-web-solution" class="text-white text-decoration-none">網站設計</a></li>
                        <li class="mb-2"><a href="/ai-solution" class="text-white text-decoration-none">AI 整合</a></li>
                        <li class="mb-2"><a href="/app-service" class="text-white text-decoration-none">APP 開發</a></li>
                        <li class="mb-2"><a href="/seo-service" class="text-white text-decoration-none">SEO 優化</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-bold mb-3">聯絡資訊</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-telephone me-2"></i>{{ $contactInfo['phone'] }}</li>
                        <li class="mb-2"><i class="bi bi-envelope me-2"></i>{{ $contactInfo['email'] }}</li>
                        <li class="mb-2"><i class="bi bi-geo-alt me-2"></i>221台灣新北市汐止區新台五路一段97號27 樓</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-bold mb-3">快速連結</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/portfolio" class="text-white text-decoration-none">成功案例</a></li>
                        <li class="mb-2"><a href="/blog" class="text-white text-decoration-none">最新消息</a></li>
                        <li class="mb-2"><a href="/about" class="text-white text-decoration-none">關於我們</a></li>
                        <li class="mb-2"><a href="/contact" class="text-white text-decoration-none">聯絡我們</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 border-light">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; {{ date('Y') }} 好森逸行銷科技. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="/privacy" class="text-white text-decoration-none me-3">隱私權政策</a>
                    <a href="/terms" class="text-white text-decoration-none">服務條款</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- LINE Float Button -->
    <a href="https://line.me/R/ti/p/{{ $contactInfo['line_id'] }}" class="line-float-btn" target="_blank">
        <img src="https://scdn.line-apps.com/n/line_add_friends/btn/zh-Hant.png" alt="加入好友" height="36">
    </a>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')

    <style>
    /* 滑鼠滑過自動展開下拉選單 */
    .navbar-nav .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
    }

    /* 主選單 active 狀態的下方線條變細，覆蓋所有互動狀態 */
    .navbar-nav .nav-link.active,
    .navbar-nav .nav-link.active:focus,
    .navbar-nav .nav-link.active:visited,
    .navbar-nav .nav-link.active:active {
        position: relative;
    }
    .navbar-nav .nav-link.active::after,
    .navbar-nav .nav-link.active:focus::after,
    .navbar-nav .nav-link.active:visited::after,
    .navbar-nav .nav-link.active:active::after {
        content: '';
        display: block;
        width: 100%;
        height: 2px;
        background: #30a2ff;
        position: absolute;
        left: 0;
        bottom: 0;
        border-radius: 1px;
    }

    /* 下拉選單子項目 active 狀態：藍底白字 */
    .dropdown-menu .dropdown-item.active,
    .dropdown-menu .dropdown-item:active {
        background-color: #30a2ff !important;
        color: #fff !important;
    }

    /* 隱藏 Bootstrap dropdown caret */
    .navbar-nav .dropdown-toggle::after {
        display: none !important;
    }
    </style>
</body>
</html> 