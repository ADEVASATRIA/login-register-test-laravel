

# REQUIREMENT 
    - Laravel >8
    - Database = PhpMyadmin
    - Bootstrap
# COMAND LINE FOR PROJECT TO COMPLETE
```
 // For Create a Laravel Project
    $ composer create-project --prefer-dist laravel/laravel login-ad-registration

# by duing that task on command create database using xampp and make [Your Database Name] and then 
# After initialization project completes successfully input name of database in .env configuration and change database into [your database name].

 // For Database or Models 
    //After edit user configuration in Laravel configuration
    Use ==> $ php artisan migrate

 // Make Controllers 
    $ php artisan make:controller HomeController
    $ php artisan make:controller LoginController
    $ php artisan make:controller LogoutController
    $ php artisan make:controller RegisterController

// Make Folder Requests and Request php file
    $ php artisan make:request RegisterRequest
    $ php artisan make:request LoginRequest

// Make Folder Services that contain folder Login and inside that Folder Login must have php file such as [RememberMeExpiration.php]

// Initialize Bootstrap
    $ composer require twbs/bootstrap:5.1.3

// Finnally Copy Folder inside Public for Bootstrap

```


# SOURCE 
    - https://codeanddeploy.com/blog/laravel/laravel-8-authentication-login-and-registration-with-username-or-email#Zs4KnfAOGR5ckScBEqWwFJRoa
