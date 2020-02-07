# Headfirst MVC

- Targets : leaning and investigate MVC and Relation DB Design with Laravel(php) and 
MySQL

## Sample project

> Jim is a lecturer at a community college, and he wants an application to help him to keep track of the students he is advising. He
wants to know which students register for which courses in which semester and what grade they got in those courses. He also
wants the application to be password protected, with each user having a different login and password, and it must keep track of user
lo
gins/outs.
Your job as a database developer is to design a database that will serve as the back-end of either a web-based or client-server
based application. This database must capture and store all the relevant persistent data that will be used by the application

## Todo

### First step

1. Install PHP lastest version
2. Setup Empty Laravel Project
3. Setup Dev Enviroment for laravel and Learn the basic elements
4. Design Relational DB
5. Create hello world web server
6. Setup for deployment on Heroku

### Second step

1. CRUD forms
2. Layout and templates ( bootstrap )
3. Modified CRUD forms with new UI
4. Simple Authentication : Login
5. Migration : Data seed
6. CRUD Users

### Third step

1. Service: mailer
2. Ion Authentication: login,reset password

## Learn

- Routing
- Middleware

## Funny things

1. **Undefined type 'Route'.intelephense(1009)**

- https://github.com/bmewburn/vscode-intelephense/issues/780

```bash
use Illuminate\Support\Facades\Route; in web.php. It works for me.

```

## PHP Knowledge

1. CLosures

- https://www.codepunker.com/blog/basic-usage-of-closures-in-php
- https://viblo.asia/p/lambda-va-closures-trong-php-DXOGRZZnGdZ
- https://www.php.net/manual/en/class.closure.php
- https://www.php.net/manual/en/functions.anonymous.php

## Laravel basic knowledge

- https://www.youtube.com/channel/UCQI-Ym2rLZx52vEoqlPQMdg

## Relational Model Diagram

![Relational Model Diagram][img1]

## Assets

[img1]: ./images/student-grade-v1.png
