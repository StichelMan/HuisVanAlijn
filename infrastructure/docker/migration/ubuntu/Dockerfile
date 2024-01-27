FROM ubuntu:jammy
ENV DB_CONNECTION=mysql \
    DB_HOST=mysqldb \
    DB_PORT=3306 \
    DB_DATABASE=database \
    DB_USERNAME=root \
    DB_PASSWORD=root \
    SUB_DIR=api-staging
COPY ./app/ /var/www/
COPY ./docker/php.ini /usr/local/etc/php/php.ini
COPY ./app/.env.example /var/www/.env
COPY ./docker/migration/conf/laravel.conf /etc/apache2/sites-available/
WORKDIR /var/www 
# Install php
RUN apt-get update -y && apt-get install -y curl wget gnupg lsb-release && \
    apt-get install software-properties-common -y && \
    add-apt-repository ppa:ondrej/php && \
    apt-get update -y && \
    apt-get install -y tzdata && \
    DEBIAN_FRONTEND=noninteractive; debconf-set-selections tzdata/selected_area=Europe && dpkg-reconfigure tzdata && \
    apt-get install -y php-curl php-gd php8.2-xml php8.2-mysql php8.2-mbstring && \
# Install apache and set configurations
    apt-get install apache2 -y && \
    a2dissite 000-default.conf && a2enmod rewrite && a2ensite laravel.conf && \
    apt-get install -y libapache2-mod-php8.2 libapache2-mod-php && a2enmod php8.2 && \
    apt-get update -y && apt-get install -y libzip-dev zip locales locales-all && \
# Install composer
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
# Install nodejs
#    apt-get install -y ca-certificates curl gnupg && \
#    mkdir -p /etc/apt/keyrings && \
#    curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg && \
#    echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_20.x nodistro main" | tee /etc/apt/sources.list.d/nodesource.list && \
#    apt-get update -y && \
#    apt-get install nodejs -y && \
#    apt-get update -y && \
#    apt-get upgrade -y && \
# Set permissions
    chown -R www-data:www-data /var/www/ && \
    chmod +777 -R /var/www && \
    chmod +x /var/www/scripts/entrypoint.sh && \
# Composer install and make laravel ready for migration and seeding
    composer install && \
    php artisan key:generate && \
    touch storage/logs/laravel.log && \
    chmod 777 -R storage bootstrap/cache && \
    php artisan storage:link
CMD bash /var/www/scripts/entrypoint.sh