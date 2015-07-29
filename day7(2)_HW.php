<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/30/2015
 * Time: 5:18 PM
 */

class School {
    public $students;

    function __construct(){
        $this->students = array();
    }
    function addStudent($student){
        $this->students[]=$student;
    }
}
    function listStudents(){
        foreach($this->students as $s) {
            echo $s->name;
        }
    }
    function getStudent($name){
        foreach($this->students as $s) {
            if ($s->name == $name)
                return $s;
        }
    return FALSE;

    }



$school = new School();

$school->addStudent(new Student("Alice", 3.5, 15));
$school->addStudent(new Student("Bob", 3.0, 10));