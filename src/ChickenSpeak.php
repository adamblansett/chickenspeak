<?php

require_once  __DIR__ . '/../vendor/autoload.php';

use src\Classes\Chicken;

$chicken = new Chicken();

echo $chicken->Speak();

exit(0);