StandardizedJsonResponse
=========
Simple class to prepare standardized JSON response based on JSend specification

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require browomir/StandardizedJsonResponse "dev-master"
```

or add

```
"browomir/StandardizedJsonResponse": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
        $response = new StandardizedJsonResponse();
        $response->setStatus(StandardizedJsonResponse::STATUS_SUCCESS);
        $response->setData(
            array(
                'lorem' => 'ipsum'
            )
        );
        $response->setMessage('The message');

        return $response->getResponse();
```