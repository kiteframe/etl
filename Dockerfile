FROM php:7.4-alpine

WORKDIR /app

COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY composer.json composer.lock ./

RUN composer install --no-autoloader --no-progress --no-suggest --no-scripts --no-plugins

COPY . .

RUN composer dump-autoload --optimize --no-scripts
