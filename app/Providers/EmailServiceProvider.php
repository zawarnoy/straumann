<?php

namespace App\Providers;

use App\Service\DefaultEmailService;
use App\Service\EmailServiceInterface;
use Illuminate\Support\ServiceProvider;

class EmailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(EmailServiceInterface::class, DefaultEmailService::class);
    }
}
