#Dockerfile enter image description here A Dockerfile is a simple text file that contains the commands a user could call to assemble an image.
#Your Docker workflow should be to build a suitable Dockerfile for each image you wish to create, 
#then use compose to assemble the images using the build command.

FROM nginx:latest
MAINTAINER NAME EMAIL

#RUN rm -rf /usr/share/nginx/html/*
copy ./app/* /usr/share/nginx/html/
RUN apt-get -y update && apt-get -y upgrade && apt-get install -y php-fpm