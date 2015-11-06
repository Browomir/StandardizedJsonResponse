Standardized Json Response
=========
Simple class to prepare standardized JSON response based on [JSend](http://labs.omniti.com/labs/jsend) specification

Installation
------------

The preferred way to install this class is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require browomir/standardized-json-response "dev-master"
```

or add

```
"browomir/standardized-json-response": "dev-master"
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

[![Latest Stable Version](https://poser.pugx.org/browomir/standardized-json-response/v/stable)](https://packagist.org/packages/browomir/standardized-json-response) [![Total Downloads](https://poser.pugx.org/browomir/standardized-json-response/downloads)](https://packagist.org/packages/browomir/standardized-json-response) [![Latest Unstable Version](https://poser.pugx.org/browomir/standardized-json-response/v/unstable)](https://packagist.org/packages/browomir/standardized-json-response) [![License](https://poser.pugx.org/browomir/standardized-json-response/license)](https://packagist.org/packages/browomir/standardized-json-response)