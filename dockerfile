# PHP-FPM 8.1
FROM php:8.1-fpm

# Dépendances système utiles
RUN apt-get update && apt-get install -y \
    curl git unzip libzip-dev zip \
 && rm -rf /var/lib/apt/lists/*

# Extensions PHP (MySQL + zip, etc.)
RUN docker-php-ext-install pdo_mysql zip

# (optionnel) si tu utilises Intl :
# RUN apt-get update && apt-get install -y libicu-dev && rm -rf /var/lib/apt/lists/* \
#  && docker-php-ext-install intl

# Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash \
 && mv ~/.symfony*/bin/symfony /usr/local/bin/symfony

# Composer (corrige bien les deux tirets)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www
