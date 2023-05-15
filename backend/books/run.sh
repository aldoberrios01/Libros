#! /bin/bash

if [ ! -d "./vendor" ]; then
    composer install
fi

php artisan migrate:refresh --seed
php artisan serve --host=0.0.0.0