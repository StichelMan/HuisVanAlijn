FROM anthonytacquet/alpine-apache2-php-nodejs:latest
ENV SUB_DIR=/ \
    BACKEND_BASE_URL=http://localhost:8080
COPY ./ /var/www/
COPY ./docker/alpine/conf/httpd.conf /etc/apache2/
WORKDIR /var/www 

RUN apk add --no-cache \
    build-base \
    cairo-dev \
    pango-dev \
    jpeg-dev \
    giflib-dev \
    librsvg-dev

RUN npm cache clean --force && \
    rm -rf node_modules && \
    npm install && \
    npm install vite

# Windows problem end of line
RUN chmod +x /var/www/docker/alpine/scripts/entrypoint.sh && \
    sed -i 's/\r$//' /var/www/docker/alpine/scripts/entrypoint.sh

CMD bash /var/www/docker/alpine/scripts/entrypoint.sh