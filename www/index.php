<?php

//absolute filesystem path to the web root
define('WWW_DIR', dirname(__FILE__));
       
$container = require __DIR__ . '/../app/bootstrap.php';

$container->getByType('Nette\Application\Application')->run();




