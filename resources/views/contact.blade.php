@extends('layouts.app')

@section('title', '聯絡我們 - 好森逸網站設計')
@section('description', '好森逸網站設計提供專業的網站設計服務，歡迎與我們聯繫')

@section('content')
    <section class="contact-header py-5 bg-light">
        <div class="container text-center">
            <h1 class="section-title">聯絡我們</h1>
            <p class="lead">歡迎與我們聯繫，我們將為您提供專業的建議</p>
        </div>
    </section>

    <section class="contact-content py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">線上表單</h2>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">姓名</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">電話</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="company" class="form-label">公司名稱</label>
                            <input type="text" class="form-control" id="company" name="company">
                        </div>
                        <div class="mb-3">
                            <label for="plan" class="form-label">想詢問的方案</label>
                            <select class="form-select" id="plan" name="plan">
                                <option value="">請選擇</option>
                                <option value="8800超值方案">8800超值方案</option>
                                <option value="模組購物車方案">模組購物車方案</option>
                                <option value="半客製形象網站">半客製形象網站</option>
                                <option value="客製化網站專案">客製化網站專案</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">需求內容</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">送出表單</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">聯絡資訊</h2>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="h5">好森逸網站設計</h3>
                            <p><i class="bi bi-telephone"></i> 電話：{{ $contactInfo['phone'] }}</p>
                            <p><i class="bi bi-envelope"></i> Email：{{ $contactInfo['email'] }}</p>
                            <p><i class="bi bi-geo-alt"></i> 地址：{{ $contactInfo['address'] }}</p>
                            <p><i class="bi bi-line"></i> LINE：{{ $contactInfo['line_id'] }}</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h3 class="h5">營業時間</h3>
                        <p>週一至週五：09:00 - 18:00</p>
                        <p>週六、週日：休息</p>
                    </div>
                    <div class="mt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.0323199999997!2d120.6584!3d24.1234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDA3JzI0LjIiTiAxMjDCsDM5JzMwLjIiRQ!5e0!3m2!1szh-TW!2stw!4v1234567890!5m2!1szh-TW!2stw" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 