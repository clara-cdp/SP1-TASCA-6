<?php

include('Turbo.php');
include('Car.php');

$car1 = new Car("toyota", "MOO_1234", combustible::gas, 220);

echo $car1;
$car1->boost();
