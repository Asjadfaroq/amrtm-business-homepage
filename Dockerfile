FROM node:22-alpine AS assets

WORKDIR /app

COPY package.json package-lock.json .npmrc ./
RUN npm ci

COPY vite.config.js ./
COPY resources ./resources
RUN npm run build

FROM php:8.3-cli-alpine

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .
COPY --from=assets /app/public/build ./public/build

RUN composer install --no-dev --optimize-autoloader --no-interaction

ENV APP_ENV=production \
    APP_DEBUG=false \
    LOG_CHANNEL=stderr \
    PHP_CLI_SERVER_WORKERS=4

EXPOSE 10000

CMD ["sh", "-c", "touch database/database.sqlite && php artisan migrate --force --seed && php artisan serve --host=0.0.0.0 --port=${PORT:-10000} --no-reload"]
