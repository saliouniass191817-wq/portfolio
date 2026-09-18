FROM php:8.3-cli

# Extensions PHP courantes pour Laravel
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev \
    && docker-php-ext-install pdo pdo_mysql zip gd

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN composer install --no-dev --optimize-autoloader
RUN php artisan config:cache && php artisan route:cache || true

EXPOSE 10000
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
