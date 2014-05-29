#!/bin/bash

apt-get update
apt-get -y install apache2 libapache2-mod-php5 php5-mysql
apt-get -y install mysql-server-5.5
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password root'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password root'


# Starting up HTTP server and DB server.
service apache2 restart


# Setup Database
/etc/init.d/mysql restart
/home/vagrant/db/mysql.sh
