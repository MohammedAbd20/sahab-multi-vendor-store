# Sahab: Multi-Vendor Store (Laravel)

![Status](https://img.shields.io/badge/Status-On_hold-orange)
![Laravel](https://img.shields.io/badge/Laravel-10-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?logo=php&logoColor=white)

A full-stack multi-vendor store platform built with **Laravel 10**, with a static HTML/CSS/JS front end under `Tasks/`.

> **Project status: on hold.** Development was paused because of the ongoing war on Gaza. I plan to resume it when conditions allow.
>
> **حالة المشروع: متوقف مؤقتًا** بسبب الحرب على غزة، وأنوي استكماله عندما تسمح الظروف.

## What exists today

- User registration, login and logout
- Profile page and change-password flow
- Products and categories (models, migrations, product quantity)
- Home, product detail, categories, search and supplier pages
- Cart, wishlist and recycle-bin pages
- Laravel Sanctum installed for token auth

## Planned

- Admin and vendor dashboards
- Vendor and product management
- Reviews and comments
- Responsive, multi-language UI
- Multiple payment gateways (PayPal, Stripe)
- Shipping and order tracking
- Offers and discounts
- Mobile app connected to the platform

## Getting started

### Requirements

- PHP 8.1 or higher
- Composer
- Node.js and npm
- MySQL or MariaDB

### Installation

```bash
git clone https://github.com/MohammedAbd20/sahab-multi-vendor-store.git
cd sahab-multi-vendor-store

composer install
npm install

cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

## Author

**Mohammed Hamdi Abdelrahman**: [GitHub](https://github.com/MohammedAbd20) · [LinkedIn](https://www.linkedin.com/in/mohammed-abdelrahman-web/)
