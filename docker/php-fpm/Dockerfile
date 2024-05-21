FROM php:8.3-fpm-alpine

RUN apk add icu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl