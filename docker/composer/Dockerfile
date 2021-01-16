FROM php:7.4-fpm
RUN apt-get update
RUN apt-get install -y \
            libfreetype6-dev \
            libjpeg62-turbo-dev \
            libpng-dev \
            libpq-dev \
            libzip-dev \
            git

RUN docker-php-ext-install pdo_mysql pdo zip

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN composer self-update

VOLUME ["/material"]
WORKDIR /material

ENTRYPOINT ["composer"]
CMD ["--help"]
