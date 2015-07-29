<?php

if (isset($_POST['submit'])){
    $num=(int) $_POST['number'];
    if($num == 0)
        echo 'not valid';

}else {
    echo 'valid';
}

?>




<form action="day12_HW.php" method="POST">
    Input Number: <input type="text" name="number"<br>
    <input type="submit" name="submit" value="Enter"><br>
</form>




