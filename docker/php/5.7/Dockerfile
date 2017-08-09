FROM php:7.1.7-fpm-alpine

MAINTAINER YeJianCong "yejiancong@me.com"

RUN sed -i 's/dl-cdn.alpinelinux.org/mirrors.aliyun.com/' /etc/apk/repositories
RUN apk add --no-cache --virtual .build-deps \
        autoconf \
        file \
        gcc \
        g++ \
        libc-dev \
        make \
        pkgconf \
        re2c \
        tzdata \
    && apk add --no-cache --virtual .run-deps \
        coreutils \
        libltdl \
        freetype-dev \
        gettext-dev \
        libjpeg-turbo-dev \
        libpng-dev \
        curl-dev \
        libmcrypt-dev \
        libxml2-dev \
        cyrus-sasl-dev \
        libmemcached-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install -j$(nproc) \
        iconv mcrypt gettext curl pdo pdo_mysql zip \
        mbstring bcmath opcache xml simplexml sockets hash soap \
    && docker-php-ext-configure gd \
        --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && pecl install redis-3.1.3 \
    && pecl install memcached-3.0.3 \
    && docker-php-ext-enable redis memcached \
    && cp /usr/share/zoneinfo/Asia/Shanghai /etc/localtime \
    && echo "Asia/Shanghai" >  /etc/timezone \
    && apk del .build-deps


COPY ./php.ini /usr/local/etc/php/
COPY ./php.d/opcache_blacklist.ini /etc/php.d/