# Laravel Custom Logs

A laravel package for logging logs in custom folders. 

Laravel custom logs is specially build to log user actions in text logs. Its on you how to logs and which activitites to log.


[![Build Status](https://github.com/kalprajsolutions/customlog/actions/workflows/tests.yml/badge.svg?branch=master)](https://github.com/kalprajsolutions/customlog/actions)
[![Latest Stable Version](https://poser.pugx.org/kalprajsolutions/customlog/v/stable)](https://packagist.org/packages/kalprajsolutions/customlog)
[![License](https://poser.pugx.org/kalprajsolutions/customlog/license)](https://packagist.org/packages/kalprajsolutions/customlog) 
[![Total Downloads](https://poser.pugx.org/kalprajsolutions/customlog/downloads)](https://packagist.org/packages/kalprajsolutions/customlog)

## Requirements

Laravel 5.1 or Later
PHP 7.1 or Later

## Installation

Installation is a quick 3 step process:

1. Download kalprajsolutions/customlog using composer

### Step 1: Download kalprajsolutions/bitly using composer

Add **kalprajsolutions/customlog** by executing the command:

```
composer require kalprajsolutions/customlog
```

### Step 2: Enable the package in app.php

Register the Service in: **config/app.php**

```php
KalprajSolutions\Bitly\BitlyServiceProvider::class,
```

### Step 3: Configure Bitly credentials

```
php artisan vendor:publish --provider="KalprajSolutions\Bitly\BitlyServiceProvider"
```

Add this in you **.env** file

```
BITLY_ACCESS_TOKEN=your_secret_bitly_access_token
```

### Step 4 (Optional): Configure the package facade

Register the Bitly Facade in: **config/app.php**

```php
return [

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        // ...
        'Bitly' => KalprajSolutions\Bitly\Facade\Bitly::class,
    ],

];
```

## Quick Usage

```php
$url = app('bitly')->short('https://www.example.com/'); // http://bit.ly/abcdefg
```

Or if you want to use facade, add this in your class after namespace declaration:

```php
use Bitly;
```

Then you can use it directly by calling `Bitly::` like:

```php
$url = Bitly::short('https://www.example.com/'); // http://bit.ly/abcdefg
```

In quick usage you can also use Proxy to short the url asap using `->proxy()`

```php
$url = Bitly::proxy('user:pass@1.1.1.1:80')->short('https://www.example.com/'); // http://bit.ly/abcdefg
```

## Advance Usage

This Bitly package allow you to use advance bitlink attributes to customize bitly urls and proxies.

#### Guarding attributes

> Note: While using attribues you will have to provide `->url()` and `->get()` to retrive short url!

**URL**
You will have to provide long URL to this function which will be used to shorten the url.

```php
$url = Bitly::url('http://example.com')->get(); // http://bit.ly/nHcn3
```
