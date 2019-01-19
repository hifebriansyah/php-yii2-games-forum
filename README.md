# Game Central

Thanks to read me, this is basic guideline about this folder content.

_This file is written using "markdown"_

## Codes that I wrote
* /controllers
* /libs
* /models 
* /tests
* /migrations

## Minimum software specs
* PHP 5.5.9-1
* mysql 5.6.38
* Apache 2.4.7
* Redis 4.0.2
* PhpUnit 4.8

## How to run the codes
Move the source codes to "www" or "htdocs" of Your web server. Open your cli, go to into the source codes folder, then run the command below.

```sh
// install all dependencies
$ composer install

// migrate the db
$ php yii migrate

// load the dummy data
$ php yii fixture/load "*" --interactive=0
```

## How to run unit test
If you have _phpunit_ installed in your machine, then via cli go to source code root and run the command below.

```sh
$ phpunit --bootstrap tests/bootstrap.php tests/
```

alternatively, check this page [phpunit/getting-started](https://phpunit.de/getting-started.html) to use your own preferred way.

## phpDoc ready
All classes including unit tests, comes with docbock, so if you have _phpdoc_ installed in your machine, You can generate documentation automatically. To do so, via cli go to source code root and run the command below.

```sh
$ phpdoc
```

alternatively, check this page [phpdoc](https://www.phpdoc.org/). to use your own preferred way.

## Coding standart 
All classes including unit test are written using PSR standart and validated by [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer).

## Lastly
Thanks for checking out my codes. If you have any question, advise or critize please contact Me at hifebriansyah@gmail.com. 

regard
mf