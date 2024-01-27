#!/bin/bash

sed -i "s~^ *baseUrl: .*$~baseUrl: '${NAME}',~" /app/docusaurus/poppen/docusaurus.config.js
cd /app/docusaurus/poppen

npm install --save-dev @types/node
npm run build

rm /usr/share/nginx/html/index.html
cp -r /app/docusaurus/poppen/build/* /usr/share/nginx/html

nginx
tail -f /dev/null
