<?php

if (isset($_POST['submit'])){
    echo "<strong><em>$_POST[company]</em></strong>";
}

?>

<form action="isset.php" method="POST">
    Company: <input type="text" name="company"><br/>
    <input type="submit" name="submit" value="Get Average Salary">
</form>


