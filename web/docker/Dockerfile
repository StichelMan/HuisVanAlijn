FROM ubuntu:jammy
ENV SUB_DIR=/staging \
    BACKEND_BASE_URL=http://localhost:8080
COPY ./ /var/www/
COPY ./docker/conf/react.conf /etc/apache2/sites-available/
WORKDIR /var/www 
# Install php
RUN apt-get update -y && apt-get install -y curl wget gnupg lsb-release && \
    apt-get install software-properties-common -y && \
    add-apt-repository ppa:ondrej/php && \
    apt-get update -y && \
    apt-get install -y tzdata && \
    DEBIAN_FRONTEND=noninteractive; debconf-set-selections tzdata/selected_area=Europe && dpkg-reconfigure tzdata && \
    apt-get install -y php-curl php-gd php8.2-xml php8.2-mysql php8.2-mbstring && \
# Install apache and set configurations
    apt-get install apache2 -y && \
    a2dissite 000-default.conf && a2enmod rewrite && a2ensite react.conf && \
    apt-get install -y libapache2-mod-php8.2 libapache2-mod-php && a2enmod php8.2 && \
    apt-get update -y && apt-get install -y libzip-dev zip locales locales-all && \
# Install nodejs
    apt-get install -y ca-certificates curl gnupg && \
    mkdir -p /etc/apt/keyrings && \
    curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg && \
    echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_20.x nodistro main" | tee /etc/apt/sources.list.d/nodesource.list && \
    apt-get update -y && \
    apt-get install nodejs -y && \
    apt-get update -y && \
    apt-get upgrade -y && \
# Windows problem end of line
    chmod +x /var/www/docker/scripts/entrypoint.sh && \
    sed -i 's/\r$//' /var/www/docker/scripts/entrypoint.sh
CMD bash /var/www/docker/scripts/entrypoint.sh