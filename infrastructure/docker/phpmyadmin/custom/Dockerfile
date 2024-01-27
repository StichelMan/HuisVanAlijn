FROM alpine:3.18.4

ENV HOST localhost

RUN apk add lighttpd php82 fcgi php82-cgi openrc nano openssl bash

COPY ./docker/phpmyadmin/custom/files/lighttpd.conf /etc/lighttpd/lighttpd.conf
COPY ./docker/phpmyadmin/custom/files/mod_fastcgi.conf /etc/lighttpd/mod_fastcgi.conf
COPY ./docker/phpmyadmin/custom/script/entrypoint.sh /
COPY ./docker/phpmyadmin/custom/files/config.inc.php /var/www/localhost/htdocs/config.inc.php

RUN mkdir -p /usr/share/webapps/ && \
    cd /usr/share/webapps && \
    wget https://files.phpmyadmin.net/phpMyAdmin/5.2.1/phpMyAdmin-5.2.1-all-languages.tar.gz && \
    tar zxvf phpMyAdmin-5.2.1-all-languages.tar.gz && \
    rm phpMyAdmin-5.2.1-all-languages.tar.gz && \
    mv phpMyAdmin-5.2.1-all-languages phpmyadmin && \
    chmod -R 755 /var/www/localhost/htdocs/ && \
    mv /usr/share/webapps/phpmyadmin/* /var/www/localhost/htdocs/

RUN mkdir /var/run/lighttpd && \
    touch /var/run/lighttpd/php-fastcgi.socket && \
    chown -R lighttpd:lighttpd /var/run/lighttpd

RUN apk add php82 php82-fpm php82-mbstring php82-session php82-mysqli && \
    ln -s /usr/bin/php82 /usr/bin/php && \
    chmod +x /entrypoint.sh && \
    sed -i 's/\r$//' /entrypoint.sh 

#ENTRYPOINT ["tail", "-f", "/dev/null"] 
CMD bash /entrypoint.sh