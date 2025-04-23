@extends('layouts.app')

@section('title', '好森逸網站設計 - 專業網站設計服務')
@section('description', '好森逸網站設計提供專業的網站設計服務，包括企業網站、電商網站、形象網站等，為您打造最適合的網站')

@section('content')
    <!-- Hero Banner -->
    <section class="hero-banner py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">打造最具效益的專業網站</h1>
                    <p class="lead mb-4">堅持以超值的價格，為您打造最具效益的專業網站。從初期的網站企劃、功能評估，到結案後的客戶服務，我們都是五星好評！</p>
                    <a href="/contact" class="btn btn-primary btn-lg">立即諮詢</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="網站設計示意圖" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="plans-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">方案說明</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title h5">8800超值方案</h3>
                            <p class="card-text text-primary fw-bold">NT$8,800 起</p>
                            <ul class="list-unstyled">
                                <li>✓ 響應式網站設計</li>
                                <li>✓ 5個頁面以內</li>
                                <li>✓ 基本SEO優化</li>
                                <li>✓ 一年免費維護</li>
                            </ul>
                            <a href="/plans" class="btn btn-outline-primary w-100">了解更多</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title h5">模組購物車方案</h3>
                            <p class="card-text text-primary fw-bold">NT$45,000 起</p>
                            <ul class="list-unstyled">
                                <li>✓ 完整購物車功能</li>
                                <li>✓ 金流串接</li>
                                <li>✓ 訂單管理系統</li>
                                <li>✓ 會員管理系統</li>
                            </ul>
                            <a href="/plans" class="btn btn-outline-primary w-100">了解更多</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title h5">半客製形象網站</h3>
                            <p class="card-text text-primary fw-bold">NT$45,000 起</p>
                            <ul class="list-unstyled">
                                <li>✓ 客製化設計</li>
                                <li>✓ 10個頁面以內</li>
                                <li>✓ 進階SEO優化</li>
                                <li>✓ 一年免費維護</li>
                            </ul>
                            <a href="/plans" class="btn btn-outline-primary w-100">了解更多</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title h5">客製化網站專案</h3>
                            <p class="card-text text-primary fw-bold">依功能報價</p>
                            <ul class="list-unstyled">
                                <li>✓ 完全客製化開發</li>
                                <li>✓ 特殊功能開發</li>
                                <li>✓ 系統整合</li>
                                <li>✓ 長期技術支援</li>
                            </ul>
                            <a href="/plans" class="btn btn-outline-primary w-100">了解更多</a>
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
@endsection 