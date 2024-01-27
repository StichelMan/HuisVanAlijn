#!/bin/bash

sed -i "/^DB_CONNECTION/c\DB_CONNECTION=${DB_CONNECTION}" /var/www/.env
sed -i "/^DB_HOST/c\DB_HOST=${DB_HOST}" /var/www/.env
sed -i "/^DB_PORT/c\DB_PORT=${DB_PORT}" /var/www/.env
sed -i "/^DB_DATABASE/c\DB_DATABASE=${DB_DATABASE}" /var/www/.env
sed -i "/^DB_USERNAME/c\DB_USERNAME=${DB_USERNAME}" /var/www/.env
sed -i "/^DB_PASSWORD/c\DB_PASSWORD=${DB_PASSWORD}" /var/www/.env
#sed -i "s|%%SUB_DIR%%|${SUB_DIR}|g" /etc/apache2/sites-available/laravel.conf

# Run migrate:refresh command, ignoring failures
php artisan migrate:refresh --seed -n || true
php artisan l5-swagger:generate

# Start Apache
apache2ctl -D FOREGROUND
tail -f /dev/null
