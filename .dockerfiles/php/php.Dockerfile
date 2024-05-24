FROM php:8.3-fpm-alpine

WORKDIR /var/www/app 

RUN docker-php-ext-install pdo pdo_mysql

RUN apk add --update --no-cache \
    coreutils \
    php83 \
    php83-dev \
    php83-common \
    php83-curl \
    php83-pdo \
    libpq \
    php83-pdo_pgsql \
    php83-pcntl \
    php83-phar \
    php83-zip \
    php83-zlib \
    php83-fpm \
    php83-tokenizer \
    php83-xdebug \
    php83-openssl \
    php83-mbstring \
    php83-iconv \
    php83-ctype \
    php83-simplexml \
    php83-xml \
    php83-tokenizer \
    php83-session \
    php83-dom \
    php83-xmlwriter \
    php83-redis \
    make \
    curl \
    shadow

RUN echo "$(curl -sS https://composer.github.io/installer.sig) -" > composer-setup.php.sig \
        && curl -sS https://getcomposer.org/installer | tee composer-setup.php | sha384sum -c composer-setup.php.sig \
        && php composer-setup.php && rm composer-setup.php* \
        && chmod +x composer.phar && mv composer.phar /usr/bin/composer

RUN chown -R www-data:www-data /var/www/app

CMD cp .env.example .env && composer install && php artisan key:generate && php artisan migrate && php artisan db:seed && php-fpm
