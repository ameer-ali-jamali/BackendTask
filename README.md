<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Freelance like Job Portal
A sample freelance type job portal where a user can post jobs and search others using multiple filters. Application is built using Laravel Php.


## Pre-requisite
Please install following to get started with the project.

* [WAMP 32 bit](https://www.wampserver.com/en/)
* [Composer](https://getcomposer.org/)
* [Laravel 9.x](https://laravel.com/)

## Getting Started
Download the code from repository and follow below given instructions.
* Create `std` named database.
* Rename `.env.example` to `.env`.

![Screenshot (112)](https://user-images.githubusercontent.com/99552615/213943187-ea29ad03-6b7b-4790-8c71-ee1a1c096f6a.png)

### Running
Run the following commands in order.

```
composer update

php artisan migrate:fresh

php artisan db:seed

php artisan serve
```

## Known Errors
* NO APPLICATION ENCRYPTION KEY HAS BEEN SPECIFIED

If you face above issue after running all the above steps & commands, try clicking `Generate App Key` button and refresh the page.

## Random Users
* After This Some Random Users Will Added In Database
* Check User Name From Database
* Role > User Password is (user)
* Role > company password is (company)

## Built With

* [Laravel 9.x](https://laravel.com/)


## Author
* **Ameer Ali Jamali**
