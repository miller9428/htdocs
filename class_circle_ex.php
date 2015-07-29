<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/23/2015
 * Time: 8:04 PM
 */

class Circle {
    public $centerX;
    public $centerY;
    public $radius;

    function __construct($centerX, $centerY, $radius){
        $this->centerX = $centerX;
        $this->centerY = $centerY;
        $this->radius = $radius;
    }

    function area() {
        return pi() * $this->radius * $this->radius;
    }

    function perimeter() {
        return (2 * pi() * $this->radius);}
}

$circle = new Circle(10, 10, 50);
echo $circle->area();
echo '<br>';
echo $circle->perimeter();

?>