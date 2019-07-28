FROM php:7.1-apache

RUN apt-get update
RUN apt-get install curl

RUN cd ~

RUN apt-get -y install zip

RUN curl -sS https://getcomposer.org/installer -o composer-setup.php

RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

COPY ./conf/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN apachectl restart
