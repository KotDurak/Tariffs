FROM php:8.1-apache
#COPY src/ /var/www/html/

RUN a2enmod rewrite
RUN a2enmod headers

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
