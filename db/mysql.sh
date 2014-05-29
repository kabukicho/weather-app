#!/bin/sh
MYSQL=/usr/bin/mysql
USER=root
PASS=root
SOCKET=/var/run/mysqld/mysqld.sock # Debian/Ubuntu

# $MYSQL -u ${USER} --password=${USER} --socket=${SOCKET} < ./db/mysql.sql
$MYSQL -u ${USER} --socket=${SOCKET} < ./db/mysql.sql
