@extends('layouts.app')

@section('title', '最新消息 - 新視野網頁設計')
@section('description', '新視野網頁設計提供最新的網站設計趨勢、SEO優化技巧和網站開發相關知識。')

@section('content')
    <section class="blog-header py-5 bg-light">
        <div class="container text-center">
            <h1 class="section-title">最新消息</h1>
            <p class="lead">網站設計趨勢、SEO優化技巧和網站開發相關知識</p>
        </div>
    </section>

    <section class="blog-content py-5">
        <div class="container">
            <div class="row g-4">
                @foreach($posts as $post)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <img src="{{ $post['image'] }}" class="card-img-top" alt="{{ $post['title'] }}">
                        <div class="card-body">
                            <h3 class="card-title h5">{{ $post['title'] }}</h3>
                            <p class="card-text text-muted">
                                <small>發布日期：{{ date('Y-m-d', strtotime($post['published_at'])) }}</small>
                            </p>
                            <p class="card-text">{{ $post['excerpt'] }}</p>
                            <a href="{{ route('blog.show', $post['slug']) }}" class="btn btn-outline-primary">閱讀更多</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection 