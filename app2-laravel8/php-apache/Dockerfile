#Dockerfile enter image description here A Dockerfile is a simple text file that contains the commands a user could call to assemble an image.
#Your Docker workflow should be to build a suitable Dockerfile for each image you wish to create, 
#then use compose to assemble the images using the build command.

FROM php:8.0-apache

# Update aptitude with new repo
RUN apt-get update

RUN docker-php-ext-install pdo_mysql

# Install software 
RUN apt-get install -y git

# Copy over private key, and set permissions
# Warning! Anyone who gets their hands on this image will be able
# to retrieve this private key file from the corresponding image layer
ADD id_rsa /root/.ssh/id_rsa

# Create known_hosts
RUN touch /root/.ssh/known_hosts

# Add bitbuckets key
RUN ssh-keyscan bitbucket.org >> /root/.ssh/known_hosts

# Clone the conf files into the docker container
RUN git clone git@github.com:devnaelson/laravel-8-test.git: ./src

COPY src/ /var/www/html/

# sudo docker build -t phpseven .
# sudo docker run -dp 8090:80 phpseven
# sudo docker run -d --name phpruning phpseven