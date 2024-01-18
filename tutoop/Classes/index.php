<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, inital-scale=1.0" >
        <title>OOP</title>
    </head>

    <body>
        <?php 
        require_once 'Classes/Car.php';

        $car01 = new Car("BMW", "Blue");

        //echo $car01->setBrand("Toyota");
        $car01->setColor("red");
        echo $car01->getColor();

        echo "<br>";

        ?>
    </body>
</html>