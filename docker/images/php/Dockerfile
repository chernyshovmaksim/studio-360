FROM php:8.1-fpm

WORKDIR /var/www/evo

# Установка основных зависимостей
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    libicu-dev \
    libxml2-dev \
    libonig-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Установка Imagick
RUN apt-get update && apt-get install -y \
    imagemagick libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick

# Установка расширений PHP, необходимых для Laravel
RUN docker-php-ext-install \
    mysqli \
    pdo \
    pdo_mysql \
    zip \
    bcmath \
    intl \
    opcache \
    mbstring \
    exif \
    pcntl

# Установка Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Установка дополнительных инструментов
RUN apt-get install -y \
    git \
    tree \
    vim \
    wget \
    supervisor \
    cron

# Очистка кэша apt
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Настройка PHP
COPY php.ini /usr/local/etc/php/conf.d/custom.ini