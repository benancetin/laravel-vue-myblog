# Laravel-Vue-Myblog (SPA)

## Overview;
A simple blog webpage (SPA) that was created by using laravel and vue.

## The Screenshots;

![Front Page](https://user-images.githubusercontent.com/36122669/155361637-e4307365-4873-48e4-bfa6-8267efa42fba.png?raw=true "Front Page")
![New Comment Page](https://user-images.githubusercontent.com/36122669/155361658-a334c638-db81-446b-ad1d-7b1538d10625.png?raw=true "New Comment Page")
![Reply Comment Page](https://user-images.githubusercontent.com/36122669/155361670-3c79a1bf-0291-4280-8730-6223ece0d67a.png?raw=true "Reply Comment Page")
![Unit Test](https://user-images.githubusercontent.com/36122669/155363087-350f702d-ad6e-4746-b72c-f1ee8d432797.png?raw=true "Unit Test")


## Technical Specifications;
Docker was not asked but because I'm using docker for my test environment the system was tested on a docker engine that's running on Ubuntu. Mysql server was also a docker container.

- Laravel Version : 7.30.6
- Vue : 2.6.14
- PHP : 7.3
- MySql : 8.0
- Server : Ubuntu 20.04.1 LTS
- Docker : 20.10.7

## Notes About Code;
Followed PSR-2 code standards for coding. (Tested them with the "phpcs" package on linux terminal.)

#### Date and time
I usually store full date and time in the database, and format it according to place I use. For this purpose I have used the "moment" package for vue.

#### For Validation;
Vue validation can be used to validate insert parameters. To keep things simple I have used laravel validation that is working with vue. Any error that laravel validation gives will be printed by vue.

#### The template;
I could use template for the front end, instead I have used bootstrap functions to create a simple responsive page.

## Installation;
To install the container can be created by the command;

```bash
docker-compose up --build -d
```
```bash
docker exec -it myblog.test /bin/bash
```
```bash
composer install
```
And inside the container, The migrations can be created by;

```bash
php artisan migrate
```

Then npm packages can be installed by;

```bash
npm install
```
And to run;

```bash
npm run dev for development
```
```bash
npm run build for production
```

## What else could be done;
#### Nested Comments;
For the nested comments recursive components or child components can be used. I could do that, but since I have limited time I have used a straight list.

#### Pop-up Modal;
For creating comments the submit form can be a modal that slides down or a pop-up modal that shows up on click. But to keep things simple I have used another vue template that appears on click.

#### Jest for Unit Tests;
To test vue components Jest could be used.

