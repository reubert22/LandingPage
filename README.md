# FreeTax - Landing Page
This is an Landing Page created by Reubert Barbosa
# About
In the future we're gonna have an credit card named FreeTax, and that's basically for those who don't wanna pay extra money on daily transactions.
Are u interested? haha I knew it, who don't want!
# Installation
FreeTax Landing Page requires the latest Laravel 5.4 version and Composer, check the links below to know how to install them:
 - https://laravel.com/docs/5.4/installation
 - https://getcomposer.org/download/

Also, we have to install tasksel and lamp-server, follow the commands:
```sh
$ sudo apt-get install tasksel
$ sudo tasksel install lamp-server
```
Start Apache Server:
```sh
$ sudo systemctl start apache2.service
```
To install phpMyAdmin:
```sh
$ sudo apt-get install phpmyadmin
```
Later, you'll can see it on localhost/phpmyadmin

After this, go to the folder where you're gonna clone this.
Install Git on your local machine, checkout the link:
 - https://git-scm.com/book/en/v2/Getting-Started-Installing-Git

After cloned this repository into some folder, you should do these steps to run the application:
```sh
$ cd folder-where-is-the-clone
```
Then
```sh
$ php artisan serve
```
That should give you an message like this
>Laravel development server started: <http://127.0.0.1:8000>

After this, open your browser and type:
> localhost:8000/landing

FYI: You should gonna to configure your database to work properly.

That's it, you are ready to enjoy!
