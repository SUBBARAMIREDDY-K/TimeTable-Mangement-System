# base public image
FROM php:8.1.1-apache
COPY ./ttms /var/www/html
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
#install the mysqli module
RUN docker-php-ext-install mysqli
EXPOSE 80