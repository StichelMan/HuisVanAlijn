FROM alpine:3.18.4

ENV ROOT_PASSWORD=toor \
    DATABASE=empty \
    EXTRA_USER=user \
    EXTRA_PASS=password \
    EXTRA_DATABASE=database\
    EXTRA_PERMISSIONS=SELECT

ADD ./docker/mysql/conf/entrypoint.sh /entrypoint.sh
ADD ./docker/mysql/conf/init.sql /init.sql

RUN apk update && \
    apk add bash nano openrc mariadb mariadb-client && \
    mariadb-install-db --user=root --ldata=/var/lib/mysql && \
    mkdir /run/mysqld && \
    sed -i 's:command_args":command_args"--user=root :' /etc/init.d/mariadb && \
    echo "[mysqld]" >> /etc/my.cnf && \
    echo "skip-networking=0" >> /etc/my.cnf && \
    echo "skip-bind-address" >> /etc/my.cnf

RUN sed -i 's/\r$//' entrypoint.sh && \
    chmod +x /entrypoint.sh 

CMD bash /entrypoint.sh
