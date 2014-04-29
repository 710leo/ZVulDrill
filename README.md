ZVulDrill
=========

Web漏洞演练平台 
![](http://img3.tuchuang.org/uploads/2014/02/z1.png) 
![](http://img3.picbed.org/uploads/2014/02/z2.png) 
包含的漏洞有
- SQL注入
- XSS
- CSRF
- 文件包含
- 后台弱口令
- 文件上传
- 目录遍历
- 权限跨越  
  
PS: 
数据库需要手动添加，在sys文件夹中  
根目录在sys/config.php中设置


## Setup on Ubuntu 14.04

You can execute the file setup.sh directly. Or manually enter the
following commands:

    sudo apt-get update
    sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password test123'
    sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password test123'
    sudo apt-get -y install mysql-server apache2 libapache2-mod-auth-mysql php5-mysql php5
    sudo cp -r /vagrant/* /var/www/

    sed -i "s/password = '';/password='test123';/g" /var/www/sys/config.php
    # No need to change the basedir we just delete it and serve from root
    sed -i "/basedir/d" /var/www/sys/config.php

    # Change apache directory from /var/www/html to /var/www
    sudo sed -i "s|www/html|www|g" /etc/apache2/sites-enabled/000-default.conf

    sudo mysql -u root -ptest123 -e "CREATE DATABASE zvuldrill;"
    sudo mysql -u root -ptest123 --database=zvuldrill < /vagrant/sys/zvuldrill.sql


## Automatic setup using vagrant
Please note that you first need to install vagrant, which
is an awesome tool for easily setting up environments.
After you have installed vagrant you can automatically
download and setup ZVulldrill with the following commands.

    git clone https://github.com/710leo/ZVulDrill.git
    cd ZVulDrill
    vagrant up

After vagrant finishes, you can access ZVulDrill via
[http://192.168.33.10](http://192.168.33.10)

For reference please see the Vagrantfile in the repo and 
[vagrantup.com](http://www.vagrantup.com/).
