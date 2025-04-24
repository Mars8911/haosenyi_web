<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '好森逸網站設計')</title>
    <meta name="description" content="@yield('description', '好森逸網站設計，堅持以超值的價格，打造最具效益的專業網站')">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/app.css">
    
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">好森逸網站設計</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">首頁</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('plans*') ? 'active' : '' }}" href="/plans">方案說明</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('portfolio*') ? 'active' : '' }}" href="/portfolio">作品案例</a>
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
    <footer class="bg-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="text-primary">好森逸網站設計</h5>
                    <p>堅持以超值的價格，打造最具效益的專業網站</p>
                </div>
                <div class="col-md-4">
                    <h5 class="text-primary">聯絡資訊</h5>
                    <p>電話：{{ $contactInfo['phone'] }}</p>
                    <p>Email：{{ $contactInfo['email'] }}</p>
                </div>
                <div class="col-md-4">
                    <h5 class="text-primary">快速連結</h5>
                    <ul class="list-unstyled">
                        <li><a href="/plans" class="text-decoration-none">方案說明</a></li>
                        <li><a href="/portfolio" class="text-decoration-none">作品案例</a></li>
                        <li><a href="/blog" class="text-decoration-none">最新消息</a></li>
                    </ul>
                </div>
            </div>
            <p class="mt-3 mb-0">&copy; {{ date('Y') }} 好森逸網站設計. All rights reserved.</p>
        </div>
    </footer>

    <!-- LINE Float Button -->
    <a href="https://line.me/R/ti/p/{{ $contactInfo['line_id'] }}" class="line-float-btn" target="_blank">
        <img src="https://scdn.line-apps.com/n/line_add_friends/btn/zh-Hant.png" alt="加入好友" height="36">
    </a>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html> 