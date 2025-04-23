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
            'phone' => '04-2260-9770',
            'email' => 'service@haosenyi.com',
            'address' => '台中市南區建國北路一段96號',
            'line_id' => '@haosenyi',
        ]);
    }
}
