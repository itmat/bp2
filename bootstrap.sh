#!/usr/bin/env bash

echo ">>> Starting Install Script"

apt-get update
apt-get install -y apache2 php5 emacs
rm -rf /var/www
ln -fs /vagrant /var/www



#echo "ServerName localhost" |  sudo tee /etc/apache2/conf.d/fqdn
#sudo /etc/init.d/apache2 restart
