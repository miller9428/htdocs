<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/30/2015
 * Time: 7:24 PM
 */

//Databases
//Review: A place where you cna store structured and persistent data
//   -Structured: the data is stored in tables with columns, which are


$db = new mysqli("localhost", "root", "root", "intro_to_php");
if ($db->connect_errno){
    echo "Failed to connect to MySQL :(<br>";
    echo $db->connect_error;
    exit();
}

$stmt = $db->prepare("INSERT INTO todo_list (item) VALUES (?)");

// ? - things we want to substitute in
// i - corresponding variable has type integer
// d - corresponding variable has type double
// s - corresponding variable has type string


$item = "Make coffee";
$stmt->bind_param("s", $item);

// Actually run the statement with the parameters we've substituted

$stmt->execute();

//
//

$item = "Write some code";
$stmt->execute();

$item = "Collect paycheck";
$stmt->execute();

$sql = "SELECT * FROM todo_list";
$result = $db->query($sql);
if ($result) {
    foreach ($result as $row){
        echo $row['item'] . "<br>";
    }
} else {
    echo $db->error;
}

// Programming Assignment 1:
// Modify the to-do list page from the last class to use MySQL.
// When the "submit" button is clicked, add a row to the todo_list table
// containing the value of the text field.
// When the page is loaded, display all of the todo items.
?>