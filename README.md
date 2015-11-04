Standardized Json Response
=========
Simple class to prepare standardized JSON response based on JSend specification

Installation
------------

The preferred way to install this class is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require browomir/standardized-json-response "dev-master"
```

or add

```
"browomir/standardized-json-response": "*"
```

to the require section of your `composer.json` file.


Usage
-----

This simple example show how you can use this class:

```php
require_once 'vendor/autoload.php';
use StandardizedJsonResponse\Response;

$response = new Response();
$response->setStatus(Response::STATUS_SUCCESS);
$response->setData(
    array(
        'lorem' => 'ipsum'
    )
);
$response->setMessage('The message');

echo $response->getEncodedResponse();
```