@extends('layouts.app')

@section('title', '客戶諮詢管理 - 新視野網頁設計')

@section('content')
    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">客戶諮詢管理</h1>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> 返回儀表板
            </a>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>姓名</th>
                                <th>電話</th>
                                <th>Email</th>
                                <th>公司</th>
                                <th>諮詢方案</th>
                                <th>諮詢時間</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inquiries as $inquiry)
                            <tr>
                                <td>{{ $inquiry['id'] }}</td>
                                <td>{{ $inquiry['name'] }}</td>
                                <td>{{ $inquiry['phone'] }}</td>
                                <td>{{ $inquiry['email'] }}</td>
                                <td>{{ $inquiry['company'] }}</td>
                                <td>{{ $inquiry['plan'] }}</td>
                                <td>{{ $inquiry['created_at'] }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#inquiryModal{{ $inquiry['id'] }}">
                                        查看詳情
                                    </button>
                                </td>
                            </tr>

                            <!-- Inquiry Modal -->
                            <div class="modal fade" id="inquiryModal{{ $inquiry['id'] }}" tabindex="-1">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">諮詢詳情</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <p><strong>姓名：</strong> {{ $inquiry['name'] }}</p>
                                                    <p><strong>電話：</strong> {{ $inquiry['phone'] }}</p>
                                                    <p><strong>Email：</strong> {{ $inquiry['email'] }}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><strong>公司：</strong> {{ $inquiry['company'] }}</p>
                                                    <p><strong>諮詢方案：</strong> {{ $inquiry['plan'] }}</p>
                                                    <p><strong>諮詢時間：</strong> {{ $inquiry['created_at'] }}</p>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-2">需求內容：</h6>
                                                <p>{{ $inquiry['message'] }}</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                                            <a href="mailto:{{ $inquiry['email'] }}" class="btn btn-primary">回覆郵件</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection 