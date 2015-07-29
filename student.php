<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/30/2015
 * Time: 6:06 PM
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