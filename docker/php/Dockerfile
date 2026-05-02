FROM php:8.2-fpm

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
    default-mysql-client \
    msmtp msmtp-mta ca-certificates && \
    rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install mysqli

COPY docker/php/php.ini /usr/local/etc/php/conf.d/custom.ini

COPY hotcrp/ /var/www/html

RUN chown -R www-data:www-data /var/www/html/

COPY docker/php/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]

WORKDIR /var/www/html