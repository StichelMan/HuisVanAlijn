FROM anthonytacquet/alpine-apache2-php-nodejs:latest

ENV BASE_PATH=/

WORKDIR /app/docusaurus
VOLUME [ "/var/log" ]

# Create poppen project docusaurus and remove default files
RUN npm install react-player && \
    npx create-docusaurus@latest poppen classic && \
    rm -r /app/docusaurus/poppen/docs/* && \
    rm -r /app/docusaurus/poppen/src/pages/index.js && \
    rm /app/docusaurus/poppen/docusaurus.config.js

COPY ./docusaurus/ /app/docusaurus/poppen/
COPY ./docs/ /app/docusaurus/poppen/docs/
COPY ./docker/alpine/conf/httpd.conf /etc/apache2/
COPY ./docker/alpine/scripts/entrypoint.sh /

# Set permissions
RUN chown -R apache:apache /var/www && \
    chmod -R 775 /var/www && \
    chmod +x /entrypoint.sh && \
    sed -i 's/\r$//' /entrypoint.sh 

EXPOSE 80
CMD bash /entrypoint.sh