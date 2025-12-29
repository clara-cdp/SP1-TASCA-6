<?php


require 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slugify = new Slugify();


$originalQuote = "I'm gonna make him an offer he can't refuse";
$slugifiedQuote = $slugify->slugify($originalQuote);

echo "Original: " . $originalQuote . PHP_EOL;
echo "Slugified: " . $slugifiedQuote . PHP_EOL;
