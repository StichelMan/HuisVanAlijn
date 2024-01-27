#!/bin/bash

sed -i "/^DB_CONNECTION/c\DB_CONNECTION=${DB_CONNECTION}" /var/www/.env
sed -i "/^DB_HOST/c\DB_HOST=${DB_HOST}" /var/www/.env
sed -i "/^DB_PORT/c\DB_PORT=${DB_PORT}" /var/www/.env
sed -i "/^DB_DATABASE/c\DB_DATABASE=${DB_DATABASE}" /var/www/.env
sed -i "/^DB_USERNAME/c\DB_USERNAME=${DB_USERNAME}" /var/www/.env
sed -i "/^DB_PASSWORD/c\DB_PASSWORD=${DB_PASSWORD}" /var/www/.env

sed -i "/^BASE_PATH/c\BASE_PATH=${SUB_DIR}" /var/www/.env
sed -i "/^APP_URL/c\APP_URL=https://poppen.antwaan.be${SUB_DIR}" /var/www/.env

# Mount problem docker
mkdir /var/log/apache2

# Compose update and install
php artisan key:generate
touch storage/logs/laravel.log
chmod 777 -R storage bootstrap/cache
php artisan storage:link

cd /var/www/

# Run migrate:refresh command, ignoring failures
php artisan migrate:refresh --seed -n || true
php artisan l5-swagger:generate

# Run the webserver
exec /usr/sbin/httpd -D FOREGROUND -f /etc/apache2/httpd.conf
tail -f /dev/null