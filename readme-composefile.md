# context
- Either a path to a directory containing a Dockerfile, or a url to a git repository.
- When the value supplied is a relative path, it is interpreted as relative to the location of the Compose file. This directory is also the build context that is sent to the Docker daemon.
- Compose builds and tags it with a generated name, and uses that image thereafter.

 ```
build:
  context: ./dir

   
```

# dockerfile
- Alternate Dockerfile.

- Compose uses an alternate file to build with. A build path must also be specified.

```

build:
  context: .
  dockerfile: Dockerfile-alternate

```

- args
- Add build arguments, which are environment variables accessible only during the build process.

- First, specify the arguments in your Dockerfile:
 ```

# syntax=docker/dockerfile:1

ARG buildno
ARG gitcommithash

RUN echo "Build number: $buildno"
RUN echo "Based on commit: $gitcommithash"
Then specify the arguments under the build key. You can pass a mapping or a list:

build:
  context: .
  args:
    buildno: 1
    gitcommithash: cdc3b19
build:
  context: .
  args:
    - buildno=1
    - gitcommithash=cdc3b19
    
```