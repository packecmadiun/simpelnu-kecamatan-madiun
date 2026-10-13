
FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libicu-dev libxml2-dev \
    && docker-php-ext-install pdo_sqlite mbstring bcmath intl zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction \
    && mkdir -p storage/framework/cache \
       storage/framework/sessions \
       storage/framework/views bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 3000

CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=${PORT:-3000}"]

