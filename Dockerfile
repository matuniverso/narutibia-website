FROM php:apache

RUN apt update \
    && apt install -y libzip5 \
    && docker-php-ext-install bcmath pdo_mysql zip curl

ADD . /app

RUN chmod -R 777 /app/storage

ENV APACHE_DOCUMENT_ROOT /app/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN cd /app \
    && composer install --optimize-autoloader --no-dev \
    && php artisan migrate \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

EXPOSE 80 443