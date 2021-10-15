# Error response from daemon: conflict: unable to remove repository reference "hello-world" (must force) - container ffc2fb7d058e is using its referenced image fce289e99eb9
- docker rmi -f xxxxxxxxxxx

- ____________________________________________

# sudo docker-composer up i catch this error
- why? as soon as apply this command line i get this error because don't have any images set up
- docker composer by i saw, it's needed from dockerfile to run and get put in network
- OK, i will uncommented again the file dockerfile all lines that was commented
# Building web
# ERROR: Cannot locate specified Dockerfile: Dockerfile

- ___________________________________________

# images
- 1
unable to prepare context: unable to evaluate symlinks in Dockerfile path: lstat /opt/lampp/htdocs/Dockerfile: no such file or directory
- been resolve when me into from folder where's my file of name called Dockerfile as soon as what i been get in of folder and run commad -> it was ok
- sudo docker build -t webserver .

- ___________________________________________
- 2

Step 3/4 : COPY ./app /usr/share/nginx/html
COPY failed: file not found in build context or excluded by .dockerignore: stat app: file does not exist
- been solve when did i create a folder of name app into my folder that's together dockerfile
- probably other solution could be make before this line COPY ./app /usr/share/nginx/html 
- is create touch command for make a folder 

- ___________________________________________
- 3

When using COPY with more than one source file, the destination must be a directory and end with a /

```
copy ./app/* /usr/share/nginx/html

```
- to
```
copy ./app/* /usr/share/nginx/html/
```

# docker: Error response from daemon: Conflict. The container name "/run-website" is already in use by container "87597c7ed5e8375d89f0083785e4619c660da5f7a4ea63bca5e2414742ca47bc". You have to remove (or rename) that container to be able to reuse that name.

```
$ docker ps -a
```
– or –
```
$ docker ps --all
```

Procedure
Stop the container(s) using the following command:
docker-compose down
Delete all containers using the following command:
docker rm -f $(docker ps -a -q)
Delete all volumes using the following command:
docker volume rm $(docker volume ls -q)
Restart the containers using the following command:
docker-compose up -d

# Each container has its own localhost
- Nginx and PHP are running in two different containers, so PHP is not running on localhost (from Nginx's perspective).
- Since your PHP container is named "php", you don't want to connect to this:


# ERRORS {
  
  # Command 'docker-compose' not found, but can be installed with: sudo apt  install docker-compose
  # ready for connections. Version: '8.0.26'  socket: '/var/run/mysqld/mysqld.sock'  port: 3306  MySQL Community Server - GPL. : sudo docker-compose up -d and again run
  # stoping web_1  | 2021/10/09 11:53:42 [notice] 1#1: start worker process 29: needed docker image

  #  }  
#-----------
# if you want to rebuild your images, you write docker-compose up --build
#-----------
#sudo docker-compose down
#-----------
#Docker Compose
# - is a tool for defining and running multi-container Docker applications.
# - define the services that make up your app in docker-compose.yml so they can be run together in an isolated environment.
# - get an app running in one command by just running docker-compose up
#-----------
# So now, to build the stack, go back to the terminal window, make sure you're in your build directory, and issue the command:
#sudo docker-compose up
#-----------
# The above command will deploy both the web and db containers. If you only run that command, the containers will deploy in attached mode, 
# so you won't get your bash prompt returned. If you want to run them in detached mode, you'd issue the command:
#sudo docker-compose up -d


#what i did understand this
# Composer executa multiplos serviços "containers"
# Dockerfile instala e configura

#version:'3' <-- this is wrong

#version: '3' <-- this is correct.

# ERROR: The Compose file './docker-compose.yml' is invalid because
- https://stackoverflow.com/questions/56225523/the-compose-file-docker-compose-yml-is-invalid-because-unsupported-config-o/56226260
- networks should be at version level
version: '3.8'
services:
  web:
    build:
      args:
        version: 0.0.1
      context: .
      dockerfile: Dockerfile
    networks:
      - back-tier
    expose:
      - 8080
    ports:
    - 8080:8080
networks:
  back-tier:
    driver: bridge


- How to get content of default nginx configuration file in Docker environment on Ubuntu
```
docker run -it nginx cat /etc/nginx/conf.d/default.conf
```