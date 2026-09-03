<?php

class PizzaPi
{
    public function saucePerPizza(): int
    {
        return 125;
    }

    public function slidesPerPizza(): int
    {
        return 8;
    }

    public function PI(): float
    {
        return 3.14159265359;
    }
    
    public function calculateDoughRequirement($number_of_pizzas, $number_of_persons): int
    {
        // throw new \BadFunctionCallException("Implement the function");
        return $number_of_pizzas * (($number_of_persons * 20) + 200);
    }

    public function calculateSauceRequirement($number_of_pizzas, $cans_of_sauce): int
    {
        // throw new \BadFunctionCallException("Implement the function");
        return $number_of_pizzas * $this->saucePerPizza() / $cans_of_sauce;
    }

    public function calculateCheeseCubeCoverage($cheese_dimension, $thickness, $pizza_diameter): int
    {
        // throw new \BadFunctionCallException("Implement the function");
        return $cheese_dimension**3 / ($thickness * $this->PI() * $pizza_diameter);
    }

    public function calculateLeftOverSlices($number_of_pizzas, $number_of_friends): int
    {
        // throw new \BadFunctionCallException("Implement the function");
        return $number_of_pizzas * $this->slidesPerPizza() % $number_of_friends;
    }
}
