<?php


namespace App\Providers;

use App\Services\SearchPinService;
use Illuminate\Support\ServiceProvider;

class SearchPinServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // If we want to bind an instance for each request
        $this->app->bind(SearchPinService::class, function ($app) {
            return new SearchPinService();
        });
    }
}
