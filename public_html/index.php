<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use HeroProject\Connection;
use function HeroProject\Functions\echoThis;

$connection = new Connection();

$connection->echoThis('Composer is pretty cool!');

echo new HeroProject\Cape\Hero('Superman');

echo PHP_EOL;

echoThis('That all folks!');