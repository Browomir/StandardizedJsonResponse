<?php

if (getenv('TRAVIS') === true) {
    require_once "/home/travis/build/Browomir/standardized-json-response/travis-test/vendor/autoload.php";
} else {
    $vendorDir = __DIR__ . '/../../../';

    if (!@include($vendorDir . 'autoload.php')) {
        die('To run test properly you should install this by composer:
     php composer.phar require browomir/standardized-json-response "dev-master"');
    }
}
