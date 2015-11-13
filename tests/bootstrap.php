<?php

$vendorDir = __DIR__ . '/../../../';

if (!@include($vendorDir . 'autoload.php')) {
    die('To run test properly you should install this by composer:
     php composer.phar require browomir/standardized-json-response "dev-master"');
}
