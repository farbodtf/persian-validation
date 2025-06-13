<?php

namespace Farbodtf\PersianValidation;

use Illuminate\Support\ServiceProvider;

class PersianValidationServiceProvider extends ServiceProvider
{
    public function boot()
    {
       
        $this->publishes([
            __DIR__ . '/../lang' => base_path('lang'),
        ], 'persian-validation-lang');

     
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'persian-validation');
    }

    public function register()
    {
       
    }
}
