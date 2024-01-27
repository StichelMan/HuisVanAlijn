#!/bin/bash

cp /app/docusaurus/poppen/config/docusaurus.config.js /app/docusaurus/poppen/docusaurus.config.js
cp /app/docusaurus/poppen/images/* /app/docusaurus/poppen/static/img/

#sed -i "s~^ *baseUrl: .*$~baseUrl: '${BASE_PATH}',~" /app/docusaurus/poppen/docusaurus.config.js
cd /app/docusaurus/poppen

npm install --save-dev @types/node
npm run build

mkdir /var/log/apache2
mkdir /var/www/

cp -r /app/docusaurus/poppen/build/* /var/www
cp -r /app/docusaurus/poppen/docs/assets/* /var/www/assets

exec /usr/sbin/httpd -D FOREGROUND -f /etc/apache2/httpd.conf
tail -f /dev/null
