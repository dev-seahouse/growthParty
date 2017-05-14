# Setup guide
##### Configure apache vhost
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
