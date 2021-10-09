#Dockerfile enter image description here A Dockerfile is a simple text file that contains the commands a user could call to assemble an image.

FROM nginx:latest
MAINTAINER NAME EMAIL

RUN apt-get -y update && apt-get -y upgrade && apt-get install -y php-fpm