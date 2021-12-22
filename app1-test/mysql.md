##### docker pull mysql

https://hub.docker.com/_/mysql

docker run --name mysqlo -e MYSQL_ROOT_PASSWORD=XXXXXX -d imageID

- docker exec -it mysql bash -l
- ls
- bin  boot  dev  docker-entrypoint-initdb.d  entrypoint.sh  etc  home  lib  lib64  media  mnt  opt  proc  root  run  sbin  srv  sys  tmp  usr  var

docker exec -i some-mysql mysql -uroot -pXXXX  <<< "show databases;"