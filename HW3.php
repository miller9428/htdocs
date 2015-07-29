<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/11/2015
 * Time: 12:29 AM
 */

// 1.  Write a function that accepts a string, changes every other character to uppercase,
//     and returns the modified string.

function upper($mystring){

    for ($i=0; $i<strlen($mystring); $i++){
    $c = $mystring[$i];

        if($i %2 == 0){
     $mystring[$i] = ucwords($c);
        }}
        return $mystring;
    }


    echo upper("characters") . "<br>";

?>