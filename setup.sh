#!/bin/bash

# This script installs ZVulDrill and all its dependencies on ubuntu 14.04

sudo apt-get update
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password test123'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password test123'
sudo apt-get -y install mysql-server apache2 libapache2-mod-auth-mysql php5-mysql php5
sudo cp -r /vagrant/* /var/www/

sudo sed -i "s/password = '';/password='test123';/g" /var/www/sys/config.php
# No need to change the basedir we just delete it and serve from root
sudo sed -i "/basedir/d" /var/www/sys/config.php

# Change apache config
sudo sed -i "s|www/html|www|g" /etc/apache2/sites-enabled/000-default.conf


# Only create db and insert data when db wasn't created before
if [ ! -d /var/lib/mysql/zvuldrill ]
then
    echo "Going to setup database."
    sudo mysql -u root -ptest123 -e "CREATE DATABASE zvuldrill;"
    sudo mysql -u root -ptest123 --database=zvuldrill < /vagrant/sys/zvuldrill.sql
fi

sudo service apache2 restart
