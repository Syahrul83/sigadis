<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach (glob(app_path('Helpers/*.php')) as $filename) {
            require_once $filename;
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Builder::macro('search', function ($field, $string) {
            return $string
                ? $this->where($field, 'like', '%' . $string . '%')
                : $this;
        });
    }
}
