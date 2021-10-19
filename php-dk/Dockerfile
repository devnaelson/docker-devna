#Dockerfile enter image description here A Dockerfile is a simple text file that contains the commands a user could call to assemble an image.
#Your Docker workflow should be to build a suitable Dockerfile for each image you wish to create, 
#then use compose to assemble the images using the build command.

FROM php:8
 
#RUN docker-php-ext-install intl
#RUN docker-php-ext-install pcntl
#RUN docker-php-ext-install pdo_mysql
#RUN docker-php-ext-install mbstring

RUN a2enmod mpm_event
RUN a2dismod mpm_prefork
RUN a2enmod proxy
RUN a2enmod proxy_fcgi

RUN rm -rf /var/cache/apk/*
 
CMD ["php-fpm"]