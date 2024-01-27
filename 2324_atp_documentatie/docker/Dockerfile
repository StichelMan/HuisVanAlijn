FROM nginx:stable-bullseye

ENV NAME=/

RUN apt install curl && \
    curl -fsSL https://deb.nodesource.com/setup_lts.x -o setup_lts.sh && \
    bash setup_lts.sh && \
    apt policy nodejs && \
    apt install nodejs
WORKDIR /app/docusaurus
RUN npm install react-player && \
    npx create-docusaurus@latest poppen classic && \
    rm -r /app/docusaurus/poppen/docs/* && \
    rm /app/docusaurus/poppen/docusaurus.config.js

COPY ./docusaurus/config/ /app/docusaurus/poppen/
COPY ./docs/ /app/docusaurus/poppen/docs/
COPY ./nginx/nginx.conf /etc/nginx/
COPY ./docker/scripts/entrypoint.sh /

# Set permissions
RUN chmod +x /entrypoint.sh && \
    sed -i 's/\r$//' /entrypoint.sh 

EXPOSE 80
CMD bash /entrypoint.sh