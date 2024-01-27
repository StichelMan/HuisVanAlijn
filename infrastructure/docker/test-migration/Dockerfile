FROM vtacquet/apache-php-nodejs:latest
COPY ./app/ /var/www/
COPY ./docker/php.ini /usr/local/etc/php/php.ini
COPY ./app/.env.example /var/www/.env
COPY ./docker/migration/conf/laravel.conf /etc/apache2/sites-available/
ENV DB_CONNECTION=mysql \
    DB_HOST=mysqldb \
    DB_PORT=3306 \
    DB_DATABASE=database \
    DB_USERNAME=root \
    DB_PASSWORD=Azerty123 \
    SERVER_NAME=localhost
WORKDIR /var/www
# Set permission for /var/www directory
RUN chown -R www-data:www-data /var/www/ && \
    chmod +777 -R /var/www && \
# Set apache configuration    
    a2dissite 000-default.conf && a2enmod rewrite && a2ensite laravel.conf && \
    apt-get install -y libapache2-mod-php8.2 libapache2-mod-php && a2enmod php8.2 && \
    apt-get update -y && apt-get install -y libzip-dev zip && \
    apt-get install -y locales locales-all && \
# Install composer
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
# Install php packages
    apt-get install -y php-curl php-gd php8.2-xml php8.2-mysql php8.2-mbstring && \
# execute permisions entrypoint.sh
    chmod +x /var/www/scripts/entrypoint.sh && \
# Composer install and update for, ready for migration and seeding
    composer update && composer install && \
    php artisan key:generate && \
    touch storage/logs/laravel.log && \
    chmod 777 -R storage bootstrap/cache && \
    php artisan storage:link
CMD bash /var/www/scripts/entrypoint.sh