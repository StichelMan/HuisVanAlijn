FROM anthonytacquet/alpine-apache2-php-nodejs:latest

ENV DB_CONNECTION=mysql \
    DB_HOST=mysqldb \
    DB_PORT=3306 \
    DB_DATABASE=database \
    DB_USERNAME=root \
    DB_PASSWORD=root \
    SUB_DIR=/

COPY ./app/ /var/www/
COPY ./docker/php.ini /etc/php/php.ini
COPY ./app/.env.example /var/www/.env
COPY ./docker/migration/alpine/conf/entrypoint.sh /
COPY ./docker/migration/alpine/conf/httpd.conf /etc/apache2/

WORKDIR /var/www/

# Install extra
RUN apk add php81-gd

RUN php ./composer.phar update && \
    php ./composer.phar install

# Set permissions
RUN chown -R apache:apache ./public && \
    chmod -R 775 ./public && \
    chmod +x /entrypoint.sh && \
    sed -i 's/\r$//' /entrypoint.sh 

CMD bash /entrypoint.sh