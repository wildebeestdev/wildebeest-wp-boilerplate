#!/bin/bash -e

clear
echo "============================================"
echo "WordPress Install Script"
echo "============================================"
# echo "Database Name: "
# read -e dbname
# echo "Database User: "
# read -e dbuser
# echo "Database Password: "
# read -s dbpass
# echo "run install? (y/n)"
# read -e run
# if [ "$run" == n ] ; then
# exit
# else
echo "================================================================"
echo "Kevin is installing WordPress for you, so relax and have a beer"
echo "================================================================"
# #create directory path
# mkdir -p ./var/www/html
# remove current wp-config.php
rm ./wp-config.php
#create wp config - overwrite and create runnable wp-config
mv ./runnable-config.php ./wp-config.php
#download wordpress
curl -O https://wordpress.org/latest.tar.gz
#unzip wordpress
tar -zxvf latest.tar.gz
#change dir to wordpress
cd wordpress
#copy file to parent dir
cp -rf . ..
#move back to parent dir
cd ..
#remove files from wordpress folder
rm -R wordpress


# #set database details with perl find and replace
# perl -pi -e "s/database_name_here/$dbname/g" ./wp-config.php
# perl -pi -e "s/username_here/$dbuser/g" ./wp-config.php
# perl -pi -e "s/password_here/$dbpass/g" ./wp-config.php

# #set WP salts
# perl -i -pe'
#   BEGIN {
#     @chars = ("a" .. "z", "A" .. "Z", 0 .. 9);
#     push @chars, split //, "!@#$%^&*()-_ []{}<>~\`+=,.;:/?|";
#     sub salt { join "", map $chars[ rand @chars ], 1 .. 64 }
#   }
#   s/put your unique phrase here/salt()/ge
# ' ./var/www/html/wp-config.php

#copy theme from wp-content
# cp -r ./wp-content/themes ./var/www/html/wp-content

# #copy plugins from wp-content
# cp -r ./wp-content/plugins ./var/www/html/wp-content

echo "Cleaning..."
#remove zip file
rm latest.tar.gz
#remove bash script
# rm wp.sh
echo "========================="
echo "Installation is complete."
echo "========================="
# fi