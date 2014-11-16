## Laravel + Boostrap + Blade Templating
This is a Laravel 4.2 web app that demonstrates

1. Configuring your environment
2. Basic user authentication
3. Using Laravel blade templating
4. Creating simple forms with laravel
5. Sending mails with Laravel
6. Flashing messages to session and displaying them to user

### Configuring your environment
If you're developing with laravel homestead or forge this step is mostly irrelevant. If you're not, however, the three most important files you usually need to modify are
- start/global.php
- bootstrap/start.php
- app/config/database.php or app/config/local/database.php

Ensure that your database is configured properly and that your `bootstrap/start.php` has your hostname properly included. You can run

> hostname

on your PC to find out your hostname.

### Basic user authentication
*See* [Authenticating users](http://laravel.com/docs/4.2/security#authenticating-users)

Laravel authentications are pretty straight forward but ensure that your users's password field length is 64 or be prepared to face the wrath of Sango.

### Using Laravel Blade Templating
*See* [Laravel Blade Templating](http://laravel.com/docs/4.2/templates#blade-templating)

Laravel offers a powerful templating engine called Blade which allows you to easily build themes/control view layout for your site. The demo shows how you can have a unified header, navbar, footer, and sidebar as well as dynamially load 'Page Title' for your pages.

### Creating simple forms with Laravel
The [authenticate](https://github.com/xwiz/larablade/blob/master/app/controllers/UserController.php#L67) and [registerUser](https://github.com/xwiz/larablade/blob/master/app/controllers/UserController.php#L38) methods in UserController show how to process input data from the login and register form views.

### Sending mail with Laravel
The mail function enables you to easily send mail with Laravel as well as to configure how your mails are sent. In this demo, when a user signs up, we send the user an email along with a custom message. Note the `use($usr)` on [line 53](https://github.com/xwiz/larablade/blob/master/app/controllers/UserController.php#L53). This enables us to use $usr in the scope of the `Mail::send` function

### Flashing messages to session
There are two major ways to send your data to views in laravel. Using the Session::flash method which sets a temporary data to the session or using `View::make('some.view')->withData($data)` which sends some `$data` directly to your specified view file.

It is important to note that `Redirect::to('some/view')->withData($data)` works in a different way from `View::make('some.view')->withData($data)`. The first puts the data in the session while the second passes the `$data` directly as a variable to the view file.

## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
