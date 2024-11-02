FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
	libmariadb-dev \
	&& docker-php-ext-install mysqli \
	&& docker-php-ext-enable mysqli \
	&& apt-get clean
