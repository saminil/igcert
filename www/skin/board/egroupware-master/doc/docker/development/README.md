# EGroupware development enviroment as Docker container

The container and docker-compose.yml file in this directory are the most easy way to get a full development enviroment for EGroupware.

### It defines and uses the following volumes:
* sources: document root of the webserver, by default $PWD/sources subdirectory, can also be your existing document root
* data: EGroupware stores it's files here, by default $PWD/data subdirectory, can also be your existing /var/lib/egroupware
* db: volume for MariaDB (should be NOT a directory under Mac OS and Windows for performance reasons!)
* sessions: volume for sessions, internal no need to change
* sources-push: swoolpush sub-directory of sources
* collabora-config: /etc/loolwsd for Collabora container, by default $PWD/data/default/loolwsd
* rocketchat-uploads: Upload directory for Rocket.Chat, by default $PWD/data/default/rocketchat/uploads
* rocketchat-dumps: Dump directory for MongoDB, by default $PWD/data/default/rocketchat/dump

### It runs the following containers:
* egroupware: php-fpm
* egroupware-nginx: Nginx
* egroupware-db: MariaDB
* egroupware-push: PHP Swoole based push server
* egroupware-watchtower: to automatic keeps the containers up to date
* collabora: Collabora Online Office
* rocketchat: Rocket.Chat
* rocketchat-mongo: MongoDB for Rocket.Chat

### Usage:
```
mkdir dev && cd dev
wget https://raw.githubusercontent.com/EGroupware/egroupware/master/doc/docker/development/docker-compose.yml
wget https://raw.githubusercontent.com/EGroupware/egroupware/master/doc/docker/development/nginx.conf
mkdir sources data
# edit docker-compose.yml to fit your needs eg.
# ports to use for Nginx / the webserver, by default 8080 and 4443
# xdebug port, default 9001 (NOT 9000!)
# IDE host, default XDEBUG_REMOTE_HOST=docker.for.mac.localhost
docker-compose up -d
```
* It will install EGroupware master and phpMyAdmin in egroupware / phpmyadmin subdirectory of sources volume, if not already there
* Credentials for a new install can be found in data:egroupware-docker-install.log
* Use the following to tail the webserver error.log
```
docker logs -f egroupware-nginx 2>&1 | sed "s/PHP message/\\$(echo -e '\n\r')PHP message/g"
```

### Docker Desktop for Mac notes
* directories of volumes must be exported to Docker, by default only your home-directory is!
* permissions of sources and data directory must be readable (sources writable) by your user, as Docker daemon runs as that user!
* db volume must NOT be a directory, as the networked access from Docker VM to the Mac is to slow!

### Docker Desktop for Windows with WSL2 notes
* the directory must be in your Linux home directory ```/home/<username>``` or short ```~/``` (you must NOT use ```/mnt/c/Users/<username>```!)
* until we figure out docker-compose syntax for bind-mounts, you need to replace all mounts using bind-mounts, with explicit mounts, eg:
```
service:
  egroupware:
    volumes:
    #- data:/var/lib/egroupware
    - $PWD/data:/var/lib/egroupware
```
* internal volumes (with just names mentioned in volumes section) are fine

### Docker Desktop for Windows notes
* you can NOT use $PWD to reference the docker-compose directory, use the full path with forward slashes!
* directories of volumes must be exported to Docker!
* db volume must NOT be a directory, as the networked access from Docker VM to Windows is to slow!

### Docker on Linux
* permissions of sources and data directory must be readable (sources writable) by www-data user (#33)

