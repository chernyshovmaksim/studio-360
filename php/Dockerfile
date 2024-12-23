FROM php:8.1-fpm

# Установка системных зависимостей
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    wget \
    supervisor \
    cron \
    libzip-dev \
    libicu-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libxpm-dev \
    libmemcached-dev \
    zlib1g-dev \
    libssl-dev \
    && rm -rf /var/lib/apt/lists/*

# Настройка и установка расширений PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mysqli \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip \
    intl \
    opcache \
    xml

# Установка Redis
RUN pecl install redis && docker-php-ext-enable redis

# Установка Memcached с правильными зависимостями
RUN pecl install igbinary && \
    docker-php-ext-enable igbinary && \
    pecl install memcached && \
    docker-php-ext-enable memcached

# Установка Xdebug (опционально, для разработки)
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Настройка PHP
COPY php.ini /usr/local/etc/php/conf.d/app.ini

# Создание рабочей директории
WORKDIR /var/www/html

# Установка прав на директорию
RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000
CMD ["php-fpm"] 