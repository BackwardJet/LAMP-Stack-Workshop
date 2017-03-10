#!/bin/bash
sudo apt-get install -y apache2
sudo apt-get install -y mysql-server
sudo apt-get install -y php5 libapache2-mod-php5
sudo apt-get install -y phpmyadmin
sudo bash -c "echo \"Include /etc/phpmyadmin/apache.conf\" >> /etc/apache2/apache2.conf"
sudo /etc/init.d/apache2 restart
sudo bash -c "echo \"<?php phpinfo(); ?>\" >> /var/www/html/info.php"
php -r 'echo "\n\nYour PHP is working.\n\n";'
