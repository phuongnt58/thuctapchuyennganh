<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Laravel\Dusk\DuskServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }

        $repositories = [
            "User\UserRepositoriesInterface" => 'User\UserRepositories',
            "News\NewsRepositoriesInterface" => 'News\NewsRepositories',
            "SubCategory\SubCategoryRepositoryInterface" => 'SubCategory\SubCategoryEloquentRepository',
            "Advertisements\AdvertisementsRepositoryInterface" => 'Advertisements\AdvertisementsEloquentRepository',
            "Comment\CommentRepositoriesInterface" => 'Comment\CommentRepositories',
        ];

        foreach ($repositories as $key => $value) {
            $this->app->bind("App\\Repositories\\$key","App\\Repositories\\$value");
        }

        $this->app->singleton(
            \App\Repositories\Category\CategoryRepositoryInterface::class,
            \App\Repositories\Category\CategoryEloquentRepository::class
        );

        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }
    }
}
