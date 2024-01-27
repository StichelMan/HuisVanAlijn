#!/bin/bash

sed -i "s|%%SUB_DIR%%|${SUB_DIR}|g" /etc/apache2/sites-available/react.conf

echo "VITE_BASE_URL=${SUB_DIR}" > /var/www/.env
echo "VITE_BACKEND_BASE_URL=${BACKEND_BASE_URL}" >> /var/www/.env
rm /var/www/.env.development
rm /var/www/.env.production

# Build react 
cd /var/www
npm install &&\
npm install vite && \
npm run build && \

# Start Apache
apache2ctl -D FOREGROUND
supervisord
tail -f /dev/null
