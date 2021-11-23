<?php

namespace App\Providers;

use App\Repository\Eloquent\BaseRepository;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\KeywordRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(KeywordRepositoryInterface::class, KeywordRepositoryInterface::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
