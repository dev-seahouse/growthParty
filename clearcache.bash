#!/bin/bash
cd /var/www/growthparty/current
php artisan cache:clear
php artisan responsecache:flush
php artisan view:clear
