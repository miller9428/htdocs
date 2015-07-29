<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 7/21/2015
 * Time: 6:31 PM
 */

//quiz
//Given two arrays, each of length 2, write
//function combine_arrays($first, $second)

$first = array(1,2);
$second = array (7,8);

function combine_arrays($first, $second) {
    return array($first[0],$first[1],$second[0],$second[1]);

}
print_r(combine_Arrays($first, $second));


?>