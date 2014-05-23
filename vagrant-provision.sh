#!/bin/bash

apt-get update
apt-get -y install apache2 libapache2-mod-php5


# Starting up HTTP server.
service start apache2
