<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use senos_uzduotys\Main;

require __DIR__ . '/../vendor/autoload.php';

$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));
$log->warning('Foo');
$log->error('Bar');


echo Main::run(3);