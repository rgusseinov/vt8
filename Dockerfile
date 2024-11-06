FROM php:7.2-apache

RUN apt-get update && apt-get install -y \
	libmariadb-dev \
	default-mysql-client \
	&& docker-php-ext-install mysqli \
	&& docker-php-ext-enable mysqli \
	&& apt-get clean

WORKDIR /var/www/html