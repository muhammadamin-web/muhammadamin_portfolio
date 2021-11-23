<?php

namespace App\Providers;

use App\Repository\BaseRepository;
use App\Interfaces\BaseRepositoryInterface;
use App\Interfaces\KeywordRepositoryInterface;
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
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
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
