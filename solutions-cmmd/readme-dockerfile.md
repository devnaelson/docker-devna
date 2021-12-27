- A Dockerfile is a text document that contains all the commands a user could call on the command line to assemble an image.
- Using docker build users can create an automated build that executes several command-line instructions in succession.

- Traditionally, the Dockerfile is called Dockerfile and located in the root of the context. You use the -f flag with docker build to point to a Dockerfile anywhere in your file system.

```
 docker build -f /path/to/a/Dockerfile .
 ```
- You can specify a repository and tag at which to save the new image if the build succeeds:

 ```
 docker build -t shykes/myapp .
 ```

- To tag the image into multiple repositories after the build, add multiple -t parameters when you run the build command:
 
 ```
- docker build -t shykes/myapp:1.0.2 -t shykes/myapp:latest .
 ```

# ARG
- ARG <name>[=<default value>]
- The ARG instruction defines a variable that users can pass at build-time to the builder with the docker build command using the --build-arg <varname>=<value> flag. If a user specifies a build argument that was not defined in the Dockerfile, the build outputs a warning.

- A Dockerfile may include one or more ARG instructions. For example, the following is a valid Dockerfile:
 ```
FROM busybox
ARG user1
ARG buildno
 ```
# ...
# Warning:
- It is not recommended to use build-time variables for passing secrets like github keys, user credentials etc. Build-time variable values are visible to any user of the image with the docker history command.
- Refer to the “build images with BuildKit” section to learn about secure ways to use secrets when building images.
- Default values
- An ARG instruction can optionally include a default value:

 ```
FROM busybox
ARG user1=someuser
ARG buildno=1
 ```
# ...
- If an ARG instruction has a default value and if there is no value passed at build-time, the builder uses the default.

- Scope
- An ARG variable definition comes into effect from the line on which it is defined in the Dockerfile not from the argument’s use on the command-line or elsewhere. For example, consider this Dockerfile:
 ```
FROM busybox
USER ${user:-some_user}
ARG user
USER $user
 ```

 - The environment variables set using ENV will persist when a container is run from the resulting image. 
  ```
 You can view the values using docker inspect, and change them using docker run --env <key>=<value>.
 WARNING-ERROR "docker run" requires at least 1 argument.
 SOLVE IT: Problem is not with docker, you just didn't specify which image to run.maybe don't have in dockerfile
 ```
