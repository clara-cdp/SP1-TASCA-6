<?php

class Cool_Pet
{
    public string $name;
    public string $realName;
    public string $FamousFor;
    public int $year;


    public function __construct(string $name, string $realName, string $famous, int $year)
    {
        $this->name = $name;
        $this->realName = $realName;
        $this->FamousFor = $famous;
        $this->year = $year;
    }

    public function __toString()
    {

        return "Hi, my name is $this->realName! and I played the original $this->name in \"$this->FamousFor\" in $this->year. ";
    }
}
