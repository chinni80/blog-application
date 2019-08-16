# Blog Application with Laravel and VueJS 

In this Blog application,
users can read posts,
Admin user(Admin) can register, login, create, update and delete posts.

#Technologies used to create this application are:

Laravel 5.8
PHP 7.2
MySQL for storing the blog posts
Vue.js for the front end 
XAMPP 

#You can clone the repository or download and follow the below steps to setup it in your computer

1. Download or clone repository.
2. run "npm install".
3. run "npm run watch"
4. php artisan serve

For Installion Clone the repository-

Then cd into the folder with this command-

cd blog-application
Then do a composer install

composer install

Then create a environment file using this command-
cp .env.example .env
Then edit .env file with credentials for your database server.  Give your database credential by updating the below 
two parameters DB_USERNAME, DB_PASSWORD in .env file.

Then create a database named blog and then do a database migration using this command-

php artisan migrate

#Run server using this command-

php artisan serve

Then go to http://localhost:8000 from your browser and view the blog application.



 
