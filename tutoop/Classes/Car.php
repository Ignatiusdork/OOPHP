<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//OOP tutorials
class Car {

    // Properties / Fields
    private $brand;
    private $color;

    // Constructor: it assigns values to the properties when the object is created for the first tym
    public function __construct($brand, $color = "none") {
        $this->brand = $brand;
        $this->color = $color;
    }

    // getter and setter method
    public function getBrand() {
        return $this->brand;
    }

    public function setBrand($brand) {
         $this->brand = $brand;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $allowedColors = [
            "red",
            "blue",
            "green",
            "yellow"
        ];
        if (in_array($color, $allowedColors)) {
            $this->color = $color;
        }
    }

    //Method: is a function directly related to the class
    public function getCarInfo() {
        return "Brand: " . $this->brand . ", Color: " . $this->color;
    }
}

