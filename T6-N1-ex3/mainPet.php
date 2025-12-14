<?php
include('Pet.php');

$doggo = new Cool_Pet("Lassie", "Pal", "Lassie Come Home", 1943);

$doggo2 = new Cool_Pet("Rex", "Reginald von Ravenhorst", "Kommissar Rex", 1994);

echo $doggo . PHP_EOL;
echo $doggo2;
