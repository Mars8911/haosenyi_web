@extends('layouts.app')

@section('title', '管理員登入 - 新視野網頁設計')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-4">管理員登入</h2>
                        
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p class="mb-0">{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif

                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">帳號</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">密碼</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">記住我</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">登入</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 