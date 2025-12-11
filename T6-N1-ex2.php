<?php

#Fes un programa que faci servir almenys un parell de constants màgiques.

class car
{


    public function myClass()
    {
        return __CLASS__;
    }
}

$toyota = new car();
echo "- What are you?\n";
echo "- I am a " . $toyota->myClass() . ".\n";
echo "- Where are you? \n";
echo "- I am here: " . __LINE__ . "\n";
echo "- Can you be more specific? \n";
echo "- In here: " . __FILE__ . "\n";
