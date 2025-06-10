# Laravel Persian Validation

پکیج اعتبارسنجی فارسی برای لاراول - ترجمه پیام‌های خطای اعتبارسنجی به فارسی


این پکیج پیام‌های خطای اعتبارسنجی لاراول را به فارسی ترجمه می‌کند.

## نصب

```bash
composer require farbodtf/persian-validation:dev-main
```

## نحوه استفاده

1. در فایل `config/app.php` مقدار `locale` را به `fa` تغییر دهید:

```php
'locale' => 'fa',
```

2. پکیج به صورت خودکار پیام‌های خطای اعتبارسنجی را به فارسی نمایش می‌دهد.

## مثال‌ها
در Request یا Controller

```php

$rules = [
    'name' => 'required|min:3',
    'email' => 'required|email',
    'password' => 'required|min:8|confirmed'
];

$validator = Validator::make($request->all(), $rules);
```

پیام‌های خطا به صورت زیر نمایش داده می‌شوند:
- "نام الزامی است"
- "ایمیل باید یک آدرس معتبر باشد"
- "رمز عبور باید حداقل 8 کاراکتر باشد"
- "تکرار رمز عبور با رمز عبور مطابقت ندارد"

## پشتیبانی از نسخه‌های لاراول

- Laravel 11.x
- Laravel 12.x

## نیازمندی‌ها

- PHP >= 8.2
- Laravel >= 11.0

## لایسنس

این پکیج تحت لایسنس MIT منتشر شده است. برای اطلاعات بیشتر فایل [LICENSE](LICENSE) را مطالعه کنید.


## نویسنده

**Farbod Taherifard**
- ایمیل: farbod.taherifard@gmail.com
- گیت‌هاب: [@farbodtf](https://github.com/farbodtf)
