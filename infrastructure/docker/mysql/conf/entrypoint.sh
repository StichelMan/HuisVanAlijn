#!/bin/bash

PATH_INIT="/init.sql"
sed -i "s/%%ROOT_PASSWORD%%/$ROOT_PASSWORD/g" $PATH_INIT
sed -i "s/%%DATABASE%%/$DATABASE/g" $PATH_INIT
sed -i "s/%%EXTRA_USER%%/$EXTRA_USER/g" $PATH_INIT
sed -i "s/%%EXTRA_PASS%%/$EXTRA_PASS/g" $PATH_INIT
sed -i "s/%%EXTRA_DATABASE%%/$EXTRA_DATABASE/g" $PATH_INIT
sed -i "s/%%EXTRA_PERMISSIONS%%/$EXTRA_PERMISSIONS/g" $PATH_INIT

mariadbd --user=root --init-file=/init.sql

while [ ! -e /run/mysqld/mysqld.sock ]
do
 sleep 1
done

tail -f /dev/null
