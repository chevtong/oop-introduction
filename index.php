<h3>Exercise 1</h3>
<?php 
    require 'exercise_1_classes.php';

    $cola = new Beverage("black", 2);
    echo $cola->price . "euro <br>";
    echo $cola->getInfo()."<br>";
    echo $cola->temperature;
?>

<h3>Exercise 2</h3>
<?php 
    // require 'exercise_2_extending.php';

    // $duvel = new Beer("blonde", 3.5, "warm","duvel",8.5);
    // echo "Name: ".$duvel->name."<br>";
    // echo "Color: ".$duvel->color."<br>";
    // echo "Info: ".$duvel->getInfo()."<br>";
    // echo $duvel->getAlcoholPercentage()."% <br>";
    // echo number_format($duvel->getAlcoholPercentage(), 2) . "% <br>";
    //echo $cola->getAlcoholPercentage()."% <br>";
?>
<h3>Exercise 3</h3>
<?php 
    require 'exercise_3_private.php';

    $duvel = new Beer("blonde", 3.5, "warm","duvel",8.5);

    echo "Name: ". $duvel->getName()."<br>";
    echo "Color: ".$duvel->color."<br>";
    echo "Info: ".$duvel->getInfo()."<br>";
    echo $duvel->getAlcoholPercentage()."% <br>";
    echo number_format($duvel->getAlcoholPercentage(), 2) . "% <br>";

    $duvel->changeColor("light");
    echo "New Color: " . $duvel->color . "<br>";

    echo $duvel->beerInfo();
?>
