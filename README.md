# Docker Laravel Promptbook

## TOC
-   [About](#about)
-   [Installation](#installation)

## About
Is Docker EN Laravel maar de docker interact niet met de Laravel

## Installation

``` bash
composer install
docker run -d -p 3306:3306 -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=promptbook -e MYSQL_USER=bit_academy -e MYSQL_PASSWORD=bit_academy --name=database_for_laravel mysql
php artisan migrate:fresh
```