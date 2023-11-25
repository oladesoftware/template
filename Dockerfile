FROM php:apache
LABEL authors="oladesoftware"

COPY . /var/www/html

WORKDIR /var/www/html