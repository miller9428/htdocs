<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/16/2015
 * Time: 7:23 PM
 */

//form activity

//Create a text field and submit button.
//When the form is submitted, run the value of the text field through the function
//of your choice, and display the results.
//combine function to change every other character to uppercase to phase you enter.

//echo upper("characters") . "<br>";

//include('my_functions.php');
require_once('my_functions.php')

if(isset($_POST['submit'])) {
    echo upper($_POST['phrase']);
}
?>


<form action="forms.php." method="POST">
    Phrase: <input type="text" name="phrase"><br>
    <input type="submit" name="submit" value="Every other letter is caps">

</form>

