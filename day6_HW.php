<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/28/2015
 * Time: 11:45 PM
 */
class Student {
    public $name;
    public $gpa;
    public $credit_hours;

    function __construct($name, $gpa, $hours) {
        $this->name = $name;
        $this->gpa = $gpa;
        $this->credit_hours = $hours;
    }

    function enrollment_status() {
        if ($this->credit_hours >= 12) {
            return 'full-time';
        } else {
            return 'part-time';
        }
    }

    function letter_grade() {
        if ($this->gpa >= 3.0) {
            return 'A';
        } else if ($this->gpa >= 2.0) {
            return 'B';
        } else if ($this->gpa >= 1.0) {
            return 'C';
        } else {
            return 'F';
        }
    }
}

$bob = new Student("Bob", 2.8, 15);
echo $bob->name . "<br>";
echo $bob->enrollment_status(); //prints "full-time"
echo "<br>";
echo $bob->letter_grade(); //prints 'B'
echo "<br>";
echo "<br>";
$alice = new Student("Alice", 4.0, 10);
echo $alice->name . "<br>";
echo $alice->enrollment_status(); //prints "part-time"
echo "<br>";
echo $alice->letter_grade(); //prints 'A'

?>