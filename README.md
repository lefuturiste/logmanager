# logmanager
Generate log quickly and easily with time, level of warning and client 

-------------------------------------------------

### Dependecies

- PHP >= 5.3

-------------------------------------------------

## 1. Installing

Easy install via composer. Still no idea what composer is? Inform yourself [here](http://getcomposer.org).

```composer require lefuturiste/logmanager```

-------------------------------------------------

## 2. Examples

```php
<?php
require 'vendor/autoload.php';

//Instance of 'log' class
$log = new \LogManager\Log();

//Generate log of info level
$log->info('Your log info message');

//Generate log of error level
$log->error('Your log error message');

//Generate log of success level
$log->success('Your log success message');

//Generate log of warning level
$log->warning('Your log warning message');

```

## 3. Config

The config array can give in instance like :
```php
//default config
[
  "enabled" => true
  "folder" => "log/"
]
```
