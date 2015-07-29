<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/11/2015
 * Time: 8:00 PM
 */

if(isset($_POST['submit'])){
    //form processing goes here

        echo $_POST['first_name'];
        echo '<br>';
        echo $_POST['email'];
        echo '<br>';
        echo "<strong><em>$_POST['age']</em></strong><br><br>";
        echo '<br>';

        if(strpos($_POST['email'], '@')  === FALSE) {
            echo "incorrect email format";

        } else if(strpos($_POST['email'], '.') === FALSE) {
            // no . in the email
        } else {
            // all good
    }

}

?>

<form action="GET_POST.php" method="POST">

    <input type="text" name="first_name" value="Enter your first name" onclick="this.value=''"><br>
    <input type="text" name="email" value="Enter your email!" onclick="this.value=''"><br>
  Enter your age:  <select name="age" value="Enter your age" onclick="this.value=''">
        <option>18-30</option>
        <option>31-50</option>
        <option>51-90</option>

    </select><br>

Is this a public company?

    <input> type="radio" name="is_public" value="Yes">Yes<br>
    <input> type="radio" name="is_public" value="No">No<br>

  <input type="submit" name="submit" value="Subscribe to our mailing list!">




</form>