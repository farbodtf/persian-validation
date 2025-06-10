<?php

namespace Ftf\PersianValidation;

use Illuminate\Support\ServiceProvider;

class PersianValidationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // انتشار فایل‌های زبان به پوشه lang در ریشه پروژه
        $this->publishes([
            __DIR__ . '/../lang' => base_path('lang'),
        ], 'persian-validation-lang');

        // بارگذاری فایل‌های زبان
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'persian-validation');
    }

    public function register()
    {
        // در صورت نیاز، سرویس‌ها را اینجا ثبت کنید
    }
}