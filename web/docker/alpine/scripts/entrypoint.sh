#!/bin/bash

sed -i "s|%%SUB_DIR%%|${SUB_DIR}|g" /etc/apache2/httpd.conf

echo "VITE_BASE_URL=${SUB_DIR}" > /var/www/.env
echo "VITE_BACKEND_BASE_URL=${BACKEND_BASE_URL}" >> /var/www/.env
rm /var/www/.env.development
rm /var/www/.env.production

# Build react 
cd /var/www
npm run build

# Error mounting point
mkdir /var/log/apache2/
mkdir /var/www/logs/

chmod -R 775 /var/log

# Start Apache
exec /usr/sbin/httpd -D FOREGROUND -f /etc/apache2/httpd.conf
tail -f /dev/null
