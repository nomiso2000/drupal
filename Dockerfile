FROM php:7.4-apache
RUN apt-get update \
&& apt-get install -y --no-install-recommends git zlib1g-dev libzip-dev zip unzip
RUN docker-php-ext-install pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN a2enmod rewrite
COPY ./src/ /var/www/html