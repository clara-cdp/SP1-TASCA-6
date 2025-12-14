<?php

enum Combustible: string
{
    case gas = "gas";
    case diesel = "diesel";
    case electricity = "electricity";
    case hybrid = "hybrid";
}

class Car
{

    use Turbo;

    public string $brand;
    public string $plaqueNumber;
    public Combustible $combustible;
    public int $maxVelocity;

    public function __construct(string $brand, string $plaqueNumber, Combustible $combustible, int $maxVelocity)
    {
        $this->brand = $brand;
        $this->plaqueNumber = $plaqueNumber;
        $this->combustible = $combustible;
        $this->maxVelocity = $maxVelocity;
    }

    public function __toString()
    {

        return sprintf(
            "Car manufacturer: %s | Plaque number: %s | Combustible type: %s | max velocity: %s\n",
            $this->brand,
            $this->plaqueNumber,
            $this->combustible->value,
            $this->maxVelocity . "mph."
        );
    }
}
