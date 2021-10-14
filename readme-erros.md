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
