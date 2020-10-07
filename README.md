The Modern stronge structure of your next Laravel project. built  with Laravel jetstream and Livewire, fortify , built with Sanctum authentication system
that support (api, web, spa apps) ,Frontend with TailWindCSS Freamwork .. many Features (email verification , reset password , spatie permeation system , 
strong routes structure, two factor authentication, Notification ...etc).. and more Features will Come ..

# Modern Laravel Starter

this is Your starting Point for your next Laravel V8.x application, this project will help you to start with Laravel v8.x,
according to new important release notes related to Routes and Models and Controllers Changes.

it is contain Some instructions in comments with every file .

Documentaion will grow with development grow.

## [Demo](https://omaralalwi.live/)

## Features

This project built with huge of Features these are the most important Features:

#### 1 - Core Features

Built with many of Features are come with Laravel:

- Latest Laravel Version [Laravel V8.x](https://laravel.com/docs/8.x) .
- Modern Laravel Scaffold [JetStream](https://jetstream.laravel.com/1.x/stacks/livewire.html) and  [Livewire](https://jetstream.laravel.com/1.x/stacks/livewire.html) (SPA Application without JS), with Authentication System [Laravel Fortify](https://github.com/laravel/fortify).
- Modern Frontend Freamwork [TailWindCSS](https://tailwindcss.com/) .
- Modern Web and API Authentication System [sanctum](https://github.com/laravel/sanctum) (for Web and Mobile appications and SPA appications) .

#### 2 - Built in Features

these features are built in with laravel8 and up, but did not configured be dafault,
 We configured them perfectly to give you rady to go.
 
- Login, registration, email verification, Reset Password.
- Two-factor authentication -> every user enable it in his profile page .
- Session management .
- API support via Laravel [sanctum](https://github.com/laravel/sanctum) .
- User Profile Page .
- change user Avatar function.
- Browser Sessions function .
- Delete Account function .
- Change password function .
- User Can Generate unlimited of API Tokens with permations from Control panel.

#### 3 - Extra Features

these Features we added them for you ,, because new laravel version change many things 
like models namespace and default routes name space, so we make example for every 
thing to give you starting point to go ..

- Routes are Structured perfectly, and seperated to multiple files according to namespace and prefix, all routes in api or web
 arranged perfectly to accommodate large projects, Also Controllers and views files

- Examples for Models and Controllers.
- DB migrations and Seeders and Factories examples.
- Email Notifications and Custom Markdown Styles.
- Best permission system [Spatie permission](https://github.com/spatie/laravel-permission/tree/master)

## Installation

Use the PHP package manager [Composer](https://getcomposer.org/) to install this project in your server or local development pc.

#### 1 - clone Project

colone project from gitlab or github the go inside project directory with the follwing 2 lines of commands:-

```bash
- git clone git@github.com:omaralalwi/modern_laravel_starter.git
- cd modern_laravel_starter
```

#### 2 - create .env file if not exist & Setting Up Environment & Add the DB and smtp Credentials

setting up your environment variables and  make sure to create a new database and add your database credentials to your .env file:

the follwing section for DB configuration

```
DB_HOST=localhost
DB_DATABASE=Your DB Name
DB_USERNAME=Your DB User Name
DB_PASSWORD=Yourr DB Password
```

the follwing section for SMTP configuration, it is important
to work with email verification and reset password.

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=your_gmail_user_name@gmail.com
MAIL_PASSWORD=your_gmail_application_password
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=no-reply@me.local
MAIL_FROM_NAME="${APP_NAME}"
MASTER_EMAIL_TITLE="Modern Laravel Starter"

```
you can change it according your smtp provider (mailgun , mailtrip, ...etc).

these Features we enabled it be default, if you don't need you can disable them by remove  implements MustVerifyEmail in user Model 
and comment the follwing lines in features array in config/fortify file:
	- Features::emailVerification(),
	- Features::resetPasswords(),


#### 3 -  Edit AppServiceProvider it this is first  time istall project

 Edit AppServiceProvider to avoid too long error when making migration, see how to edit it from [here](https://laravel-news.com/laravel-5-4-key-too-long-error), but this project solved.

#### 4 -  install project packages

```bash
composer install
```

#### 5 -  make database migration and  Seeders to generate random data in your DB

migrate database tables and generate random data in (users and invoices) tables  with follwing commands:

```php
 php artisan migrate
 php artisan db:seed

```

#### 6 -  create app key

```php
 php artisan key:generate
```

#### 7 -  create storage link

```php
 php artisan storage:link
```

  Then do not forget to install javascript packages and libraries.

#### 8 -  make sure you installed Nodejs and NPM package Manager

if you did not have idea about NodeJS and NPM please take idea before complete [nodejs](https://nodejs.org/en/) [NPM](https://www.npmjs.com/) OR [yarn](https://yarnpkg.com/) packages manager.

#### 9 -  install javascript packaes

```js
 npm install OR yarn install
```
#### 10 -  run js development mode

```js
 npm run dev OR  npm run watch
```
#### 11 -  if your project is live in production mode, Do the next command instead of the previous one 

```js
 npm run production
```

#### 12 -  run project

```php
 php artisan serve
```
#### 12 -  open browser and type localhost:8000
 That is it ^_^
 
## Important Note
 
 there are many Important release notes with Laravel V8.x by Mr. Taylor Otwell,
 please read them from Laravel officail Website  [Laravel V8.x Release Notes](https://laravel.com/docs/8.x/releases)

## Test Email
 
To test email sending and Notifications with custom markdown, make sure you made the seeders and configured smtp settings then do the follwing:

- login to phpMyadmin -> project db -> invoices table .
- change first invoice user_id to 1 .
- go to users table -> change first user email to your own real email .
- open localhost:8000/send-email in browser .
- you will see null word in screen and receive test email message in your email -> that you put in in previous  step. 


## Versions

-  [Livewire Version]() this Current Version with Laravel JetStream Livewire + Blade scaffolding Version.

- Inertia.js + Vue Version will Availible Soon.

## Screenshots

these some screenshotes 

![Screenshot 0](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/modern_laravel_starter/0.png)

![Screenshot 1](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/modern_laravel_starter/1.png)

![Screenshot 2](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/modern_laravel_starter/2.png)

![Screenshot 3](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/modern_laravel_starter/3.png)

![Screenshot 4](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/modern_laravel_starter/4.png)

![Screenshot 5](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/modern_laravel_starter/5.png)

## Thanks 
 
 Thanks for Most Strong and Powerful Web Development Freamworks

- PHP Freamwork Laravel [https://laravel.com](https://laravel.com/docs/8.x/) .

- Laravel [jetstream](https://github.com/laravel/jetstream) .

- CSS framework TailwindCSS [https://tailwindcss.com](https://tailwindcss.com/) .

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change in this project.

or Email Me : [contact@omaralalwi.info](mailto:contact@omaralalwi.info)

## Security Vulnerabilities 

If you discover a security vulnerability or bugs or issues ,, please email me: [contact@omaralalwi.info](mailto:contact@omaralalwi.info).

## License

This  Project is open sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).