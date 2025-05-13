@extends('layouts.app')

@section('title', 'AI 智能整合方案 - 智慧數位平台')
@section('description', '結合AI與網站技術，打造專屬智慧數位平台，AI客服、行銷自動化、數據分析、API串接一站式服務。')

@push('styles')
<style>
.ai-hero-bg {
    background: linear-gradient(135deg, #a2d2ff 0%, #38bdf8 100%);
    padding: 80px 0 60px 0;
    text-align: center;
}
.ai-feature-icon {
    width: 64px;
    height: 64px;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    background: linear-gradient(135deg, #2563eb 0%, #34d399 100%);
    color: #fff;
    border-radius: 16px;
}
.ai-section {
    padding: 60px 0;
}
.ai-tech-img {
    width: 100%;
    max-width: 420px;
    margin: 0 auto 2rem auto;
    display: block;
}
</style>
@endpush

@section('content')
<!-- Hero 區塊 -->
<section class="ai-hero-bg">
    <div class="container">
        <h1 class="gradient-title-multi display-4 mb-3">AI 智能整合方案</h1>
        <p class="lead mb-4">結合 AI 與網站技術，打造智慧數位平台</p>
        <a href="/contact" class="btn btn-gradient btn-lg me-2">立即諮詢</a>
        <a href="#ai-features" class="btn btn-outline-primary btn-lg">了解更多</a>
    </div>
</section>

<!-- 服務特色 -->
<section class="ai-section bg-light" id="ai-features">
    <div class="container">
        <h2 class="gradient-title-multi text-center mb-5">AI 智慧服務特色</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center">
                <div class="ai-feature-icon mb-3"><i class="fas fa-robot"></i></div>
                <h5 class="fw-bold mb-2">AI 智能客服</h5>
                <p>24/7 智能對話，支援多平台，提升服務效率。</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center">
                <div class="ai-feature-icon mb-3"><i class="fas fa-bullhorn"></i></div>
                <h5 class="fw-bold mb-2">自動化行銷</h5>
                <p>自動推播、精準行銷，提升轉換率與客戶黏著度。</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center">
                <div class="ai-feature-icon mb-3"><i class="fas fa-chart-line"></i></div>
                <h5 class="fw-bold mb-2">數據分析儀表板</h5>
                <p>即時數據視覺化，助您洞察商機與優化決策。</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center">
                <div class="ai-feature-icon mb-3"><i class="fas fa-plug"></i></div>
                <h5 class="fw-bold mb-2">API 串接彈性</h5>
                <p>支援多種 API 串接，彈性整合電商、CRM、ERP 等系統。</p>
            </div>
        </div>
    </div>
</section>

<!-- 技術架構 -->
<section class="ai-section">
    <div class="container">
        <h2 class="gradient-title-multi text-center mb-5">技術架構</h2>
        <div class="row align-items-center">
            <div class="col-lg-6 text-center mb-4 mb-lg-0">
                <img src="https://via.placeholder.com/420x260?text=AI+System+架構圖" alt="AI網站系統技術架構" class="ai-tech-img">
            </div>
            <div class="col-lg-6">
                <ul class="list-unstyled fs-5">
                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Laravel + 前端框架（Bootstrap/Vue/React）</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>AI API 串接（OpenAI、Google、LINE等）</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>RWD 響應式設計</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>高安全性與彈性擴充</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 精選案例 -->
<section class="ai-section bg-light">
    <div class="container">
        <h2 class="gradient-title-multi text-center mb-5">精選成功案例</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/400x260?text=AI+案例1" class="card-img-top" alt="AI案例1">
                    <div class="card-body">
                        <h5 class="card-title">AI 智能客服平台</h5>
                        <p class="card-text">企業專屬AI客服，提升客戶滿意度與效率。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/400x260?text=AI+案例2" class="card-img-top" alt="AI案例2">
                    <div class="card-body">
                        <h5 class="card-title">自動化行銷系統</h5>
                        <p class="card-text">自動推播與數據追蹤，精準行銷提升轉換。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/400x260?text=AI+案例3" class="card-img-top" alt="AI案例3">
                    <div class="card-body">
                        <h5 class="card-title">API 串接整合</h5>
                        <p class="card-text">彈性串接多平台，打造專屬智慧解決方案。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA 行動區 -->
<section class="ai-section text-center" style="background: linear-gradient(90deg, #a2d2ff 0%, #38bdf8 100%);">
    <div class="container">
        <h2 class="gradient-title-multi mb-3">立即聯繫我們，開啟 AI 智慧網站新時代</h2>
        <a href="/contact" class="btn btn-gradient btn-lg">免費諮詢</a>
    </div>
</section>
@endsection 