- A Dockerfile is a text document that contains all the commands a user could call on the command line to assemble an image.
- Using docker build users can create an automated build that executes several command-line instructions in succession.

- Traditionally, the Dockerfile is called Dockerfile and located in the root of the context. You use the -f flag with docker build to point to a Dockerfile anywhere in your file system.

```
 docker build -f /path/to/a/Dockerfile .

 ```
- You can specify a repository and tag at which to save the new image if the build succeeds:

 docker build -t shykes/myapp .

- To tag the image into multiple repositories after the build, add multiple -t parameters when you run the build command:

- docker build -t shykes/myapp:1.0.2 -t shykes/myapp:latest .
