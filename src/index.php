<?php

// This is the starting point of our website.

require_once  __DIR__ . '/../vendor/autoload.php';

use mvc\core\App;

$app = App::get_instance(dirname(__DIR__));

$app->run();

?>