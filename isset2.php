<?php

if (isset($_POST['submit'])){
    echo "<strong><em>$_POST[company]</em></strong>";
    echo " - This company has $_POST[employee_count] employees";
}

?>

<form action="isset2.php" method="POST">

    Company: <input type="text" name="company"><br/>

    Employee count: <select name="employee_count">
        <option>0-50</option>
        <option>51-100</option>
        <option>101-250</option>
        <option>251+</option>
    </select><br>
    <input type="submit" name="submit" value="Get Average Salary">

</form>