FROM php:7.4-fpm

COPY ./backend /var/www

WORKDIR /var/www
            
RUN curl -sS https://getcomposer.org/installer | php

RUN mv composer.phar /usr/local/bin/composer 

# ここまでcomposerイメージで用意して下記のように移植することも可能
# COPY --from=composer /usr/local/bin/composer /usr/local/bin/composer

RUN apt-get update && apt-get install -y \
            git \
            zip \
            unzip

RUN composer install

RUN php artisan cache:clear \
     && php artisan config:clear \
     && php artisan route:clear \
     && php artisan view:clear

RUN chown -R www-data:www-data storage
