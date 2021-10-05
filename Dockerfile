FROM php:8.0-fpm-alpine

RUN docker-php-ext-install pdo

RUN pecl install mongodb 

RUN echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini

RUN curl -sS https://getcomposer.org/installer | \
  php -- --install-dir=/usr/local/bin --filename=composer