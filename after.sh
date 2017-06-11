#!/bin/sh

# If you would like to do some extra provisioning you may
# add any commands you wish to this file and they will
# be run after the Homestead machine is provisioned.
cd /home/vagrant/Projects/growthparty
cp .env.vagrant .env
php artisan key:generate
php artisan db:migrate
php artisan db:seed
composer install
npm install
npm run watch
