ALTER USER 'root'@'localhost' IDENTIFIED BY '%%ROOT_PASSWORD%%';
CREATE DATABASE %%DATABASE%% CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
CREATE USER '%%EXTRA_USER%%'@'%' IDENTIFIED BY '%%EXTRA_PASS%%';
GRANT %%EXTRA_PERMISSIONS%% ON %%EXTRA_DATABASE%%.* TO '%%EXTRA_USER%%'@'%';
FLUSH PRIVILEGES;
