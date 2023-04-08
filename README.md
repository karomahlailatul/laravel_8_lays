
# Project ? Laravel 8 Sample

## Install This Project

Please installing Composer, Laravel 8, And xampp with PHP version: 8.2.0

### First Installing the vendor
```
composer update
```

### 2 Create DB
Create new database from xampp, with name laravel

### 3 Copy Env
Copy .env.example and change to .env

### 4 Migrate to DB
Migrate the dataModel 

```
php artisan migrate
```

### 5 Checking Seeder if okay skip this step

```
php artisan db:seed --class=JabatanSeeder
php artisan db:seed --class=KaryawanSeeder
```

### 6 Run this Project

```
php artisan serve
```

Copyright : lays ? maybe