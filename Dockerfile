# ===== Étape 1 : compiler les assets front-end (Vite) =====
FROM node:20 AS assets
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# ===== Étape 2 : image finale PHP / Laravel =====
FROM php:8.3-cli

# Extensions PHP nécessaires à Laravel
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev \
    && docker-php-ext-install pdo pdo_mysql zip gd \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Code de l'application
COPY . .

# Assets compilés par Vite (étape 1) — écrase le public/build vide du repo
COPY --from=assets /app/public/build ./public/build

# Dépendances PHP
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Dossiers requis par Laravel au runtime + permissions d'écriture
RUN mkdir -p storage/framework/{sessions,views,cache} storage/logs bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Base SQLite (créée vide, remplie par les migrations au démarrage)
RUN mkdir -p database && touch database/database.sqlite && chmod 664 database/database.sqlite

EXPOSE 10000

# config:cache / route:cache / migrate exécutés au DÉMARRAGE (pas au build)
# car les variables d'environnement Render ne sont dispo qu'au runtime
CMD php artisan config:cache \
    && php artisan route:cache \
    && php artisan migrate --force \
    && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
