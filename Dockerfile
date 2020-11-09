FROM php:7.1-apache

RUN echo '<Directory "/var/www/html/app">' >> /etc/apache2/apache2.conf
RUN echo 'FallbackResource /index.php' >> /etc/apache2/apache2.conf
RUN echo '</Directory>' >> /etc/apache2/apache2.conf

ENV APACHE_DOCUMENT_ROOT /var/www/html/app

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
#RUN sed -ri -e 's!\b/var/www/\b!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY ./app /var/www/html/app/


#run only heroku 
#
#heroku labs:enable --app=YOUR-APP runtime-new-layer-extract
# 
#  
# 
CMD sed -i "s/80/$PORT/g" /etc/apache2/sites-enabled/000-default.conf /etc/apache2/ports.conf && docker-php-entrypoint apache2-foreground
