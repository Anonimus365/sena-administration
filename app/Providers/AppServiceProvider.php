<?php

namespace App\Providers;

use App\Services\AreaService;
use App\Services\CenterService;
use App\Services\ComputerService;
use App\Services\CourseService;
use App\Services\Impl\AreaServiceImpl;
use App\Services\Impl\CenterServiceImpl;
use App\Services\Impl\ComputerServiceImpl;
use App\Services\Impl\CourseServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            AreaService::class, AreaServiceImpl::class
        );

        $this->app->bind(
            CenterService::class, CenterServiceImpl::class
        );

        $this->app->bind(
            ComputerService::class, ComputerServiceImpl::class
        );

        $this->app->bind(
            CourseService::class, CourseServiceImpl::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
