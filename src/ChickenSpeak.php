<?php

require_once  __DIR__ . '/../vendor/autoload.php';

use src\Classes\Chicken;
use src\Classes\Rooster;
use src\Classes\Hen;

$chicken = new Chicken();

echo $chicken->speak();
echo $chicken->sleep();
echo $chicken->wakeUp('chicken');

$rooster = new Rooster();

echo $rooster->speak();
echo $rooster->sleep();
echo $rooster->wakeUp('rooster');
echo $rooster->crow();


$hen = new Hen();

echo $hen->speak();
echo $hen->sleep();
echo $hen->wakeUp('hen');
echo $hen->layEgg(10);

exit(0);