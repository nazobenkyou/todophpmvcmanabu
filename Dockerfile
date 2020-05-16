FROM php:7.2-fpm

# install composer
RUN cd /usr/bin && \
    curl -s http://getcomposer.org/installer | php && \
    ln -s /usr/bin/composer.phar /usr/bin/composer

WORKDIR /var/www/html

EXPOSE 9000

RUN docker-php-ext-install mysqli pdo pdo_mysql
