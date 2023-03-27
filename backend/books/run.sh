#! /bin/bash

composer install
php artisan migrate:refresh --seed
php-fpm
#php artisan serve
#cd public
#php -a
#php index.php
#tail -F anything