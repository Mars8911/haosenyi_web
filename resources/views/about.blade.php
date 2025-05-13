@extends('layouts.app')

@section('title', '關於我們 - 好森逸行銷科技')
@section('description', '好森逸行銷科技提供專業的網站設計服務，擁有豐富的經驗和專業的團隊')

@section('content')
    <section class="about-header py-5 bg-light">
        <div class="container text-center">
            <h1 class="section-title">關於我們</h1>
            <p class="lead">專業的網站設計團隊，為您打造最具效益的專業網站</p>
        </div>
    </section>

    <section class="about-company py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">公司簡介</h2>
                    <p class="lead">{{ $companyInfo['description'] }}</p>
                    <div class="mt-4">
                        <h3 class="h5">我們的使命</h3>
                        <p>{{ $companyInfo['mission'] }}</p>
                        <h3 class="h5">我們的願景</h3>
                        <p>{{ $companyInfo['vision'] }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="公司環境" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <section class="about-values py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">核心價值</h2>
            <div class="row g-4">
                @foreach($values as $value)
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <h3 class="card-title h5">{{ $value['title'] }}</h3>
                            <p class="card-text">{{ $value['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="about-team py-5">
        <div class="container">
            <h2 class="text-center section-title">專業團隊</h2>
            <div class="row g-4">
                @foreach($team as $member)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <img src="{{ $member['image'] }}" class="card-img-top" alt="{{ $member['name'] }}">
                        <div class="card-body text-center">
                            <h3 class="card-title h5">{{ $member['name'] }}</h3>
                            <p class="text-primary">{{ $member['position'] }}</p>
                            <p class="card-text">{{ $member['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="about-cta py-5 bg-light">
        <div class="container text-center">
            <h2 class="section-title">想要了解更多？</h2>
            <p class="lead mb-4">歡迎與我們聯繫，我們將為您提供專業的建議</p>
            <a href="/contact" class="btn btn-primary btn-lg">聯絡我們</a>
        </div>
    </section>
@endsection 