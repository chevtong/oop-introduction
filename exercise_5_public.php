<?php

declare(strict_types=1);

/* EXERCISE 5
Copy the class of exercise 1.
change the properties to private.
fix the errors without using getter and setter functions.
change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage 
{
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct(string $color, float $price,string $temperature="cold")
    {
        $this->color=$color; 
        $this->price=$price; 
        $this->temperature=$temperature; 
    }
    public function getInfo():string
    {
        return "This beverage is $this->temperature and $this->color.";
    }

}

$cola = new Beverage("black", 2);
// var_dump($cola);
// echo "<br>";

// echo $cola->price . "euro <br>";
// echo $cola->getInfo()."<br>";
// echo $cola->temperature;

