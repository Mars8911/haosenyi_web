@extends('layouts.app')

@section('title', '好森逸網站設計 - 專業網站設計服務')
@section('description', '好森逸網站設計提供專業的網站設計服務，包括企業網站、電商網站、形象網站等，為您打造最適合的網站')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">打造最具效益的專業網站</h1>
                    <p class="lead mb-4">堅持以超值的價格，為您打造最具效益的專業網站。從初期的網站企劃、功能評估，到結案後的客戶服務，我們都是五星好評！</p>
                    <a href="/contact" class="btn btn-primary btn-lg">立即諮詢</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/banner-pc.png') }}" alt="網站設計示意圖" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="plans-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title py-4 fade-up">方案介紹</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="plan-card card h-100 position-relative fade-up">
                        <div class="plan-img-bg">
                            <img src="{{ asset('images/plan-basic.svg') }}" alt="超值方案示意圖">
                        </div>
                        <span class="plan-number">01</span>
                        <div class="card-body">
                            <h3 class="card-title h5">8800超值方案</h3>
                            <p class="card-text text-primary fw-bold">NT$8,800 起</p>
                            <ul class="list-unstyled">
                                <li>響應式網站設計</li>
                                <li>5個頁面以內</li>
                                <li>基本SEO優化</li>
                                <li>一年免費維護</li>
                            </ul>
                            <a href="/plans" class="btn btn-outline-primary w-100">了解更多</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="plan-card card h-100 position-relative fade-up">
                        <div class="plan-img-bg">
                            <img src="{{ asset('images/plan-custom.svg') }}" alt="形象網站示意圖">
                        </div>
                        <span class="plan-number">02</span>
                        <div class="card-body">
                            <h3 class="card-title h5">半客製形象網站</h3>
                            <p class="card-text text-primary fw-bold">NT$36,800 起</p>
                            <ul class="list-unstyled">
                                <li>客製化設計</li>
                                <li>10個頁面以內</li>
                                <li>進階SEO優化</li>
                                <li>一年免費維護</li>
                            </ul>
                            <a href="/plans" class="btn btn-outline-primary w-100">了解更多</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="plan-card card h-100 position-relative fade-up">
                        <div class="plan-img-bg">
                            <img src="{{ asset('images/plan-ecommerce.svg') }}" alt="購物車方案示意圖">
                        </div>
                        <span class="plan-number">03</span>
                        <div class="card-body">
                            <h3 class="card-title h5">模組購物車方案</h3>
                            <p class="card-text text-primary fw-bold">NT$45,000 起</p>
                            <ul class="list-unstyled">
                                <li>完整購物車功能</li>
                                <li>金流串接</li>
                                <li>訂單管理系統</li>
                                <li>會員管理系統</li>
                            </ul>
                            <a href="/plans" class="btn btn-outline-primary w-100">了解更多</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="plan-card card h-100 position-relative fade-up">
                        <div class="plan-img-bg">
                            <img src="{{ asset('images/plan-enterprise.svg') }}" alt="客製化專案示意圖">
                        </div>
                        <span class="plan-number">04</span>
                        <div class="card-body">
                            <h3 class="card-title h5">客製化網站專案</h3>
                            <p class="card-text text-primary fw-bold">依功能報價</p>
                            <ul class="list-unstyled">
                                <li>完全客製化開發</li>
                                <li>特殊功能開發</li>
                                <li>系統整合</li>
                                <li>長期技術支援</li>
                            </ul>
                            <a href="/plans" class="btn btn-outline-primary w-100">了解更多</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO Service Section -->
    <section class="seo-service-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 fade-right">
                    <div class="seo-content">
                        <div class="section-header">
                            <h2 class="section-title">SEO 關鍵字優化</h2>
                        </div>
                        <p class="lead text-muted mb-5">從網站架構、標題、內文與速度全面優化，提升 Google 搜尋排名</p>
                        <div class="seo-features">
                            <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                                <div class="feature-icon">
                                    <i class="fas fa-tachometer-alt"></i>
                                </div>
                                <div class="feature-content">
                                    <h3 class="gradient-text">技術面優化</h3>
                                    <p>網站速度與結構優化，提升使用者體驗</p>
                                </div>
                            </div>
                            <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                                <div class="feature-icon">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div class="feature-content">
                                    <h3 class="gradient-text">內容策略</h3>
                                    <p>專業的標題與內容撰寫策略</p>
                                </div>
                            </div>
                            <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                                <div class="feature-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="feature-content">
                                    <h3 class="gradient-text">搜尋曝光</h3>
                                    <p>關鍵字佈局與成效追蹤分析</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fade-left">
                    <div class="seo-image-wrapper">
                        <div class="floating-elements">
                            <div class="float-item" style="--delay: 0s">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div class="float-item" style="--delay: 1s">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="float-item" style="--delay: 2s">
                                <i class="fas fa-cog"></i>
                            </div>
                        </div>
                        <img src="{{ asset('images/seo.png') }}" alt="SEO 分析儀表板" class="img-fluid main-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI 銷售客服系統串接 Section -->
    <section class="app-service-section py-5 position-relative overflow-hidden">
        <div class="section-bg-pattern"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 fade-left">
                    <div class="app-showcase position-relative">
                        <div class="app-preview">
                            <div class="phone-frame">
                                <div class="screen">
                                    <div class="app-interface">
                                        <div class="app-header"></div>
                                        <div class="app-content">
                                            <div class="content-block"></div>
                                            <div class="content-block"></div>
                                            <div class="content-block"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="floating-elements">
                            <div class="float-item" style="--delay: 0s">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="float-item" style="--delay: 1s">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <div class="float-item" style="--delay: 2s">
                                <i class="fas fa-plug"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fade-right">
                    <div class="app-content pe-lg-4">
                        <div class="section-header mb-4">
                            <span class="subtitle">AI 串接服務</span>
                            <h2 class="section-title">AI 銷售客服系統串接</h2>
                        </div>
                        <p class="lead mb-5 text-light">整合 LINE、Facebook、官網等多平台，結合 AI 智能客服與銷售自動化，協助企業提升成交率與服務效率，並可彈性串接各式 API 與電商系統。</p>
                        <div class="app-features">
                            <div class="feature-item mb-4 d-flex align-items-start">
                                <div class="feature-icon">
                                    <i class="fas fa-headset fa-2x"></i>
                                </div>
                                <div class="feature-content ms-4">
                                    <h3 class="gradient-text h5 mb-2">多平台即時客服</h3>
                                    <p class="text-light-gray">支援 LINE、FB Messenger、官網等多平台，提供 24/7 智能對話服務。</p>
                                </div>
                            </div>
                            <div class="feature-item mb-4 d-flex align-items-start">
                                <div class="feature-icon">
                                    <i class="fas fa-bullhorn fa-2x"></i>
                                </div>
                                <div class="feature-content ms-4">
                                    <h3 class="gradient-text h5 mb-2">AI 智能銷售推播</h3>
                                    <p class="text-light-gray">自動辨識客戶需求，主動推播商品、優惠與活動，提升轉單率。</p>
                                </div>
                            </div>
                            <div class="feature-item d-flex align-items-start">
                                <div class="feature-icon">
                                    <i class="fas fa-plug fa-2x"></i>
                                </div>
                                <div class="feature-content ms-4">
                                    <h3 class="gradient-text h5 mb-2">API 彈性串接</h3>
                                    <p class="text-light-gray">可與電商、CRM、ERP 等系統 API 串接，打造專屬自動化服務流程。</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <a href="/contact" class="btn btn-gradient btn-lg">立即諮詢</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages Section -->
    <section class="advantages-section py-5">
        <div class="container">
            <h2 class="text-center section-title">我們的優勢</h2>
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="專業團隊" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h3 class="h4 mb-3">專業團隊</h3>
                    <p>我們擁有經驗豐富的設計師和開發團隊，能夠為您打造最適合的網站解決方案。</p>
                    <ul class="list-unstyled">
                        <li>✓ 專業的UI/UX設計</li>
                        <li>✓ 響應式網頁設計</li>
                        <li>✓ SEO優化服務</li>
                        <li>✓ 完善的售後服務</li>
                    </ul>
                </div>
            </div>
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="品質保證" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h3 class="h4 mb-3">品質保證</h3>
                    <p>我們堅持提供高品質的服務，確保每個專案都能達到客戶的期望。</p>
                    <ul class="list-unstyled">
                        <li>✓ 嚴格的品質控管</li>
                        <li>✓ 完整的測試流程</li>
                        <li>✓ 即時的技術支援</li>
                        <li>✓ 定期的系統更新</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">成功案例</h2>
            <div class="row g-4">
                @for($i = 0; $i < 6; $i++)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="案例圖片">
                        <div class="card-body">
                            <h3 class="card-title h5">案例標題</h3>
                            <p class="card-text">產業分類</p>
                            <a href="/portfolio" class="btn btn-outline-primary">查看詳情</a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <div class="text-center mt-4">
                <a href="/portfolio" class="btn btn-primary">查看更多案例</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-5">
        <div class="container text-center">
            <h2 class="section-title">立即開始您的網站專案</h2>
            <p class="lead mb-4">讓我們為您打造最具效益的專業網站</p>
            <a href="/contact" class="btn btn-primary btn-lg">免費諮詢</a>
        </div>
    </section>

    <style>
    .brand-culture-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        position: relative;
        overflow: hidden;
    }

    .culture-image-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 15px;
        position: relative;
    }

    .image-grid-item {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    .image-grid-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .image-grid-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .image-grid-item:hover img {
        transform: scale(1.05);
    }

    .main-image {
        grid-column: 1 / -1;
        height: 300px;
    }

    .culture-content {
        padding: 2rem;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .culture-item {
        padding: 1.5rem;
        background: rgba(255,255,255,0.8);
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .culture-item:hover {
        transform: translateX(10px);
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .section-title {
        position: relative;
        padding-bottom: 1rem;
        margin-bottom: 2rem;
    }

    .section-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, #007bff, #00e5ff);
    }

    /* 針對左對齊的標題特別處理 */
    .seo-content .section-title:after {
        left: 0;
        transform: none;
        width: 100%;
    }

    .section-header .section-title {
        margin: 0;
        font-size: 2.5rem;
        background: linear-gradient(135deg, #30a2ff, #75C2F6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .fade-right {
        opacity: 0;
        transform: translateX(-50px);
        transition: all 0.8s ease-out;
    }

    .fade-left {
        opacity: 0;
        transform: translateX(50px);
        transition: all 0.8s ease-out;
    }

    .fade-right.active,
    .fade-left.active {
        opacity: 1;
        transform: translateX(0);
    }

    @media (max-width: 991px) {
        .culture-content {
            margin-top: 2rem;
        }
    }

    .seo-service-section {
        position: relative;
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        overflow: hidden;
        text-align: center;
    }

    .section-header {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 2rem;
        animation: fadeInDown 1s ease-out;
    }

    .section-title {
        position: relative;
        padding-bottom: 1rem;
        margin-bottom: 2rem;
        display: inline-block;
    }

    .section-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 3px;
        background: linear-gradient(90deg, #30a2ff, #75C2F6);
        animation: lineGrow 1.5s ease-out forwards;
    }

    @keyframes lineGrow {
        from {
            width: 0;
        }
        to {
            width: 100%;
        }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .lead.text-muted {
        animation: fadeIn 1s ease-out 0.5s forwards;
        opacity: 0;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .section-header .section-title {
        margin: 0;
        font-size: 2.5rem;
        background: linear-gradient(135deg, #30a2ff, #75C2F6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .feature-card {
        display: flex;
        align-items: flex-start;
        padding: 1.5rem;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin-bottom: 1.5rem;
        transform: translateY(30px);
        opacity: 0;
        animation: fadeInUp 0.6s ease forwards;
    }

    .feature-card:nth-child(2) {
        animation-delay: 0.2s;
    }

    .feature-card:nth-child(3) {
        animation-delay: 0.4s;
    }

    .feature-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #30a2ff20, #75C2F620);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        transition: all 0.3s ease;
    }

    .feature-icon i {
        font-size: 24px;
        color: #30a2ff;
        transition: all 0.3s ease;
    }

    .feature-card:hover .feature-icon {
        background: linear-gradient(135deg, #30a2ff, #75C2F6);
    }

    .feature-card:hover .feature-icon i {
        color: white;
    }

    .feature-content {
        flex: 1;
    }

    .feature-content h3 {
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
        color: #333;
    }

    .feature-content p {
        color: #666;
        margin: 0;
    }

    .seo-image-wrapper {
        position: relative;
        padding: 2rem;
        width: 100%;
        height: 100%;
    }

    .main-image {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 120%;
        height: auto;
        animation: float 6s ease-in-out infinite;
    }

    .floating-elements {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
    }

    .float-item {
        position: absolute;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        animation: floatIcon 4s ease-in-out infinite;
    }

    .float-item:nth-child(1) {
        top: 15%;
        left: 10%;
        background: linear-gradient(135deg, #30a2ff, #75C2F6);
        animation-delay: 0s;
    }

    .float-item:nth-child(2) {
        top: 45%;
        right: 15%;
        background: linear-gradient(135deg, #FF6B6B, #FFE66D);
        animation-delay: 1s;
        width: 45px;
        height: 45px;
    }

    .float-item:nth-child(3) {
        bottom: 20%;
        left: 20%;
        background: linear-gradient(135deg, #4ECDC4, #45B7AF);
        animation-delay: 2s;
        width: 50px;
        height: 50px;
    }

    .float-item:nth-child(4) {
        top: 30%;
        right: 25%;
        background: linear-gradient(135deg, #FF8C94, #FF6B6B);
        animation-delay: 1.5s;
        width: 40px;
        height: 40px;
    }

    .float-item:nth-child(5) {
        bottom: 35%;
        left: 15%;
        background: linear-gradient(135deg, #A8E6CF, #4ECDC4);
        animation-delay: 2.5s;
        width: 35px;
        height: 35px;
    }

    .float-item i {
        color: white;
        font-size: 24px;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes floatIcon {
        0%, 100% {
            transform: translate(0, 0) rotate(0deg);
        }
        50% {
            transform: translate(15px, -15px) rotate(10deg);
        }
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-right {
        opacity: 0;
        transform: translateX(30px);
        transition: all 0.8s ease-out;
    }

    .fade-left {
        opacity: 0;
        transform: translateX(-30px);
        transition: all 0.8s ease-out;
    }

    .fade-right.active,
    .fade-left.active {
        opacity: 1;
        transform: translateX(0);
    }

    @media (max-width: 991px) {
        .seo-image-wrapper {
            margin-top: 3rem;
        }
        
        .feature-card {
            margin-bottom: 1rem;
        }
    }

    .plans-section .section-title {
        position: relative;
        padding-bottom: 1rem;
        margin-bottom: 2rem;
        display: inline-block;
        text-align: center;
        animation: fadeInDown 1s ease-out;
    }

    .plans-section .section-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 3px;
        background: linear-gradient(90deg, #30a2ff, #75C2F6);
        animation: lineGrowCenter 1.5s ease-out forwards;
        animation-delay: 0.5s;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes lineGrowCenter {
        from {
            width: 0;
        }
        to {
            width: 100px;
        }
    }

    .plans-section h2.text-center {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .fade-up {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeUp 0.8s ease forwards;
    }

    @keyframes fadeUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .gradient-text {
        background: linear-gradient(135deg, #30a2ff 0%, #75C2F6 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 600;
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
        display: inline-block;
        position: relative;
    }

    .gradient-text::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, #30a2ff 0%, #75C2F6 100%);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.3s ease;
    }

    .feature-card:hover .gradient-text::after {
        transform: scaleX(1);
    }

    .app-service-section {
        background: linear-gradient(135deg, #1a1f25 0%, #2c3e50 100%);
        z-index: 1;
        color: #fff;
    }

    .section-bg-pattern {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px);
        background-size: 20px 20px;
        opacity: 0.2;
        z-index: -1;
    }

    .app-content {
        position: relative;
        z-index: 2;
    }

    .subtitle {
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 1rem;
        display: block;
        color: #75C2F6;
    }

    .section-header .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        background: linear-gradient(135deg, #75C2F6, #30a2ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .text-light-gray {
        color: rgba(255,255,255,0.8);
    }

    .feature-icon {
        width: 60px;
        height: 60px;
        background: rgba(117, 194, 246, 0.1);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .feature-icon i {
        color: #75C2F6;
    }

    .feature-item:hover .feature-icon {
        background: linear-gradient(135deg, #75C2F6, #30a2ff);
    }

    .feature-item:hover .feature-icon i {
        color: white !important;
    }

    .btn-gradient {
        background: linear-gradient(135deg, #75C2F6, #30a2ff);
        border: none;
        color: white;
        position: relative;
        z-index: 1;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .btn-gradient:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(117, 194, 246, 0.3);
    }

    .phone-frame {
        width: 280px;
        height: 560px;
        background: #2c3e50;
        border-radius: 40px;
        padding: 10px;
        margin: 0 auto;
        position: relative;
        box-shadow: 0 25px 50px rgba(0,0,0,0.3);
    }

    .screen {
        background: #fff;
        height: 100%;
        border-radius: 30px;
        overflow: hidden;
    }

    .app-header {
        height: 60px;
        background: linear-gradient(135deg, #75C2F6, #30a2ff);
    }

    .app-content {
        padding: 20px;
    }

    .content-block {
        height: 80px;
        background: #f8f9fa;
        border-radius: 10px;
        margin-bottom: 15px;
        animation: pulse 2s infinite;
    }

    .float-item {
        position: absolute;
        width: 50px;
        height: 50px;
        background: rgba(117, 194, 246, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        animation: float 6s ease-in-out infinite;
        animation-delay: var(--delay);
        backdrop-filter: blur(5px);
    }

    .float-item i {
        font-size: 1.5rem;
        color: #75C2F6;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.7;
        }
    }

    @media (max-width: 991px) {
        .app-showcase {
            margin-top: 3rem;
        }
        .phone-frame {
            transform: scale(0.9);
        }
    }
    </style>

    @push('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, {
            threshold: 0.2
        });

        document.querySelectorAll('.fade-right, .fade-left').forEach((el) => {
            observer.observe(el);
        });
    });
    </script>
    @endpush
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // 監聽滾動事件
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, {
        threshold: 0.1 // 當元素出現 10% 時觸發
    });

    // 監聽所有需要動畫的元素
    document.querySelectorAll('.fade-up').forEach((el) => observer.observe(el));
});
</script>
@endpush 