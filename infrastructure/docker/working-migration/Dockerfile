FROM php:8.3.0RC6-apache-bullseye
COPY ./app/ /var/www/
COPY ./docker/php.ini /usr/local/etc/php/php.ini
COPY ./app/.env.example /var/www/.env
ENV APACHE_DOCUMENT_ROOT=/var/www/public \
    DB_CONNECTION=mysql \
    DB_HOST=mysqldb \
    DB_PORT=3306 \
    DB_DATABASE=database \
    DB_USERNAME=root \
    DB_PASSWORD=Azerty123
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf && \
    a2enmod rewrite && \
    apt-get update && apt-get install -y libzip-dev zip && docker-php-ext-install zip && docker-php-ext-install bcmath && docker-php-ext-install pdo_mysql && \
    apt-get install -y locales locales-all && \
    apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev libwebp-dev libxml2-dev && docker-php-ext-install soap && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp && docker-php-ext-install gd &&\
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    curl -sL https://deb.nodesource.com/setup_20.x | bash - && apt-get install -y nodejs
WORKDIR /var/www
RUN composer install && \
    php artisan key:generate && \
    touch storage/logs/laravel.log && \
    chmod 777 -R storage bootstrap/cache && \
    php artisan storage:link
VOLUME /usr/local/etc/php
CMD chmod +x /var/www/scripts/entrypoint.sh && bash /var/www/scripts/entrypoint.sh