<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use HeroProject\Connection;
use Stringy\Stringy;

$connection = new Connection();

$connection->echoThis('Composer is pretty cool!');

echo new HeroProject\Cape\Hero('Superman');
echo PHP_EOL;

//use function HeroProject\Functions\echoThis;

//echoThis('That all folks!');

echo Stringy::create('foo     bar')->collapseWhitespace()->swapCase();
echo PHP_EOL;