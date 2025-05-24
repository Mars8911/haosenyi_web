@extends('layouts.app')
@section('title', '7800網站方案 - 好森逸行銷科技')
@section('description', '最適合中小企業的入門網站方案，AI智能整合，快速上線。')
@section('content')
{{-- Banner 區塊（全螢幕寬度）--}}
<div class="banner-hero">
  <h1 class="fw-bold banner-title">7800網站方案</h1>
  <p class="lead banner-desc">最適合中小企業、個人品牌的入門網站方案，快速擁有專屬網站。</p>
</div>

<section class="py-5 bg-light">
  <div class="container text-center">
    {{-- 適合對象 --}}
            <h2 class="text-center plan-basic-title section-title py-4">適合中小企業的全方位品牌官網</h2>
            <p class="plan-basic-desc text-muted px-5">
            7800 元網站方案 專為中小企業量身打造 快速上線 一次到位。<br>結合響應式 RWD、SEO 基本優化與一年免費維護＋主機空間，
            讓您快速上線、提升曝光，並持續搶佔市場先機。
            </p>
    {{-- 方案說明 --}}
    <div class="container">
      <div class="row mt-5 mb-5">
        <div class="col-12">
          <div class="row g-4">
            <div class="col-md-6">
              <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-start">
                  <img src="/images/responsive-design.png" alt="響應式網站設計" class="plan-feature-img mb-3">
                  <h5 class="card-title">響應式網站設計</h5>
                  <p class="fw-bold mb-2">完美支援各種裝置瀏覽</p>
                  <ul class="list-unstyled ms-2">
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>手機、平板、桌機自動調整版面，UX 無縫銜接</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>採用 Bootstrap 5 網格系統，快速客製化</li>
                    <li><i class="fas fa-check-circle text-success me-2"></i>保持品牌視覺一致，提升使用者信任感</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-start">
                  <img src="/images/web-design7800.png" alt="五頁以內精簡架構" class="plan-feature-img mb-3">
                  <h5 class="card-title fw-bold">五頁以內精簡架構</h5>
                  <p class="fw-bold mb-2">高效呈現最重要資訊</p>
                  <ul class="list-unstyled ms-2">
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>包含：首頁、關於我們、服務項目、案例展示、聯絡我們</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>頁面結構扁平化，縮短訪客操作路徑</li>
                    <li><i class="fas fa-check-circle text-success me-2"></i>內容聚焦「核心訴求」，一目了然，提高轉換率</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-start">
                  <img src="/images/search-seo7800.png" alt="基本 SEO 優化" class="plan-feature-img mb-3">
                  <h5 class="card-title fw-bold">基本 SEO 優化</h5>
                  <p class="fw-bold mb-2">提升搜尋引擎排名與曝光</p>
                  <ul class="list-unstyled ms-2">
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>關鍵字研究與佈局：鎖定行業熱搜尋</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Meta 標籤（Title/Description）設定，優化點擊率</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>自動生成 Sitemap.xml 並提交 Google Search Console</li>
                    <li><i class="fas fa-check-circle text-success me-2"></i>圖片 Alt 標籤與友善連結結構，強化整站 SEO 基礎</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-start">
                  <img src="/images/web-hosting.png" alt="一年免費維護＋主機空間" class="plan-feature-img mb-3">
                  <h5 class="card-title fw-bold">一年免費維護＋主機空間</h5>
                  <p class="fw-bold mb-2">讓您無後顧之憂，專注業務成長</p>
                  <ul class="list-unstyled ms-2">
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>系統與套件安全更新，防範潛在漏洞</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>免費主機空間（12 個月），含每日備份與還原支援</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>每月一次小幅內容修改（文字／圖片替換）</li>
                    <li><i class="fas fa-check-circle text-success me-2"></i>緊急故障排除與 7×24 線上支援</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- 加購AI客服模組 --}}
    <div class="plan-addon-banner my-5">
      <div class="plan-addon-main">
        <span class="plan-addon-highlight">7800方案，加購AI客服模組只需再</span>
        <span class="plan-addon-price">NT$10,000</span>
      </div>
      <div class="plan-addon-desc">
        <span class="star">★</span>
        24小時智能客服、即時對話、表單自動推送、專人導入教學
        <span class="star">★</span>
      </div>
    </div>
    {{-- 三大功能區塊 --}}
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-md-6 text-center">
          <h3 class=""><b>AI客服 自動幫您介紹公司</b></h3>
          <p class="plan-basic-feature-text">AI 智能客服全天候待命
          透過先進的自然語言處理技術，AI 客服能主動向訪客問候並介紹公司核心理念，從品牌故事到服務項目，一氣呵成。採用機器學習演算法，不斷優化對話流，確保每一次互動都精準又生動。</p>
        </div>
        <div class="col-md-6 text-center">
          <img src="/images/ai-service.png" alt="AI客服介紹公司" class="img-fluid plan-img-max">
        </div>
      </div>
      <div class="row align-items-center mb-5">
        <div class="col-md-6 text-center">
          <img src="/images/ai-24h.png" alt="AI客服 24小時為您介紹商品" class="img-fluid plan-img-mid">
        </div>
        <div class="col-md-6 text-center">
          <h3 class=""><b>AI客服 24小時為您介紹商品</b></h3>
          <p class="plan-basic-feature-text">結合 GPT 先進語義理解與商品資料庫，AI 客服能自動化提供商品資訊、特色比較與使用建議，並根據訪客行為即時調整推薦策略，讓每一次互動都像專屬顧問般貼心細緻。。</p>
        </div>
      </div>
      <div class="row align-items-center mb-5">
        <div class="col-md-6">
          <h5><b>協助客戶聯繫 填寫表單</b></h5>
          <p>引導客戶主動聯繫，提升轉換率，表單自動化收集。</p>
        </div>
        <div class="col-md-6 text-center">
          <img src="/images/feature3.png" alt="協助客戶聯繫" class="img-fluid plan-img-small">
        </div>
      </div>
      {{-- 功能特色區塊（移動到這裡） --}}
      <div class="row mt-5 mb-5">
        <div class="col-12">
          <h3 class="text-center mb-4">功能特色</h3>
          <div class="row g-4">
            <div class="col-md-6">
              <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                  <h5 class="card-title">智慧化迎賓引導</h5>
                  <p class="card-text">首次訪客自動觸發歡迎語，簡要介紹公司背景與專業領域。</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                  <h5 class="card-title">互動式產品／服務說明</h5>
                  <p class="card-text">根據訪客需求，自動推送對應產品或服務介紹，內建多種範本，輕鬆應對常見詢問。</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                  <h5 class="card-title">即時問答支援</h5>
                  <p class="card-text">24 小時全天候解答，包括營業時間、聯絡方式、案例分享等常見問題，無需人工輪班。</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                  <h5 class="card-title">留言與表單代填</h5>
                  <p class="card-text">自動協助填寫聯絡資料或預約表單，將潛在客戶資訊快速推送給業務人員。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- 商業價值區塊 --}}
    <div class="container mb-5">
      <h3 class="text-center mb-4">商業價值</h3>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center">
              <i class="fas fa-money-bill-wave fa-2x mb-3 text-primary"></i>
              <h5 class="card-title">大幅降低人力成本</h5>
              <p class="card-text">無需全天工讀人員，也不怕漏接商機。</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center">
              <i class="fas fa-user-check fa-2x mb-3 text-primary"></i>
              <h5 class="card-title">提升用戶體驗</h5>
              <p class="card-text">流暢又親切的對話互動，讓訪客留下好印象。</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center">
              <i class="fas fa-chart-line fa-2x mb-3 text-primary"></i>
              <h5 class="card-title">增加詢單轉換</h5>
              <p class="card-text">主動推薦服務與引導填單，提高潛在客戶成單機率。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- CTA按鈕 --}}
    <div class="text-center">
      <a href="/contact" class="btn btn-primary btn-lg">立即聯繫</a>
    </div>  

  
  </div>
</section>
@endsection 