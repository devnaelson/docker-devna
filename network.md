- ip addr show 
- the heve several off way to connect, separeted host, single host 

referênces https://stackoverflow.com/questions/24319662/from-inside-of-a-docker-container-how-do-i-connect-to-the-localhost-of-the-mach 
```
4: docker0: <NO-CARRIER,BROADCAST,MULTICAST,UP> mtu 1500 qdisc noqueue state DOWN group default 
    link/ether 02:42:33:24:6f:1e brd ff:ff:ff:ff:ff:ff
    inet ```172.17.0.1/16``` brd 172.17.255.255 scope global docker0
       valid_lft forever preferred_lft forever
    inet6 fe80::42:33ff:fe24:6f1e/64 scope link 
       valid_lft forever preferred_lft forever
```
- This IP is important to connect internal


- this way about work without keys network: 
- you can see above is commeted

### docker run --network="bridge" (DEFAULT)
##### Docker creates a bridge named docker0 by default. Both the docker host and the docker containers have an IP address on that bridge.

```
version: "3.9"

services:

  web:
    build:
      context: ./php-apache
      dockerfile: Dockerfile
    container_name: web  

    ports:
      - "8090:80"
#    networks:
#      - apptest
    volumes:
      - ./php-apache/src:/var/www/html/
    depends_on:
      - mysqldb

  mysqldb:
    container_name: dev-mysql  
    image: mysql:5.7.36
    restart: always
    ports:
      - "3307:3306" #just add in workbench and it gonna work
    environment:
      - MYSQL_ALLOW_EMPTY_PASSWORD=false
      - MYSQL_USER=usernaelson
      - MYSQL_PASSWORD=admin1234.
      - MYSQL_DATABASE=test
#    networks:
#      - apptest 

  adminer:
    image: adminer
    restart: always
    ports:
      - 8081:8080

#Docker Networks
#networks:
#    apptest:
#      driver: bridge

```