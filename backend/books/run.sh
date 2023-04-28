#! /bin/bash

composer install
php artisan migrate:refresh --seed
php artisan serve --host=0.0.0.0 

#php-fpm
#php artisan serve
#cd public
#php -a
#php index.php
#tail -F anything