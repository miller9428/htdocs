<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/11/2015
 * Time: 7:10 PM
 */
//else if example problem:
//Create an array of seasons and pick one randomly.
//Then use an if...else if...else to check if it's summer, winter, or something else.
//Echo some output in each case.

$seasons = array("winter", "fall", "summer", "spring");
$num = rand(0, 3);
$mySeason = $seasons[$num];

if ($mySeason == 'winter') {
    echo "$mySeason" . "it's very cold";
}

else if ($mySeason == 'fall') {
    echo "it's quite nice out";
}

else if ($mySeason == 'summer') {
    echo "it's very hot";
}

else {
    ($mySeason == 'spring');
}
    echo "it's rainy";
}

?>