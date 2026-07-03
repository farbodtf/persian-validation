# Laravel Persian Validation

پکیج اعتبارسنجی فارسی برای لاراول - ترجمه پیام‌های خطای اعتبارسنجی به فارسی

[![Latest Version on Packagist](https://img.shields.io/packagist/v/farbodtf/persian-validation.svg?style=flat-square)](https://packagist.org/packages/farbodtf/persian-validation)
[![Total Downloads](https://img.shields.io/packagist/dt/farbodtf/persian-validation.svg?style=flat-square)](https://packagist.org/packages/farbodtf/persian-validation)
[![License](https://img.shields.io/packagist/l/farbodtf/persian-validation.svg?style=flat-square)](https://packagist.org/packages/farbodtf/persian-validation)

این پکیج پیام‌های خطای اعتبارسنجی لاراول را به فارسی ترجمه می‌کند.

## نصب

```bash
composer require farbodtf/persian-validation
```

## نحوه استفاده

1. در فایل `config/app.php` مقدار `locale` را به `fa` تغییر دهید:

```php
'locale' => 'fa',
```

2. پکیج به صورت خودکار پیام‌های خطای اعتبارسنجی را به فارسی نمایش می‌دهد.

## مثال‌ها

<div dir="ltr">

```php
// در Request یا Controller
$rules = [
    'name' => 'required|min:3',
    'email' => 'required|email',
    'password' => 'required|min:8|confirmed'
];

$validator = Validator::make($request->all(), $rules);
```

</div>

پیام‌های خطا به صورت زیر نمایش داده می‌شوند:
- "نام الزامی است"
- "ایمیل باید یک آدرس معتبر باشد"
- "رمز عبور باید حداقل 8 کاراکتر باشد"
- "تکرار رمز عبور با رمز عبور مطابقت ندارد"

## پشتیبانی از نسخه‌های لاراول

- Laravel 9.x
- Laravel 10.x
- Laravel 11.x
- Laravel 12.x
- Laravel 13.x

## نیازمندی‌ها

- PHP >= 8.2
- Laravel >= 9.0

## لایسنس

این پکیج تحت لایسنس MIT منتشر شده است. برای اطلاعات بیشتر فایل [LICENSE](LICENSE) را مطالعه کنید.

## نویسنده

**Farbod Taherifard**
- ایمیل: farbod.taherifard@gmail.com
- گیت‌هاب: [@farbodtf](https://github.com/farbodtf)
