@extends('layouts.app')

@section('title', '方案說明 - 好森逸行銷科技')
@section('description', '好森逸行銷科技提供多種網站設計方案，包括超值方案、購物車方案、形象網站方案等，讓您選擇最適合的服務')

@section('content')
    <section class="plans-header py-5 bg-light">
        <div class="container text-center">
            <h1 class="section-title">方案說明</h1>
            <p class="lead">選擇最適合您的網站方案，打造最具效益的專業網站</p>
        </div>
    </section>

    <section class="plans-content py-5">
        <div class="container">
            <div class="row g-4">
                @foreach($plans as $plan)
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title h4">{{ $plan['name'] }}</h3>
                            <p class="card-text text-primary fw-bold">{{ $plan['price'] }}</p>
                            <p class="card-text">{{ $plan['description'] }}</p>
                            <ul class="list-unstyled">
                                @foreach($plan['features'] as $feature)
                                <li class="mb-2">✓ {{ $feature }}</li>
                                @endforeach
                            </ul>
                            <a href="/contact" class="btn btn-primary w-100 mt-3">立即諮詢</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="plans-cta py-5 bg-light">
        <div class="container text-center">
            <h2 class="section-title">不確定哪個方案適合您？</h2>
            <p class="lead mb-4">讓我們為您提供專業的建議，找到最適合的解決方案</p>
            <a href="/contact" class="btn btn-primary btn-lg">免費諮詢</a>
        </div>
    </section>
@endsection 