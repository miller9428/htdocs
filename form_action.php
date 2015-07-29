<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/11/2015
 * Time: 7:36 PM
 */

print_r($_GET);
echo '<br>';
echo '<br>';
echo '<br>';

echo $_GET['first_name'];
echo'<br>';

//or like this

if(isset($_GET['submit'])){
    //form processing goes here
    echo $_GET['first_name'];
    echo '<br>';
    echo $_GET['email'];
    echo '<br.';

}



?>

<form action="day4.php" method="GET">

    <input type="text" name="first_name" value="Enter your first name"><br>
    <input type="text" name="email" value="Enter your email!"><br>

    <input type="submit" name="submit" value="Subscribe to our mailing list!">




</form>