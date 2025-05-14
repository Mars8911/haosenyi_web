@extends('layouts.app')

@section('title', '好森逸行銷科技 - 專業網站設計服務')
@section('description', '好森逸行銷科技提供專業的網站設計服務，包括企業網站、電商網站、形象網站等，為您打造最適合的網站')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">AI 智能整合方案</h1>
                    <p class="lead mb-4">不只是一個網站，而是一位 24 小時在線的智慧業務！<br>
                    結合 AI 銷售、智能推薦、客服預約、找尋客戶、數據分析，主動為您吸引客戶、提升成交、降低成本。</p>
                    <a href="/contact" class="btn btn-primary btn-lg">立即免費諮詢</a>
                </div>
                <div class="col-lg-6 position-relative">
                    <img src="{{ asset('images/mac.png') }}" alt="網站設計示意圖" class="img-fluid">
                    <div class="mac-dialog-area-on-img">
                        <div class="chat-bubble ai-message">AI客服 : 歡迎來來到 好森逸 購物網站</div>
                        <div class="chat-bubble user-message">客戶 : 請問你們有 OOO 商品跟服務嗎 ?</div>
                        <div class="chat-bubble ai-message">AI客服 : 有的 讓我幫您找尋適合您的商品與量身打造您的需求 !</div>
                        <div class="chat-bubble user-message">太好了 省下我大量時間 !</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!--AI 網站設計方案-->
    <section class="plans-section position-relative overflow-hidden" style="background: #fff; padding-top: 5.8rem; padding-bottom: 5.8rem;">
        <!-- 背景動態效果 -->
        <div class="position-absolute w-100 h-100" style="top:0;left:0;background-image: url('data:image/svg+xml,%3Csvg width="20" height="20" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M0 0h20v20H0z" fill="%2330a2ff" fill-opacity="0.05"/%3E%3C/svg%3E');"></div>
        
        <!-- 左側裝飾圖形 -->
        <div class="position-absolute floating-shape" style="left:-5%;top:10%;width:300px;height:300px;background:linear-gradient(45deg, rgba(48,162,255,0.1), rgba(48,162,255,0.05));border-radius:50%;"></div>
        
        <!-- 右側裝飾圖形 -->
        <div class="position-absolute floating-shape" style="right:-5%;bottom:10%;width:400px;height:400px;background:linear-gradient(-45deg, rgba(48,162,255,0.1), rgba(48,162,255,0.05));border-radius:50%;"></div>

        <div class="container position-relative" style="z-index:1;">
            <h2 class="text-center section-title py-4 fade-up">AI 網站方案</h2>
            <p class="text-center mb-5 text-muted" style="font-size:1.15rem;color:#1e96fc;font-weight:500;line-height:1.7;">
                不只是架站，更是幫你找客戶、回留言、提升成交率的 AI 智能網站服務<br>
                依需求選擇最適合您的方案，快速上線、效果看得見！
            </p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="plan-card card h-100 position-relative fade-up" style="background: rgba(255, 255, 255, 0.98); backdrop-filter: blur(15px); border: none; box-shadow: 0 15px 35px rgba(0,0,0,0.15); transform: translateY(0); transition: all 0.3s ease;">
                        <div class="plan-img-bg">
                            <img src="{{ asset('images/improvement.png') }}" alt="超值方案示意圖">
                        </div>
                        <span class="plan-number">01</span>
                        <div class="card-body">
                            <h3 class="card-title h5">7800超值方案</h3>
                            <p class="card-text text-primary fw-bold">NT$7,800 起</p>
                            <ul class="list-unstyled">
                                <li>響應式網站設計</li>
                                <li>5個頁面以內</li>
                                <li>基本SEO優化</li>
                                <li>一年免費維護</li>
                            </ul>
                            <a href="/ai-web-solution" class="btn btn-outline-primary w-100">了解更多</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="plan-card card h-100 position-relative fade-up" style="background: rgba(255, 255, 255, 0.98); backdrop-filter: blur(15px); border: none; box-shadow: 0 15px 35px rgba(0,0,0,0.15); transform: translateY(0); transition: all 0.3s ease;">
                        <div class="plan-img-bg">
                            <img src="{{ asset('images/web-designing.png') }}" alt="形象網站示意圖">
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
                            <a href="/ai-web-solution" class="btn btn-outline-primary w-100">了解更多</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="plan-card card h-100 position-relative fade-up" style="background: rgba(255, 255, 255, 0.98); backdrop-filter: blur(15px); border: none; box-shadow: 0 15px 35px rgba(0,0,0,0.15); transform: translateY(0); transition: all 0.3s ease;">
                        <div class="plan-img-bg">
                            <img src="{{ asset('images/ecommerce.png') }}" alt="購物車方案示意圖">
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
                            <a href="/ai-web-solution" class="btn btn-outline-primary w-100">了解更多</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="plan-card card h-100 position-relative fade-up" style="background: rgba(255, 255, 255, 0.98); backdrop-filter: blur(15px); border: none; box-shadow: 0 15px 35px rgba(0,0,0,0.15); transform: translateY(0); transition: all 0.3s ease;">
                        <div class="plan-img-bg">
                            <img src="{{ asset('images/launch.png') }}" alt="客製化專案示意圖">
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
                            <a href="/ai-web-solution" class="btn btn-outline-primary w-100">了解更多</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 下方波浪效果 -->
        <div style="position:absolute;left:0;right:0;bottom:-41px;z-index:2;line-height:0;">
            <svg viewBox="0 0 1920 80" width="100%" height="80" preserveAspectRatio="none" style="display:block;">
                <path d="M0,40 Q480,80 960,40 T1920,40 V80H0Z" fill="#2563eb" fill-opacity="1"/>
            </svg>
        </div>
    </section>

    <!-- AI  銷售智能整合方案 Section -->
    <section class="app-service-section py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #00509d 0%, #2563eb 50%, #38bdf8 100%);">
        <div class="section-bg-pattern" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px); background-size: 20px 20px; opacity: 0.6; z-index: 0;"></div>
        <div class="container position-relative" style="z-index: 1;">
            <div class="row align-items-center">
                <div class="col-lg-6 fade-left">
                    <div class="app-showcase position-relative">
                        <div class="app-preview">
                            <div class="phone-frame">
                                <div class="screen">
                                    <div class="app-interface">
                                        <div class="app-header"></div>
                                        <div class="app-content">
                                            <div class="mac-dialog-area">
                                                <div class="chat-bubble ai-message">AI銷售客服 : 歡迎您來到 好森逸 !</div>
                                                <div class="chat-bubble user-message">客戶 : 請問您有OOO商品嗎 ?</div>
                                                <div class="chat-bubble ai-message">AI銷售客服 : 有的 為您量身打造我們的商品、並推薦我們的新產品給您，請告訴我您的 需求 我們立刻為您推薦。</div>
                                                <div class="chat-bubble user-message">太好了 !</div>
                                            </div>
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
                            <span class="subtitle text-white">AI Sales Intelligence Integration</span>
                            <h2 class="text-white" style="color: #fefae0 !important; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); font-size: 2.5rem;">AI 銷售智能整合方案</h2>
                        </div>
                        <p class="lead mb-5 text-white">整合 LINE、Facebook、官網等多平台，結合 AI 智能客服與銷售自動化，協助企業提升成交率與服務效率，並可彈性串接各式 API 與電商系統。</p>
                        <div class="app-features">
                            <div class="feature-item mb-4 d-flex align-items-start">
                                <div class="feature-icon">
                                    <i class="fas fa-headset fa-2x"></i>
                                </div>
                                <div class="feature-content ms-4">
                                    <h3 class="gradient-text h5 mb-2" style="color: #fefae0 !important; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">多平台即時客服</h3>
                                    <p class="text-white">支援 LINE、FB Messenger、官網等多平台，提供 24/7 智能對話服務。</p>
                                </div>
                            </div>
                            <div class="feature-item mb-4 d-flex align-items-start">
                                <div class="feature-icon">
                                    <i class="fas fa-bullhorn fa-2x"></i>
                                </div>
                                <div class="feature-content ms-4">
                                    <h3 class="gradient-text h5 mb-2" style="color: #fefae0 !important; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">AI 智能銷售推播</h3>
                                    <p class="text-white">自動辨識客戶需求，主動推播商品、優惠與活動，提升轉單率。</p>
                                </div>
                            </div>
                            <div class="feature-item d-flex align-items-start">
                                <div class="feature-icon">
                                    <i class="fas fa-plug fa-2x"></i>
                                </div>
                                <div class="feature-content ms-4">
                                    <h3 class="gradient-text h5 mb-2" style="color: #fefae0 !important; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">API 彈性串接</h3>
                                    <p class="text-white">可與電商、CRM、ERP 等系統 API 串接，打造專屬自動化服務流程。</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <a href="/ai-solution" class="btn btn-gradient btn-lg btn-shake" style="background: linear-gradient(90deg, #30a2ff 0%, #75C2F6 100%); color: white !important; border: none; position: relative; overflow: hidden; transition: all 0.3s ease; background-size: 200% 100%;" onmouseover="this.style.backgroundPosition='100% 0'" onmouseout="this.style.backgroundPosition='0 0'">立即了解方案</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO 關鍵字優化 Section -->
    <section class="seo-service-section py-5" style="background: linear-gradient(135deg, #e6f4ff 0%, #f0f8ff 100%); position: relative; overflow: hidden;">
        <div class="seo-bg-pattern" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(rgba(48, 162, 255, 0.08) 1px, transparent 1px); background-size: 20px 20px; opacity: 0.6; z-index: 0;"></div>
        <div class="container position-relative" style="z-index: 1;">
            <div class="row align-items-center">
                <div class="col-lg-6 fade-right">
                    <div class="seo-content">
                        <div class="section-header">
                            <h2 class="seo-title">SEO 關鍵字優化</h2>
                            <div class="title-underline"></div>
                        </div>
                        <p class="lead text-muted mb-5">從網站架構、標題、內文與速度全面優化，提升 Google 搜尋排名</p>
                        <div class="seo-features">
                            <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                                <div class="feature-icon seo-feature-icon">
                                    <i class="fas fa-tachometer-alt"></i>
                                </div>
                                <div class="feature-content">
                                    <h3 class="gradient-text">技術面優化</h3>
                                    <p>網站速度與結構優化，提升使用者體驗</p>
                                </div>
                            </div>
                            <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                                <div class="feature-icon seo-feature-icon">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div class="feature-content">
                                    <h3 class="gradient-text">內容策略</h3>
                                    <p>專業的標題與內容撰寫策略</p>
                                </div>
                            </div>
                            <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                                <div class="feature-icon seo-feature-icon">
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

    <!-- 我們的服務 Section -->
    <section class="feature-service-section py-5 position-relative" style="background: linear-gradient(135deg, #f0f7ff 0%, #e6f0ff 50%, #d9e9ff 100%);">
        <div class="service-bg-pattern" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: linear-gradient(45deg, rgba(48, 162, 255, 0.05) 25%, transparent 25%, transparent 50%, rgba(48, 162, 255, 0.05) 50%, rgba(48, 162, 255, 0.05) 75%, transparent 75%, transparent); background-size: 30px 30px; opacity: 0.4; z-index: 0;"></div>
        <div class="container position-relative" style="z-index: 1;">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center fade-up delay-8">
                    <span class="feature-section-subtitle d-block">OUR SERVICE</span>
                    <h2 class="feature-section-title mb-3 fade-up ">我們的服務</h2>
                    <p class="feature-section-desc">專業團隊為您提供一站式數位解決方案，從網站設計、SEO、AI 銷售到數位行銷，協助品牌數位轉型與成長。</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card-modern h-100 text-center p-4" style="animation-delay: 0s;">
                        <div class="feature-img-modern mb-3">
                            <img src="{{ asset('images/webservice.png') }}" alt="網站設計與開發" class="img-fluid" style="width:64px;height:64px;object-fit:contain;">
                        </div>
                        <h4 class="feature-title-modern gradient-title">網站設計與開發</h4>
                        <p class="feature-desc-modern">我們專注於為企業打造專業且具吸引力的網站，從企業形象網站到電子商務平台，皆可量身訂做，確保您的網站在各種裝置上都能完美呈現。</p>
                    </div>
                </div>  
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card-modern h-100 text-center p-4" style="animation-delay: 0.15s;">
                        <div class="feature-img-modern mb-3">
                            <img src="{{ asset('images/seoservice.png') }}" alt="搜尋引擎優化" class="img-fluid" style="width:64px;height:64px;object-fit:contain;">
                        </div>
                        <h4 class="feature-title-modern gradient-title">搜尋引擎優化（SEO）</h4>
                        <p class="feature-desc-modern">透過關鍵字策略、網站結構優化與內容行銷，提升您的網站在搜尋引擎中的排名，增加曝光度，吸引更多潛在客戶。</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card-modern h-100 text-center p-4" style="animation-delay: 0.3s;">
                        <div class="feature-img-modern mb-3">
                            <img src="{{ asset('images/aiservice.png') }}" alt="AI 銷售解決方案" class="img-fluid" style="width:64px;height:64px;object-fit:contain;">
                        </div>
                        <h4 class="feature-title-modern gradient-title">AI 銷售解決方案</h4>
                        <p class="feature-desc-modern">結合人工智慧技術，提供智能化的銷售工具，如聊天機器人、自動化行銷流程等，協助您提升銷售效率與客戶滿意度。</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card-modern h-100 text-center p-4" style="animation-delay: 0.45s;">
                        <div class="feature-img-modern mb-3">
                            <img src="{{ asset('images/codedev.png') }}" alt="客製化後台系統開發" class="img-fluid" style="width:64px;height:64px;object-fit:contain;">
                        </div>
                        <h4 class="feature-title-modern gradient-title">客製化後台系統開發</h4>
                        <p class="feature-desc-modern">根據您的業務需求，開發專屬的後台管理系統，讓您輕鬆管理網站內容、訂單、客戶資料等，提高營運效率。</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card-modern h-100 text-center p-4" style="animation-delay: 0.6s;">
                        <div class="feature-img-modern mb-3">
                            <img src="{{ asset('images/maintenance.png') }}" alt="網站維護與技術支援" class="img-fluid" style="width:64px;height:64px;object-fit:contain;">
                        </div>
                        <h4 class="feature-title-modern gradient-title">網站維護與技術支援</h4>
                        <p class="feature-desc-modern">提供網站日常維護、功能更新與技術支援服務，確保您的網站穩定運行，並隨時應對各種技術挑戰。</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card-modern h-100 text-center p-4" style="animation-delay: 0.75s;">
                        <div class="feature-img-modern mb-3">
                            <img src="{{ asset('images/shopping.png') }}" alt="電子商務平台建置與整合" class="img-fluid" style="width:64px;height:64px;object-fit:contain;">
                        </div>
                        <h4 class="feature-title-modern gradient-title">電子商務平台建置與整合</h4>
                        <p class="feature-desc-modern">為您打造完整的電子商務解決方案，從購物車、金流、物流到庫存管理系統，提供一站式服務，協助您快速建立並管理線上商店。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 成功案例 -->
    <section class="portfolio-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">成功案例</h2>
            <div class="row g-4">
                @for($i = 0; $i < 6; $i++)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 fade-up portfolio-card">
                        <img src="{{ asset('images/webdemo.jpg') }}" class="card-img-top" alt="案例圖片">
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

    <!-- 立即開始表單 -->
    <section class="cta-section py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #014f86 0%, #2c7da0 100%);">
        <!-- 背景圖片層 -->
        <div class="cta-bg-img"></div>
        <!-- AI 客服 icon 浮動動畫背景 -->
        <div class="cta-ai-icons-bg">
            <div class="cta-ai-icon ai1"><i class="fas fa-robot"></i></div>
            <div class="cta-ai-icon ai2"><i class="fas fa-comments"></i></div>
            <div class="cta-ai-icon ai3"><i class="fas fa-headset"></i></div>
            <div class="cta-ai-icon ai4"><i class="fas fa-brain"></i></div>
            <div class="cta-ai-icon ai5"><i class="fas fa-bolt"></i></div>
            <div class="cta-ai-icon ai6"><i class="fas fa-cloud"></i></div>
            <div class="cta-ai-icon ai10"><i class="fas fa-laptop-code"></i></div>
            <div class="cta-ai-icon ai12"><i class="fas fa-layer-group"></i></div>
            <div class="cta-ai-icon ai13"><i class="fas fa-mouse-pointer"></i></div>
        </div>
        <div class="container position-relative" style="z-index:2;">
            <div class="cta-form-wrapper animate-fadeup">
                <div class="cta-form-title">立即開始您的網站專案</div>
                <form action="/contact" method="POST" class="cta-form mt-3">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label">姓名 <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-12">
                            <label for="phone" class="form-label">電話 <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-12">
                            <label for="demand" class="form-label">需求 <span class="text-danger">*</span></label>
                            <select class="form-select" id="demand" name="demand" required>
                                <option value="">請選擇需求</option>
                                <option value="8800超值方案">8800超值方案</option>
                                <option value="半客製形象網站">半客製形象網站</option>
                                <option value="模組購物車方案">模組購物車方案</option>
                                <option value="客製化網站專案">客製化網站專案</option>
                                <option value="AI銷售客服系統">AI銷售客服系統</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">留言</label>
                            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-send"><i class="fas fa-paper-plane"></i>送出表單</button>
                    </div>
                </form>
            </div>
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

    .section-title,
    .gradient-title,
    .gradient-title-multi,
    h2,
    h3 {
        color: #1e96fc !important;
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
        /* left: 0; */
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


  

    .app-service-section {
        background: linear-gradient(135deg, #00509d 0%, #2563eb 50%, #38bdf8 100%);
        z-index: 1;
        color: #333;
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
        color: #333;
    }


    .text-light-gray {
        color: rgba(51, 51, 51, 0.8);
    }

    .feature-icon {
        width: 60px;
        height: 60px;
        background: #fdf0d5;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .feature-icon i {
        color: #495057;
    }

    .feature-item:hover .feature-icon {
        background: linear-gradient(135deg, #a2d2ff, #bde0fe);
    }

    .feature-item:hover .feature-icon i {
        color: white !important;
    }

    .btn-gradient {
        background: linear-gradient(135deg, #a2d2ff, #bde0fe);
        border: none;
        color: #333;
        position: relative;
        z-index: 1;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .btn-gradient:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(162, 210, 255, 0.3);
        color: #333;
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
        color:rgb(255, 255, 255);
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

    /* 浮動動畫效果 */
    .floating-shape {
        animation: float 10s ease-in-out infinite;
    }

    .floating-shape:nth-child(2) {
        animation-delay: -5s;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0) scale(1);
        }
        50% {
            transform: translateY(-30px) scale(1.05);
        }
    }

    /* 優化卡片樣式 */
    .plan-card {
        background: rgba(255, 255, 255, 0.95) !important;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(48, 162, 255, 0.1) !important;
        transition: all 0.4s ease;
    }

    .plan-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(48, 162, 255, 0.15);
    }

    /* 優化背景漸層動畫 */
    .plans-section {
        background: linear-gradient(135deg, #e6f4ff 0%, #b3e0ff 50%, #80c1ff 100%);
        background-size: 200% 200%;
        animation: gradientBG 20s ease infinite;
    }

    @keyframes gradientBG {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }


    .portfolio-card {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.7s cubic-bezier(0.23, 1, 0.32, 1);
    }
    .portfolio-card.active {
        opacity: 1;
        transform: translateY(0);
    }
    .portfolio-card:hover {
        box-shadow: 0 12px 32px rgba(48,162,255,0.18), 0 2px 8px rgba(0,0,0,0.08);
        transform: translateY(-8px) scale(1.03);
        transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
        z-index: 2;
    }

    .gradient-title-multi {
        -webkit-text-fill-color: transparent !important;
        background-clip: text !important;
        color: while;
        font-weight: 700 !important;
        display: inline-block !important;
    }

    .cta-form-wrapper {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 8px 32px rgba(48,162,255,0.10);
        padding: 40px 32px 32px 32px;
        max-width: 520px;
        margin: 0 auto;
        position: relative;
    }
    .cta-form-title {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        text-align: left;
        position: relative;
        display: inline-block;
    }
    .cta-form-title:after {
        content: '';
        display: block;
        width: 48px;
        height: 4px;
        background: linear-gradient(90deg, #30a2ff 0%, #75C2F6 100%);
        border-radius: 2px;
        margin-top: 8px;
    }
    .cta-form .form-control, .cta-form .form-select {
        border: 1.5px solid #e0e7ef;
        border-radius: 8px;
        background: #f8fafc;
        font-size: 1.08rem;
        padding: 0.75rem 1rem;
        transition: border-color 0.2s;
    }
    .cta-form .form-control:focus, .cta-form .form-select:focus {
        border-color: #30a2ff;
        background: #fff;
        box-shadow: 0 0 0 2px #30a2ff22;
    }
    .cta-form label {
        font-weight: 500;
        margin-bottom: 0.4rem;
    }
    .cta-form .btn-send {
        background: linear-gradient(90deg, #30a2ff 0%, #75C2F6 100%);
        color: #fff;
        font-weight: 700;
        border: none;
        border-radius: 8px;
        padding: 0.75rem 2.5rem 0.75rem 2rem;
        font-size: 1.15rem;
        position: relative;
        transition: box-shadow 0.2s, background 0.2s;
        box-shadow: 0 4px 16px rgba(48,162,255,0.10);
    }
    .cta-form .btn-send i {
        margin-right: 0.5rem;
        font-size: 1.1em;
    }
    .cta-form .btn-send:hover {
        background: linear-gradient(90deg, #75C2F6 0%, #30a2ff 100%);
        box-shadow: 0 8px 24px rgba(48,162,255,0.18);
    }
    @media (max-width: 600px) {
        .cta-form-wrapper { padding: 24px 8px; }
        .cta-form-title { font-size: 1.3rem; }
    }
    .cta-bg-line {
      position: absolute;
      left: 0; right: 0;
      z-index: 0;
      pointer-events: none;
    }
    .cta-bg-line.line1 {
      bottom: 18%;
      animation: moveLine1 6s cubic-bezier(0.4,0.2,0.6,0.8) infinite alternate;
    }
    .cta-bg-line.line2 {
      bottom: 6%;
      animation: moveLine2 7s cubic-bezier(0.4,0.2,0.6,0.8) infinite alternate;
    }
    @keyframes moveLine1 {
      0% { transform: translateX(0) translateY(0) scaleX(1); opacity: 0.7; }
      50% { transform: translateX(60px) translateY(-12px) scaleX(1.04); opacity: 1; }
      100% { transform: translateX(-60px) translateY(8px) scaleX(0.98); opacity: 0.7; }
    }
    @keyframes moveLine2 {
      0% { transform: translateX(0) translateY(0) scaleX(1); opacity: 0.5; }
      50% { transform: translateX(-80px) translateY(10px) scaleX(1.06); opacity: 0.8; }
      100% { transform: translateX(80px) translateY(-10px) scaleX(0.95); opacity: 0.5; }
    }
    .cta-bg-anim .dot {
        position: absolute;
        border-radius: 50%;
        opacity: 0.7;
        animation: floatDot 4s ease-in-out infinite alternate;
        background: radial-gradient(circle, #fff8 0%, #fff0 80%);
    }
    .cta-bg-anim .dot-lg { width: 48px; height: 48px; }
    .cta-bg-anim .dot-md { width: 32px; height: 32px; }
    .cta-bg-anim .dot-sm { width: 18px; height: 18px; }
    .cta-bg-anim .dot-blue { background: radial-gradient(circle, #30a2ff55 0%, #30a2ff00 80%); opacity: 0.5; }
    @keyframes floatDot {
        0% { transform: translateY(0) scale(1); opacity: 0.7; }
        100% { transform: translateY(-38px) scale(1.18); opacity: 1; }
    }
    /* 粒子動畫背景 */
    .cta-particles-bg {
        position: absolute;
        left: 0; top: 0; width: 100%; height: 100%;
        z-index: 0;
        pointer-events: none;
        overflow: hidden;
    }
    .cta-particles-bg {
        background: none;
    }
    .cta-particle {
        position: absolute;
        border-radius: 50%;
        background: rgba(255,255,255,0.18);
        box-shadow: 0 0 8px #fff8;
        animation: ctaParticleMove 12s linear infinite;
    }
    /* 產生 18 個不同大小、位置、動畫延遲的粒子 */
    .cta-particle.p1 { width: 12px; height: 12px; left: 8%; top: 18%; animation-delay: 0s; }
    .cta-particle.p2 { width: 8px; height: 8px; left: 22%; top: 38%; animation-delay: 2s; }
    .cta-particle.p3 { width: 16px; height: 16px; left: 35%; top: 12%; animation-delay: 4s; }
    .cta-particle.p4 { width: 10px; height: 10px; left: 48%; top: 28%; animation-delay: 1s; }
    .cta-particle.p5 { width: 14px; height: 14px; left: 60%; top: 8%; animation-delay: 3s; }
    .cta-particle.p6 { width: 7px; height: 7px; left: 75%; top: 22%; animation-delay: 5s; }
    .cta-particle.p7 { width: 11px; height: 11px; left: 88%; top: 18%; animation-delay: 2.5s; }
    .cta-particle.p8 { width: 9px; height: 9px; left: 15%; top: 65%; animation-delay: 6s; }
    .cta-particle.p9 { width: 13px; height: 13px; left: 30%; top: 80%; animation-delay: 7s; }
    .cta-particle.p10 { width: 8px; height: 8px; left: 45%; top: 70%; animation-delay: 4.5s; }
    .cta-particle.p11 { width: 10px; height: 10px; left: 58%; top: 60%; animation-delay: 8s; }
    .cta-particle.p12 { width: 12px; height: 12px; left: 70%; top: 75%; animation-delay: 9s; }
    .cta-particle.p13 { width: 7px; height: 7px; left: 82%; top: 68%; animation-delay: 10s; }
    .cta-particle.p14 { width: 15px; height: 15px; left: 90%; top: 80%; animation-delay: 11s; }
    .cta-particle.p15 { width: 9px; height: 9px; left: 10%; top: 85%; animation-delay: 5.5s; }
    .cta-particle.p16 { width: 13px; height: 13px; left: 55%; top: 90%; animation-delay: 7.5s; }
    .cta-particle.p17 { width: 8px; height: 8px; left: 80%; top: 50%; animation-delay: 3.5s; }
    .cta-particle.p18 { width: 11px; height: 11px; left: 65%; top: 40%; animation-delay: 6.5s; }
    @keyframes ctaParticleMove {
        0% { transform: translateY(0) scale(1); opacity: 0.7; }
        50% { transform: translateY(-40px) scale(1.15); opacity: 1; }
        100% { transform: translateY(0) scale(1); opacity: 0.7; }
    }
    .cta-ai-icons-bg {
        position: absolute;
        left: 0; top: 0; width: 100%; height: 100%;
        z-index: 0;
        pointer-events: none;
        overflow: hidden;
    }
    .cta-ai-icon {
        position: absolute;
        color: #fff;
        opacity: 0.18;
        font-size: 3rem;
        filter: blur(0.5px);
        animation: ctaAIFloat 8s ease-in-out infinite;
    }
    .cta-ai-icon.ai1 { left: 10%; top: 20%; animation-delay: 0s; }
    .cta-ai-icon.ai2 { left: 75%; top: 18%; animation-delay: 2s; }
    .cta-ai-icon.ai3 { left: 20%; top: 70%; animation-delay: 1.5s; }
    .cta-ai-icon.ai4 { left: 60%; top: 60%; animation-delay: 3s; }
    .cta-ai-icon.ai5 { left: 40%; top: 35%; animation-delay: 4s; }
    .cta-ai-icon.ai6 { left: 85%; top: 75%; animation-delay: 5s; }
    .cta-ai-icon.ai7 { left: 30%; top: 60%; animation-delay: 2.2s; color: #fffbe0; opacity: 0.21; }
    .cta-ai-icon.ai8 { left: 80%; top: 30%; animation-delay: 3.7s; color: #ffe066; opacity: 0.20; }
    .cta-ai-icon.ai9 { left: 50%; top: 80%; animation-delay: 5.1s; color: #ffd166; opacity: 0.19; }
    .cta-ai-icon.ai10 { left: 65%; top: 10%; animation-delay: 1.8s; color: #fff; opacity: 0.18; }
    .cta-ai-icon.ai11 { left: 80%; top: 30%; animation-delay: 3.7s; color: #ffe066; opacity: 0.20; }
    .cta-ai-icon.ai12 { left: 50%; top: 80%; animation-delay: 5.1s; color: #ffd166; opacity: 0.19; }
    .cta-ai-icon.ai13 { left: 65%; top: 10%; animation-delay: 1.8s; color: #fff; opacity: 0.18; }
    @keyframes ctaAIFloat {
        0% { transform: translateY(0) scale(1); opacity: 0.18; }
        50% { transform: translateY(-30px) scale(1.12); opacity: 0.28; }
        100% { transform: translateY(0) scale(1); opacity: 0.18; }
    }
    .cta-bg-img {
        position: absolute;
        left: 0; top: 0; width: 100%; height: 100%;
        z-index: 0;
        pointer-events: none;
        background: url('/images/cta-bg.jpg') center center/cover no-repeat;
        opacity: 0.13;
        filter: blur(2px) grayscale(30%);
    }

    /* 聊天容器樣式 */
    .chat-container {
        padding: 20px;
        height: 100%;
        overflow-y: auto;
    }

    /* 聊天泡泡基本樣式 */
    .chat-bubble {
        max-width: 80%;
        margin-bottom: 15px;
        opacity: 0;
        transform: translateX(50px);
        animation: slideIn 0.5s ease forwards;
    }

    /* AI 訊息樣式 */
    .ai-message {
        background: linear-gradient(135deg, #30a2ff, #75C2F6);
        color: white;
        border-radius: 15px 15px 15px 0;
        padding: 12px 16px;
        margin-right: auto;
    }

    /* 用戶訊息樣式 */
    .user-message {
        background: #f0f2f5;
        color: #333;
        border-radius: 15px 15px 0 15px;
        padding: 12px 16px;
        margin-left: auto;
    }

    /* 訊息內容樣式 */
    .message-content {
        font-size: 14px;
        line-height: 1.4;
    }

    /* 動畫效果 */
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* 為每個訊息設置不同的動畫延遲 */
    .chat-bubble:nth-child(1) {
        animation-delay: 0.5s;
    }

    .chat-bubble:nth-child(2) {
        animation-delay: 1.5s;
    }

    .chat-bubble:nth-child(3) {
        animation-delay: 2.5s;
    }

    .chat-bubble:nth-child(4) {
        animation-delay: 3.5s;
    }

    /* 打字機效果 */
    .typing-effect {
        overflow: hidden;
        border-right: 2px solid #fff;
        white-space: nowrap;
        animation: typing 3.5s steps(40, end),
                   blink-caret 0.75s step-end infinite;
    }

    @keyframes typing {
        from { width: 0 }
        to { width: 100% }
    }

    @keyframes blink-caret {
        from, to { border-color: transparent }
        50% { border-color: #fff }
    }

    .mac-dialog-area-on-img {
    
        position: absolute;
        left: 21.5%;
        top: 10.5%;
        width: 70%;
        height: 54%;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        pointer-events: none;
        overflow: hidden; /* 防止內容超出螢幕 */
    }
    .chat-bubble {
        max-width: 70%;      /* 限制最大寬度 */
        width: fit-content;  /* 讓泡泡寬度隨內容自動調整 */
        word-break: break-all;
        white-space: pre-line;
        margin-bottom: 10px;
        opacity: 0;
        transform: translateX(50px);
        animation: chatFadeIn 0.7s cubic-bezier(.4,1.4,.6,1) forwards;
        box-sizing: border-box;
    }
    .chat-bubble:nth-child(1) { animation-delay: 0.3s; }
    .chat-bubble:nth-child(2) { animation-delay: 1.1s; }
    .chat-bubble:nth-child(3) { animation-delay: 1.9s; }
    .chat-bubble:nth-child(4) { animation-delay: 2.7s; }
    @keyframes chatFadeIn {
        from { opacity: 0; transform: translateX(50px); }
        to { opacity: 1; transform: translateX(0); }
    }
    .ai-message {
        background: linear-gradient(135deg, #30a2ff, #75C2F6);
        color: white;
        border-radius: 15px 15px 15px 0;
        padding: 10px 14px;
        margin-right: auto;
        font-size: 15px;
    }
    .user-message {
          background: linear-gradient(135deg, #f72585, #ff477e);
        color:  white;
        border-radius: 15px 15px 0 15px;
        padding: 10px 14px;
        margin-left: auto;
        font-size: 15px;
    }
    @media (max-width: 768px) {
        .mac-dialog-area-on-img { font-size: 13px; }
        .chat-bubble { max-width: 90%; }
    }

    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
        20%, 40%, 60%, 80% { transform: translateX(5px); }
    }
    .btn-shake {
        animation: shake 0.8s ease-in-out;
    }

    .seo-title {
        position: relative;
        margin-bottom: 1rem;
        font-size: 2.5rem;
        font-weight: 700;
        color: #1e96fc;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }

    .title-underline {
        position: relative;
        width: 0;
        height: 3px;
        background: linear-gradient(90deg, #30a2ff, #75C2F6);
        margin: 0 auto;
        animation: lineGrow 1.5s ease-out forwards;
    }

    @keyframes lineGrow {
        from {
            width: 0;
        }
        to {
            width: 100px;
        }
    }

    .seo-feature-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #00509d, #2563eb);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        transition: all 0.3s ease;
    }

    .seo-feature-icon i {
        font-size: 24px;
        color: white;
        transition: all 0.3s ease;
    }

    .feature-card:hover .seo-feature-icon {
        background: linear-gradient(135deg, #2563eb, #38bdf8);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 80, 157, 0.2);
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

    @push('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        document.querySelectorAll('.fade-up').forEach(function(el) {
            observer.observe(el);
        });
    });
    </script>
    @endpush

    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      if (window.VANTA) {
        VANTA.NET({
          el: '#cta-vanta-bg',
          color: 0x00eaff,
          backgroundColor: 0x0a1833,
          points: 22.0,
          maxDistance: 28.0,
          spacing: 16.0,
          showDots: true,
          mouseControls: true,
          touchControls: true,
          gyroControls: false
        });
      }
    });
    </script>
    @endpush

    <script>
    // 動態產生粒子 DOM
    document.addEventListener('DOMContentLoaded', function() {
        var bg = document.querySelector('.cta-particles-bg');
        if(bg && bg.children.length === 0) {
            for(var i=1;i<=18;i++) {
                var dot = document.createElement('div');
                dot.className = 'cta-particle p'+i;
                bg.appendChild(dot);
            }
        }
    });
    </script>
@endsection 