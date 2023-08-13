<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Services\ProductService;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(IProductService::class, ProductService::class);
    }
}
