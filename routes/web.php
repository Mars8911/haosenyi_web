<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AiSolutionController;

/*
|--------------------------------------------------------------------------
| 網站路由設定
|--------------------------------------------------------------------------
|
| 這裡是您註冊網站路由的地方。這些路由由 RouteServiceProvider 載入，
| 並且所有路由都會被分配到 "web" 中介層群組。讓我們開始建立一個優秀的應用程式！
|
*/

// 公開路由
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/ai-web-solution', [PlanController::class, 'index'])->name('ai-web-solution');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/ai-solution', [AiSolutionController::class, 'index'])->name('ai-solution');
Route::get('/plan-basic', function() { return view('plan-basic'); })->name('plan.basic');
Route::get('/plan-custom', function() { return view('plan-custom'); })->name('plan.custom');
Route::get('/plan-ecommerce', function() { return view('plan-ecommerce'); })->name('plan.ecommerce');
Route::get('/plan-advanced', function() { return view('plan-advanced'); })->name('plan.advanced');

// 管理後台路由
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::resource('blogs', BlogController::class);
        Route::resource('portfolios', PortfolioController::class);
        Route::get('/inquiries', [AdminController::class, 'inquiries'])->name('admin.inquiries');
    });
});
