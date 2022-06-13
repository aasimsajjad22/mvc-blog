### MVC-Blog Application

#### commit - 1
Create folder structure, expose `public/index.php` clas to web server to load `bootstrap/init.php` file which basically bootstrap our application.
- I use altorouter & phpdotenv composer package to load env variables and altorouter is very simple and light weight http router which basically give us match 
- Create a controller `app/Controllers/IndexController` and add `Routing/routes.php` in routes.php file.
