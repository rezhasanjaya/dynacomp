# DynaComp

## Requirements

1. PHP 8.1+
2. Composer
3. Node.js 18+ and npm
4. MySQL or MariaDB

## Clone and Setup

```bash
git clone <your-repo-url> dynacomp
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
