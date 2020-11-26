FROM php:7.2-apache

COPY . /app
COPY ./.docker/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /app
RUN docker-php-ext-install pdo pdo_mysql mysqli
