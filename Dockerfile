FROM php:8.1-apache

# Install system dependencies required for common PHP extensions
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" gd mysqli pdo pdo_mysql \
    && a2enmod rewrite \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Ensure /var/www/html ownership (useful when building without volume mounts)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (already implied by the base image)
EXPOSE 80

# Default command is inherited from php:apache base image
