# Setup guide (windows)
### Configure apache vhost
this is necessary only if browsersync is used during development
#### Step 1
open c:\xampp\apache\conf\extra\httpd-vhosts.conf and add
```
<VirtualHost growthparty.dev:80>
  DocumentRoot "c:/vhosts/growthParty/public"
  <Directory "c:/vhosts/growthParty/public">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
  </Directory>
</VirtualHost>
```
#### Step 2
edit host record to add
```
127.0.0.1	growthparty.dev
```
# Setup guide (ubuntu 16.xx)
### Configure apache vhost
#### Step 1
create new file /etc/httpd/conf/sites-available/growthparty.dev.conf
```config
<VirtualHost growthparty.dev:80>
        ServerName betaserver
        ServerAlias betaserver
        DocumentRoot /path/to/folder/growthParty/public
        ErrorLog "/path/to/folder/you/want/logs/error.log"
        <Directory "/path/to/folder/growthParty">
                Options Indexes FollowSymLinks
                AllowOverride All
                Require all granted
        </Directory>
        <Directory "/path/to/folder/growthParty/public">
                Options Indexes FollowSymLinks
                AllowOverride All
                Require all granted
        </Directory>
</VirtualHost>
```
#### Step 2:
edit /etc/hosts and add 
```
127.0.0.1   growthparty.dev
```

#### Step 3: 
run command in terminal
```
sudo a2ensite growthparty.dev.conf
```
#### Step 4:
set proper folder permissions

```
cd growthParty
sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache
```
### Setup development environment
#### Step 1: install dependencies
Run in terminal:
```
composer install
npm install
```
#### Step 2: configure .env 
##### generate app key
```bash
cp .env.example .env
php artisan key:generate
```
##### edit .env
edit .env file to fill in database/mail server credentials

#### Step 3: start development server
```
php artisan serve & npm run watch
```
==========================================
# Database Schema

==========================================
# Common problem and solutions
> The only supported ciphers are AES-128-CBC and AES-256-CBC with the correct key lengths.
Solution:  
```
cp .example.env .env
php artisan key:generate
```
