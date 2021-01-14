<?php 

declare(strict_types=1);

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties protected.
Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/

require 'exercise_1_classes.php';



class Beer extends Beverage
{
    protected string $name;
    protected float $alcoholPercentage;

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

}

 

$duvel = new Beer("blonde", 3.5, "warm","duvel",8.5);
// var_dump($duvel);
echo "Name: ".$duvel->getName()."<br>";
echo "Color: ".$duvel->color."<br>";
echo "Info: ".$duvel->getInfo()."<br>";
echo $duvel->getAlcoholPercentage()."% <br>";
echo number_format($duvel->getAlcoholPercentage(), 2) . "% <br>";

?>
