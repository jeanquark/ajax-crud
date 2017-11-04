# AJAX CRUD for Laravel 5.4

Asynchronous actions on a Laravel resource controller. For step by step instructions, visit my [blog post](http://www.jmkleger.com/post/ajax-crud-for-laravel-5-4).

## Installation

Clone the repo
```
git clone https://github.com/jeanquark/ajax-crud.git
```

Move to the newly created folder and install all dependencies:
```
cd ajax-crud
composer install
```

Create a new database, for example with phpMyAdmin. Then open the .env.example file, edit it to match your database name, username and password and save it as .env file. Once done, build tables with the following command:
```
php artisan migrate
```

Now fill the tables:
```
php artisan db:seed
```

Finally, generate the application key 
```
php artisan key:generate
```

Open your favorite browser and visit the newly created app.

## Features
1. Create a new post
2. Show a post
3. Edit a post
4. Delete a post
5. Mark a post as published/unpublished

## Screenshots

Homepage:
![homepage](https://github.com/jeanquark/ajax-crud/raw/master/public/homepage.png "Homepage")

Table:
![table](https://github.com/jeanquark/ajax-crud/raw/master/public/table.png "table")

Create a new post:
![create](https://github.com/jeanquark/ajax-crud/raw/master/public/add.png "add")

## Licence

Please refer to the [Laravel licence](https://opensource.org/licenses/MIT)
