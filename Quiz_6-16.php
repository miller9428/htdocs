<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/16/2015
 * Time: 6:33 PM
 */

// Make a page with a text field and submit button.  When the form is submitted, display the value
// entered in the text field on the page in bold and italics.

if(isset($_POST['submit'])) {
echo "<strong><em>$_POST[company]</em></strong>";
}
?>


<form action="Quiz_6-16.php." method="POST">
    Company: <input type="text" name="company"><br>
    <input type="submit" name="submit" value="Get average salary">

</form>


