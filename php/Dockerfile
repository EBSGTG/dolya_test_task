FROM php:8.2-fpm-alpine

RUN apk add --no-cache \
    curl \
    git \
    libpng-dev \
    libzip-dev \
    oniguruma-dev \
    zip \
    unzip \
    mysql-client \
    freetype-dev \
    libjpeg-turbo-dev

RUN docker-php-ext-install \
    mysqli \
    pdo \
    pdo_mysql \
    mbstring \
    zip \
    exif \
    pcntl \
    gd

WORKDIR /var/www/html

RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000

CMD ["php-fpm"]

