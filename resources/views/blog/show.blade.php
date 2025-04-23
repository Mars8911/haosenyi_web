@extends('layouts.app')

@section('title', $post['title'] . ' - 新視野網頁設計')
@section('description', $post['excerpt'] ?? $post['content'])

@section('content')
    <section class="blog-header py-5 bg-light">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">首頁</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">最新消息</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $post['title'] }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="blog-content py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <article class="blog-post">
                        <header class="mb-4">
                            <h1 class="section-title">{{ $post['title'] }}</h1>
                            <p class="text-muted">
                                發布日期：{{ date('Y-m-d', strtotime($post['published_at'])) }}
                            </p>
                        </header>
                        
                        <div class="post-image mb-4">
                            <img src="{{ $post['image'] }}" class="img-fluid rounded" alt="{{ $post['title'] }}">
                        </div>
                        
                        <div class="post-content">
                            {!! nl2br(e($post['content'])) !!}
                        </div>
                    </article>

                    <div class="post-navigation mt-5">
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ route('blog.index') }}" class="btn btn-outline-primary">
                                    <i class="bi bi-arrow-left"></i> 返回列表
                                </a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="/contact" class="btn btn-primary">
                                    立即諮詢 <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 