<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/9/2015
 * Time: 7:45 PM
 */

function evenOrOdd($num)
{
    if ($num % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }

}


echo evenOrOdd(50);
echo '<br>';
echo evenOrOdd(51);
?>
