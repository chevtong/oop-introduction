<?php
/* EXERCISE 3
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/
declare(strict_types=1);
//require 'exercise_1_classes.php';


class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

    public function __construct(string $color, float $price,string $temperature, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature="cold");
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;   
    }

     public function getAlcoholPercentage()
    {
        return $this->alcoholPercentage;
    }

    public function getName()
    {
         return $this->name;
    }
   
    public function changeColor($color)
    {
        return $this->color = $color;
    }

    public function beerInfo()
    {
        return "Hi i'm $this->name and have an alochol percentage of $this->alcoholPercentage and I have a $this->color color.";
    }

}




