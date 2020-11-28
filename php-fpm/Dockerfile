FROM php:fpm
FROM php:fpm
COPY wait-for-it.sh /usr/bin/wait-for-it
RUN chmod +x /usr/bin/wait-for-it
RUN apt-get update && apt-get install -y --no-install-recommends \
        git \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
        librabbitmq-dev \
    && docker-php-ext-install \
        pdo_mysql \
        zip \
    && pecl install amqp \
    && docker-php-ext-enable amqp
COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /var/www
CMD composer install ; wait-for-it database:3306 -- bin/console doctrine:migrations:migrate ;  php-fpm
EXPOSE 9000