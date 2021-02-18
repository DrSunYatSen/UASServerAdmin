FROM php:7.4-apache

RUN apt-get update

RUN apt-get install nano

EXPOSE 80

COPY . /app

COPY index.php /var/www/html

CMD ["/usr/sbin/apache2ctl","-D","FOREGROUND"]

RUN chown -R www-data:www-data /var/www

RUN chmod o-wx /var/www
