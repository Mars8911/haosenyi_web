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
            7800 元網站方案 專為中小企業量身打造 快速上線 一次到位。結合響應式 RWD、SEO 基本優化與一年免費維護，
            讓您快速上線、提升曝光，並持續搶佔市場先機。
            </p>
    {{-- 功能特色區塊 --}}
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

    {{-- 三大功能區塊 --}}
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-md-6 text-center">
          <h3 class=""><b>AI客服 自動幫您介紹公司</b></h3>
          <p class="plan-basic-feature-text">AI 智能客服全天候待命
          透過先進的自然語言處理技術，AI 客服能主動向訪客問候並介紹公司核心理念，從品牌故事到服務項目，一氣呵成。採用機器學習演算法，不斷優化對話流，確保每一次互動都精準又生動。</p>
          <div class=""></div>
        </div>
        <div class="col-md-6 text-center">
          <img src="/images/ai-service.png" alt="AI客服介紹公司" class="img-fluid plan-img-max">
        </div>
      </div>
      <div class="row align-items-center mb-5 flex-md-row-reverse">
        <div class="col-md-6">
          <h5><b>AI 客服 為您介紹商品</b></h5>
          <p>自動化商品介紹，提升銷售效率，減少人力成本。</p>
        </div>
        <div class="col-md-6 text-center">
          <img src="/images/ai-service.png" alt="AI客服介紹商品" class="img-fluid plan-img-small">
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

      {{-- 方案說明 --}}
      <h3 class="h5 mt-4">7800方案說明</h3>
      <ul>
        <li>響應式網站設計</li>
        <li>5個頁面以內</li>
        <li>基本SEO優化</li>
        <li>一年免費維護</li>
      </ul>

      {{-- 加購AI客服模組 --}}
      <div class="row my-4">
        <div class="col-md-6">加購 <b>AI 客服模組</b></div>
        <div class="col-md-6 text-md-end">只要 <b>NT. 10,000</b></div>
      </div>
      <p class="text-center mb-4">省去您的大量人力開銷，24小時都在經營</p>

      {{-- CTA按鈕 --}}
      <div class="text-center">
        <a href="/contact" class="btn btn-primary btn-lg">立即聯繫</a>
      </div>
    </div>
  </div>
</section>
@endsection 