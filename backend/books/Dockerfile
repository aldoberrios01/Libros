FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

RUN rm -rf /var/www/html/index.html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/books
COPY . .

RUN composer install
