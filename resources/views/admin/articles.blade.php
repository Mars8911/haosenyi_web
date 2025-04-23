@extends('layouts.app')

@section('title', '文章管理 - 新視野網頁設計')

@section('content')
    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">文章管理</h1>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> 返回儀表板
            </a>
        </div>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">文章列表</h5>
                <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-lg"></i> 新增文章
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>編號</th>
                                <th>標題</th>
                                <th>發布日期</th>
                                <th>狀態</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                            <tr>
                                <td>{{ $article['id'] }}</td>
                                <td>{{ $article['title'] }}</td>
                                <td>{{ $article['published_at'] }}</td>
                                <td>
                                    <span class="badge bg-{{ $article['status'] === 'published' ? 'success' : 'warning' }}">
                                        {{ $article['status'] === 'published' ? '已發布' : '草稿' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.articles.edit', $article['id']) }}" class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-pencil"></i> 編輯
                                        </a>
                                        <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $article['id'] }}">
                                            <i class="bi bi-trash"></i> 刪除
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            {{-- 刪除確認視窗 --}}
                            <div class="modal fade" id="deleteModal{{ $article['id'] }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">確認刪除</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>確定要刪除文章「{{ $article['title'] }}」嗎？此操作無法復原。</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                                            <form action="{{ route('admin.articles.destroy', $article['id']) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">確認刪除</button>
                                            </form>
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