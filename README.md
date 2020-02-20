# Headfirst MVC

- Targets : leaning and investigate MVC and Relation DB Design with Laravel(php) and 
MySQL

## Sample project

> I need an app to allow me learning engligh efficiently, it is all about memorizing. There is a method which helps you to learn fast and be able to use what you learn. It is called "spaced repetition learning". The main idea is

> **You will review when you start to forget it**

- Ref : https://www.youtube.com/watch?v=cVf38y07cfk

> **As a user i need:**

- I can register an account
- I can logged in to system with my registered account by my identity and password.
My identity can be email or phone number.
- I can reset my password in case i forgot
- I want my account is more secured by enabling 2 step auth with my phone number. If i can not auth with my phone number, i need a way to access my account settings and disabled 2 step auth

> **As an english learner i need:**

- I can create my word list and group them by my custom labels
- I want to select words from the list to make a list i need to learn today
- I want to do a test to make sure i remember the word list i've learned yesterday before i start with a new word list
- I want to do a test every weekend or every 2 weeks to review my word list.
- I want to know which words i need to review again
- I want to use the words that i learned to make an essay to short topic and need to know is it correct or not
- I want to receive the answers from someone who knows engligh and be willing to help me to correct my essay or topic
- I want to contribute to the community by creating tests base on my word lists and share with other members.
- I want to do multiple kind of tests: meaning, images, fill in the blank, ... with quiz

> **As an owner of this service i want:**

- Someone who used the system need to pay me an amount for daily/monthly/yearly
- I want to reward for someone who contribute to the community by adding more free time for them to use the system
- I want to introduce my system to everyone, so i need the system to allow user who registered can try the free service in a specific period of time

> **As a developer of a system i need:**

- To log the errors to allow me to fix if something went wrong

## Todo

### First step

1. Install PHP lastest version
2. Setup Empty Laravel Project
3. Setup Dev Enviroment for laravel and Learn the basic elements
4. Design Relational DB
5. Create hello world web server
6. Setup for deployment on Heroku

### Second step

> ### Design system with DDD pattern

**Analyzing some essential points**

1. User Domains
2. Layers
3. Ubiquitous Language
4. Entities and Value Objects
5. Aggregates
6. Services
7. Modules
8. Repositories
9. Factories


**Advanced: Domain Events**

**Ref**

- http://blog.sapiensworks.com/post/2012/02/10/Entities-vs-Value-Objects-by-Example.aspx


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
