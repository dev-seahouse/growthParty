#Setup guide (The short version using vagrant for the lazy)
* Coming soon

# Setup guide (The long version for learners)
#### Step 1 Configure a development environment and setup vhost
* Ensure that a server running apache, mysql, php7+ is installed and ready to use, e.g lamp, wamp, xampp, 

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
edit host record to add
```
127.0.0.1	growthparty.dev
```
* Note that vhost need name need to be growthparty.dev in order for front end build system to work
* For Mac users, checkout out laravel valet https://laravel.com/docs/5.4/valet

### Step 2 install npm dependencies and front end build system
* Ensure that node is installed 
https://nodejs.org/en/download/

```
npm install npm@latest
npm install
```

### Step 3 install composer
* for installation instructions, please refer to 
https://getcomposer.org/

### Step 4 Setup laravel blogging system
```bash
composer install
composer update
php artisan voyager:install
```
debug: if database error is encountered during installation
you can try
```
- option 1. `php artisan migrate:reset`
- option 2. truncate the table giving error
- option 3. drop the database and recreate growthparty database, run voyager:install
```

# .env setting example
```
APP_NAME=GrowthParty
LOCALE=en
TIMEZONE=Asia/Singapore
APP_ENV=local
APP_KEY=zfesbnTkXvooWVcsKMw2r4SmPVNGbFoS
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://growthparty.dev

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=growthparty
DB_USERNAME=root
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
```

# Database Schema

#FAQ
> The only supported ciphers are AES-128-CBC and AES-256-CBC with the correct key lengths.
Solution:  
```
cp .example.env .env
php artisan key:generate
```
-----------------------------------------
> Internal server error 500, web app not showing up in linux  
Solution:
Refer to http://stackoverflow.com/questions/30639174/file-permissions-for-laravel-5-and-others

