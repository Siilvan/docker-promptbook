# Docker Laravel Promptbook

## TOC
-   [About](#about)
-   [Installation](#installation)
-   [Serving](#serving)

## About
Docker + Laravel prompt book

## Installation

``` bash
composer install
npm install
npm run build
docker run -d -p 3306:3306 -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=promptbook -e MYSQL_USER=bit_academy -e MYSQL_PASSWORD=bit_academy --name=database_for_laravel mysql
php artisan migrate:fresh
```

## Serving
``` bash
composer run dev
```
