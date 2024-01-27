#!/bin/bash

sed -i "s/%%HOST%%/$HOST/g" /var/www/localhost/htdocs/config.inc.php
sed -i "s#%%SECRET%%#$(openssl rand -base64 32)#g" /var/www/localhost/htdocs/config.inc.php

mkdir /var/log/
mkdir /var/log/lighttpd/
chmod 775 -R /var/log

# Run the webserver
lighttpd -D -f /etc/lighttpd/lighttpd.conf