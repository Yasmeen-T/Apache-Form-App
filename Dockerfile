FROM php:8.2-apache
WORKDIR /var/www/html
COPY . .
RUN touch data.json && chown www-data:www-data data.json
EXPOSE 80
