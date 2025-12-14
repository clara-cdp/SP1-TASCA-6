<?php

require('Car.php');

$toyota = new car();
echo "- What are you?\n";
echo "- I am a " . $toyota->myClass() . ".\n";
echo "- But, where are you? \n";
echo "- I am here: " . __LINE__ . "\n";
echo "- Can you be more specific? \n";
echo "- In here: " . __FILE__ . "\n";
