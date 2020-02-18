# Installation
#### You must already have the docker and docker-compose installed on your machine
- Clone this repository to your machine
```bash
git clone https://github.com/caue-santos/dev-lampp.git
```
```bash
cd dev-lampp
```
- Initialize the ambience with docker-compose:
```bash 
docker-compose up -d
```
After that, you should be view the containers like that:
```bash
docker ps
CONTAINER ID        IMAGE                      COMMAND                  CREATED             STATUS              PORTS                               NAMES
24cf24c3fa19        phpmyadmin/phpmyadmin      "/docker-entrypoint.…"   54 seconds ago      Up 53 seconds       0.0.0.0:8080->80/tcp                dev-full_phpmyadmin_1
b7d38c6eda09        cauesantos/php7.3-apache   "/sbin/entrypoint.sh"    55 seconds ago      Up 54 seconds       0.0.0.0:80->80/tcp, 443/tcp         dev-full_php-apache_1
4d0144cebc18        mysql:5.7                  "docker-entrypoint.s…"   55 seconds ago      Up 54 seconds       0.0.0.0:3306->3306/tcp, 33060/tcp   dev-full_mysql_1
```

Enjoy!
