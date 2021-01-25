#COMPOSER
#FROM composer as builder
#WORKDIR /app/
#COPY ./src ./

#RUN composer install --optimize-autoloader --no-dev
#RUN composer dump-autoload -o

#PHP
#RUN php artisan config:cache
#RUN php artisan route:cache
#RUN php artisan view:cache
#RUN php artisan config:cache
#RUN php artisan config:clear

#SERVER
FROM chechidev/nginx-php7.4:v1

COPY ./src .
RUN chmod -R 777 storage/

EXPOSE 80