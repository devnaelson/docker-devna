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
unable to prepare context: unable to evaluate symlinks in Dockerfile path: lstat /opt/lampp/htdocs/Dockerfile: no such file or directory
- been resolve when me into from folder where's my file of name called Dockerfile as soon as what i been get in of folder and run commad -> it was ok
- sudo docker build -t webserver .