<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ContactInfoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::share('contactInfo', [
            'phone' => '02-77538598',
            'email' => 'service@haosenyi.com',
            'address' => '221新北市汐止區新台五路一段97號27樓',
            'line_id' => 'service@haosenyi.com',
        ]);
    }
}
