<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
## How this application works
first requirment:
- PHP 7.4.*
you can download XAMPP package from here (windows) https://www.apachefriends.org/xampp-files/7.4.9/xampp-windows-x64-7.4.9-0-VC15-installer.exe 
this package have mysql, apache server
- composer 
follow the steps of this link to install composer https://getcomposer.org/download/
this application is developed with Laravel 7
in order to run the application first make sure to have XAMPP package,
then download the code 
on the folder where the files of the code exists open command prompt and type command 'composer install' to install the vendor and needed libraries for the application
then run 'npm install'
after that make sure the apache server and mysql are working by checking them from XAMPP control panel
then go to 'localhost/phpmyadmin' and create a database named: mytask
after that you have a .env file you should adjust the following lines to:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mytask
DB_USERNAME=root
DB_PASSWORD=
and then add the following lines to make the APIs work:

FACEBOOK_APP_ID=602033330479628
FACEBOOK_APP_SECRET=08450f79291d56ba8d3bd0d6c5bcbb28
FACEBOOK_REDIRECT=https://localhost:8000/callback

PAYPAL_MODE=sandbox
PAYPAL_SANDBOX_API_USERNAME=sb-w7e47l3119876_api1.business.example.com
PAYPAL_SANDBOX_API_PASSWORD=WJUQ2VZCXSXBUQCP
PAYPAL_SANDBOX_API_SECRET=AWyAc-uIVyF1rAxdaRPAKluyiDKSAYkAxLFjZEs4d7ZR4UtkXOAdOP1A
PAYPAL_CURRENCY=USD
PAYPAL_SANDBOX_API_CERTIFICATE=
after that open the command prompt again and type 
php artisan migrate

here the tables should be created 
after all the application is ready so type in command 'php artisan serve'
it will show you a link http://localhost:8000
you can use the application now
if any error happened contact me with reemtarekmatr97@gmail.com
