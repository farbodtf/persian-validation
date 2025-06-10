<?php

namespace Farbodtf\PersianValidation;

use Illuminate\Support\ServiceProvider;

class PersianValidationServiceProvider extends ServiceProvider
{
    public function register()
    {
        // در صورت نیاز، سرویس‌ها را اینجا ثبت کنید
    }

    public function boot()
    {
        // اضافه کردن فایل‌های زبان به namespace اصلی
        $this->loadTranslationsFrom(__DIR__.'/lang', 'lang');
        
        // اضافه کردن فایل‌های زبان به namespace پکیج
        $this->loadTranslationsFrom(__DIR__.'/lang', 'persian-validation');

        // انتشار فایل‌های زبان
        $this->publishes([
            __DIR__.'/lang' => lang_path('vendor/persian-validation'),
        ], 'persian-validation-lang');
    }
}
