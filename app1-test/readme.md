##### Goal (Last PHP,MYSQL) in the simples why without use images of trird
- Step one build i simples docker file
- Step two build composer file and send manualy settings into from docker container
- Step Three Connect Mysql Container with PHP
- All Working 
- Step Four rebuild commands more complex eliminated the simples and manual way to use, step by one



https://hub.docker.com/_/mysql
docker pull mysql


docker run --name mysqlo -e MYSQL_ROOT_PASSWORD=XXXXXX -d imageID

- docker exec -it mysql bash -l
- ls
- bin  boot  dev  docker-entrypoint-initdb.d  entrypoint.sh  etc  home  lib  lib64  media  mnt  opt  proc  root  run  sbin  srv  sys  tmp  usr  var

docker exec -i some-mysql mysql -uroot -pXXXX  <<< "show databases;"