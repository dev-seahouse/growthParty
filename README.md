# Setup guide
# Database Schema
# Common problem and solutions
> The only supported ciphers are AES-128-CBC and AES-256-CBC with the correct key lengths.
Solution:  
```
cp .example.env .env
php artisan key:generate
```
