
<?php 
require 'exercise_1_classes.php';
require 'exercise_2_extending.php';
?>

<h3>Exercise 1</h3>
<?php 
    $cola = new Beverage("black", 2);
    echo $cola->price . "euro <br>";
    echo $cola->getInfo()."<br>";
    echo $cola->temperature;
?>

<h3>Exercise 2</h3>
<?php 
$duvel = new Beer("blonde", 3.5, "warm","duvel",8.5);
    echo "Name: ".$duvel->name."<br>";
    echo "Color: ".$duvel->color."<br>";
    echo "Info: ".$duvel->getInfo()."<br>";
    echo $duvel->getAlcoholPercentage()."% <br>";
    echo number_format($duvel->getAlcoholPercentage(), 2) . "% <br>";
    echo $cola->getAlcoholPercentage()."% <br>";
?>