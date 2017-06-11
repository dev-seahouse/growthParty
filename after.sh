#!/bin/sh

# If you would like to do some extra provisioning you may
# add any commands you wish to this file and they will
# be run after the Homestead machine is provisioned.
cd /home/vagrant/Projects/growthparty
composer update
npm install
npm run watch

