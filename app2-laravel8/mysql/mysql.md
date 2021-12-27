##### docker pull mysql5.7.36

https://hub.docker.com/_/mysql

- exec vs 
- run -> load new container 

##### $ docker run --name some-mysql -e MYSQL_ROOT_PASSWORD=my-secret-pw -d mysql:tag

```
Warning: MYSQL_PASSWORD togather MYSQL_USER 
- These variables are optional, used in conjunction to create a new user and to set that user's password. This user will be granted superuser permissions (see above) for the database specified by the MYSQL_DATABASE variable. Both variables are required for a user to be created.
sudo docker run --name v13 -e MYSQL_PASSWORD=1234 -e MYSQL_DATABASE=wordpress -e MYSQL_USER=naelson -d -p 3307:3306 mysql:5.7.36
```

- docker exec -it mysql bash -l
- ls
- bin  boot  dev  docker-entrypoint-initdb.d  entrypoint.sh  etc  home  lib  lib64  media  mnt  opt  proc  root  run  sbin  srv  sys  tmp  usr  var

docker exec -i some-mysql mysql -uroot -pXXXX  <<< "show databases;"

sudo docker exec -i ccf75ae183a8 mysql -uroot -p1234  <<< "show databases;"


mysql -h localhost -P 3306 --protocol=tcp -u root
The '[2002] Connection refused' means you can reach the database server, but you don't have right access for the user