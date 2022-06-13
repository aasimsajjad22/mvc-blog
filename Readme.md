### MVC-Blog Application

#### commit - 1
Create folder structure, expose `public/index.php` clas to web server to load `bootstrap/init.php` file which basically bootstrap our application.
- I use altorouter & phpdotenv composer package to load env variables and altorouter is very simple and light weight http router which basically give us match 
- Create a controller `app/Controllers/IndexController` and add `Routing/routes.php` in routes.php file.

#### commit - 2
Create controller and integrate view 
- Registeration page frontend. `resources/views/auth/register.blade.php`
- Login page frontend `resources/views/auth/login.blade.php`
- Blog home page `resources/views/blog/index.blade.php`

#### commit -3 
Create `Classes/Request` class and Base `Models//Base/Model` class for Handling validation and loading data.
- Handling post data
- Loading post data to model
- Handling Validation
- Display error messages on page
- Load old posted data on page