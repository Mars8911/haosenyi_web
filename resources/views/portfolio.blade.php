@extends('layouts.app')

@section('title', '作品集 - 好森逸網站設計')
@section('description', '好森逸網站設計的精選作品集，展示我們為各行各業打造的專業網站')

@section('content')
    <section class="portfolio-header py-5 bg-light">
        <div class="container text-center">
            <h1 class="section-title">作品案例</h1>
            <p class="lead">精選網站設計案例，展示我們的專業設計能力</p>
        </div>
    </section>

    <section class="portfolio-content py-5">
        <div class="container">
            <!-- Category Filter -->
            <div class="text-center mb-5">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-primary active" data-category="all">全部作品</button>
                    @foreach($categories as $key => $category)
                        @if($key !== 'all')
                            <button type="button" class="btn btn-outline-primary" data-category="{{ $key }}">{{ $category }}</button>
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- Portfolio Grid -->
            <div class="row g-4 portfolio-grid">
                @foreach($portfolios as $portfolio)
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="{{ $portfolio['category'] }}">
                    <div class="card h-100">
                        <img src="{{ $portfolio['image'] }}" class="card-img-top" alt="{{ $portfolio['title'] }}">
                        <div class="card-body">
                            <h3 class="card-title h5">{{ $portfolio['title'] }}</h3>
                            <p class="card-text">{{ $portfolio['description'] }}</p>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $loop->index }}">
                                查看詳情
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Modal -->
                <div class="modal fade" id="portfolioModal{{ $loop->index }}" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">{{ $portfolio['title'] }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ $portfolio['image'] }}" class="img-fluid mb-3" alt="{{ $portfolio['title'] }}">
                                <p>{{ $portfolio['description'] }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                                <a href="/contact" class="btn btn-primary">立即諮詢</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="portfolio-cta py-5 bg-light">
        <div class="container text-center">
            <h2 class="section-title">想要打造類似的網站？</h2>
            <p class="lead mb-4">讓我們為您打造專屬的網站解決方案</p>
            <a href="/contact" class="btn btn-primary btn-lg">免費諮詢</a>
        </div>
    </section>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.btn-group .btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const category = this.dataset.category;

                    portfolioItems.forEach(item => {
                        if (category === 'all' || item.dataset.category === category) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
    @endpush
@endsection 