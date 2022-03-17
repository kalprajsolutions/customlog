# Laravel Custom Logs

A laravel package for logging logs in custom folders. 

Laravel custom logs is specially build to log user actions in text logs. Its on you how to logs and which activitites to log.


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


## Quick Usage

```php
use Kalprajsolutions\CustomLog\Log;

Log::info( auth()->user()->id , "Action taken!");
```
