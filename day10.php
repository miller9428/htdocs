<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 7/9/2015
 * Time: 6:32 PM
 */

function scoresIncreasing($scores) {

for ($k=1; $k<count($scores); $k++) {
    if ($scores[$k] < $scores[$k-1]) {
    return "false";
    }
}
    return "true";


    // scores 90  92  93  98


    }

scoresIncreasing(array(96, 98, 100))