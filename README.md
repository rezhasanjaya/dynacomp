# DynaComp

## Requirements

1. PHP 8.1+
2. Composer
3. Node.js 18+ and npm
4. MySQL or MariaDB

## Clone and Setup

```bash
git clone https://github.com/rezhasanjaya/dynacomp.git
cd dynacomp
cp .env.example .env
composer install
npm install
php artisan key:generate
```

## Configure Environment

Edit `.env` and set your database:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dynacomp
DB_USERNAME=root
DB_PASSWORD=
```

## Migrate, Seed, and Storage Link

```bash
php artisan migrate
php artisan db:seed
php artisan storage:link
```

## Run the App

Terminal 1:
```bash
php artisan serve
```

Terminal 2:
```bash
npm run dev
```

Open the app at `http://127.0.0.1:8000`.

## Short Architecture

- **Framework:** Laravel (Blade + Tailwind via Vite)
- **Database:** MySQL (Eloquent ORM)
- **Public Pages:** `resources/views/landing/*`
- **Admin Pages:** `resources/views/logged/*` with sidebar layout
- **Key Models:** `Project`, `ProjectCategory`, `Article`, `ArticleCategory`, `ContactMessage`
- **File Uploads:** stored in `storage/app/public`, exposed via `php artisan storage:link`
- **API:** `/api/articles` and `/api/projects` (filter + include category + pagination)

## API Examples

Articles (filter + include + pagination):
```
/api/articles?filter[category]=Design&include=category&page=1&per_page=10
```

Projects (filter category/year + include):
```
/api/projects?filter[category]=Company%20Profile&filter[year]=2026&include=category
```
