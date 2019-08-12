FROM php:7.3-fpm

RUN apt-get update && apt-get install -y \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        libmcrypt-dev \
        libpng-dev \
        libicu-dev \
        libbz2-dev \
        libxml2-dev \
        wget \
        unzip

RUN set -e -x \
    && apt-get update && apt-get install -y \
    libpq-dev \
    libc-client-dev \
    libkrb5-dev \
    unoconv \
    && docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install pgsql mbstring imap dom pdo_pgsql zip \
    && docker-php-ext-install -j$(nproc) iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

# Clean up APT when done.
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
