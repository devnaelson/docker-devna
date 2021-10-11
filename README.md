# docker-devna
repo to learn more about docker technology 

# Basic
- docker version
- docker -v
- docker info
- docker --help
- docker login
————————————
# Images
- docker images
- docker pull
- docker rmi
————————————
# Containers
- docker ps
- docker run
- docker start
- docker stop
————————————
# System
- docker stats
- docker system df
- docker system prune


Why did it fail? The push command was looking for an image named docker/getting-started, but didn’t find one. If you run docker image ls, you won’t see one either.

To fix this, we need to “tag” our existing image we’ve built to give it another name.

Login to the Docker Hub using the command docker login -u YOUR-USER-NAME.

# Use the docker tag command to give the getting-started image a new name. Be sure to swap out YOUR-USER-NAME with your Docker ID.
- docker tag getting-started YOUR-USER-NAME/getting-started

# Images
can do this by consolidating multiple commands into a single RUN line and using your shell’s mechanisms to combine them together. Consider the following two fragments. The first creates two layers in the image, while the second only creates one.

RUN apt-get -y update
RUN apt-get install -y python