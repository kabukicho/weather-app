#!/bin/bash

apt-get update
apt-get -y install apache2


# Starting up HTTP server.
service start apache2
