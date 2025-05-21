@extends('layouts.app')

@section('title', '管理後台 - 新視野網頁設計')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">最新消息</h5>
                        <p class="card-text">管理網站的最新消息和文章</p>
                        <a href="{{ route('blogs.index') }}" class="btn btn-primary">管理文章</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">作品案例</h5>
                        <p class="card-text">管理網站的作品案例</p>
                        <a href="{{ route('portfolios.index') }}" class="btn btn-primary">管理案例</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">客戶諮詢</h5>
                        <p class="card-text">查看和管理客戶諮詢</p>
                        <a href="{{ route('admin.inquiries') }}" class="btn btn-primary">查看諮詢</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">網站設定</h5>
                        <p class="card-text">管理網站基本設定</p>
                        <a href="#" class="btn btn-primary">管理設定</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">最近諮詢</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>姓名</th>
                                        <th>電話</th>
                                        <th>諮詢方案</th>
                                        <th>時間</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>王先生</td>
                                        <td>0912-345-678</td>
                                        <td>7800超值方案</td>
                                        <td>2024-03-01</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">最近文章</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>標題</th>
                                        <th>發布日期</th>
                                        <th>狀態</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>網站設計趨勢：2024年最新趨勢分析</td>
                                        <td>2024-03-01</td>
                                        <td>已發布</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 