# Amrtm Business Homepage

**A Laravel rebuild of the Amrtm business platform homepage, in Arabic and English.**

[![CI](https://github.com/Asjadfaroq/amrtm-business-homepage/actions/workflows/ci.yml/badge.svg)](https://github.com/Asjadfaroq/amrtm-business-homepage/actions/workflows/ci.yml)

**Live demo:** [amrtm-business-homepage.onrender.com](https://amrtm-business-homepage.onrender.com)

---

## Overview

This project was built as a take-home task for the Full-Stack Developer role at Amrtm. The brief was to rebuild the homepage of [business.amrtm.com.sa](https://business.amrtm.com.sa) in my own code.

The page is a single screen: a navbar, a hero with a rotating background, five entity cards, six professional service links, a partners marquee and a contact bar. Layout, spacing, colours and typography follow the live site. The code, structure and class names are my own.

**Stack:** Laravel 13, PHP 8.3, Blade components, Bootstrap 5.3 (RTL and LTR builds), Vite, SQLite or MySQL, PHPUnit, Laravel Pint, GitHub Actions.

---


## Features

- **Two locales:** `/` serves Arabic (RTL) and `/en` serves English (LTR). A route middleware sets the locale, and the layout loads the matching Bootstrap build.
- **Blade components:** the navbar, hero, entity card, service link, partners strip and contact bar are separate components. The page view only composes them.
- **Content from the database:** entities, services and partners are Eloquent models with migrations and seeders. Each record stores an Arabic and an English name, and a shared trait returns the one for the current locale.
- **Interface text in language files:** headings, navigation and button labels live in `lang/ar` and `lang/en`.
- **One stylesheet per component:** shared tokens sit in `base.css`, and each component has its own file under `resources/css/components`.
- **Self-hosted assets:** fonts (Cairo, Inter) and icons (Font Awesome, Tabler) are installed from npm and bundled by Vite, so the page makes no CDN requests.
- **Responsive:** the layout adapts from mobile to wide desktop screens, and the mobile menu uses the Bootstrap collapse plugin.
- **Tests and CI:** feature tests cover both locales. Every push runs Pint, the test suite and the asset build on GitHub Actions.

---

## Prerequisites

- [PHP 8.3+](https://www.php.net/downloads) with the `sqlite3`, `mbstring`, `xml` and `curl` extensions
- [Composer](https://getcomposer.org/download/)
- [Node.js 20+](https://nodejs.org/)

---

## Quick Start

### 1. Clone the repository

```bash
git clone https://github.com/Asjadfaroq/amrtm-business-homepage.git
cd amrtm-business-homepage
```

### 2. Install dependencies

```bash
composer install
npm install
```

### 3. Configure the environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Create and seed the database

```bash
touch database/database.sqlite
php artisan migrate --seed
```

### 5. Build the assets and start the server

```bash
npm run build
php artisan serve
```

Open `http://localhost:8000` for Arabic and `http://localhost:8000/en` for English.

During development, run `npm run dev` in a second terminal instead of `npm run build` to get hot reloading.

---

## Using MySQL

The project runs on SQLite by default so it starts without a database server. To use MySQL, change these values in `.env` and run the migrations again:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=amrtm
DB_USERNAME=root
DB_PASSWORD=
```

```bash
php artisan migrate --seed
```

---

## Tests and code style

```bash
php artisan test
vendor/bin/pint --test
```

---

## Project structure

```
app/
  Http/Controllers/HomeController.php    Loads the page data
  Http/Middleware/SetLocale.php          Sets the locale per route
  Models/                                Entity, Service, Partner
  Models/Concerns/HasLocalizedName.php   Returns the name for the current locale
  View/Components/Layout.php             Resolves the text direction
config/platform.php                      Locales, navigation, hero slides, contact numbers
database/
  migrations/                            Table definitions
  seeders/                               Homepage content
lang/
  ar/home.php, en/home.php               Interface text
resources/
  css/base.css                           Tokens and page shell
  css/components/                        One stylesheet per component
  js/hero-slider.js                      Background crossfade
  views/home.blade.php                   Page composition
  views/components/                      Blade components
routes/web.php                           The two locale routes
tests/Feature/HomePageTest.php           Feature tests
.github/workflows/ci.yml                 Lint, tests and build
```

---

## Differences from the live site

- **English locale:** the live site leaves several labels in Arabic when switched to English. Here the English locale is fully translated.
- **Inner pages:** the navigation links open simple placeholder pages to show routing. Cards and buttons point to `#`.
- **Hero video:** the video card is visual only and does not open a player.

---

## Notice

The Amrtm name, logo and images belong to Amrtm and are used here only for this assessment.

---

**Developed by Asjiad Farooq**

[![LinkedIn](https://img.shields.io/badge/LinkedIn-0A66C2?logo=linkedin&logoColor=white)](https://linkedin.com/in/asjadfarooqconnect)
[![GitHub](https://img.shields.io/badge/GitHub-181717?logo=github&logoColor=white)](https://github.com/Asjadfaroq)
