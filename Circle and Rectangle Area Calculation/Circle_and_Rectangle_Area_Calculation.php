<?php

// Circle_Area_Calculation
abstract class circleShape
{
    abstract public function circleArea($radius);
}

class Circle extends circleShape
{
    public function circleArea($radius)
    {
        return pi() * pow($radius, 2);
    }
}

// Rectangle_Area_Calculation using constructor method
abstract class rectangleShape
{
    abstract public function rectangleArea();
}

class Rectangle extends rectangleShape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function rectangleArea()
    {
        return $this->width * $this->height;
    }
}


$circle = new Circle();
echo "Circle Area: " . $circle->circleArea(7) . "<br>";

$rectangle = new Rectangle(5, 6);
echo "Rectangle Area: " . $rectangle->rectangleArea();

?>