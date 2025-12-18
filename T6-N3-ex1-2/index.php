<?php
require __DIR__ . '/vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slugify = new slugify();

echo $slugify->slugify("I'm gonna make him an offer he can't refuse.");
