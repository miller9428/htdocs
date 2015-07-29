<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 7/16/2015
 * Time: 7:21 PM
 */

//while loops

//$k = 0;
//while ($k < 10) {
//    echo "$k<br>";
//    $k++;
//}



//1. counts from 10 to 20 using <=
$k = 10;
while ($k <= 20) {
    echo "$k<br>";
    $k++;
}


echo "<br>";


//2. counts from 10 to 19 using <

$k = 10;
while ($k < 20) {
    echo "$k<br>";
    $k++;
}

echo "<br>";

//3. counts backwards from 101 to 80, counting by 3

$k = 101;
while ($k >= 80) {
    echo "$k<br>";
    $k=$k-3;
}
echo "<br>";
//4. Displays the letters from 'a' to 'z' (hint: the 'ord' function converts from
//a letter to its corresponding number, and the 'chr' function converts from number
// to its corresponding letter.

$k = ord('a');
while ($k <= ord('z')) {
    echo chr($k) . "<br>";
    $k++;
}



?>





