<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/9/2015
 * Time: 8:05 PM
 */
function leet($var){
    for($k = 0; $k < strlen($var); $k++) {


        if ($var[$k] == "i" || $var[$k] == "l") {
            $var[$k] = "1";
        }

        if ($var[$k] == "o") {
            $var[$k] = "0";
        }

        if ($var[$k] == "e") {
            $var[$k] = "3";
        }

        if ($var[$k] == "t") {
            $var[$k] = "7";
        }

        if ($var[$k] == "a") {
            $var[$k] = "@";
        }

        if ($var[$k] == "s") {
            $var[$k] = "5";
        }
//  comparing use ==
//  assigning =

    }
 return $var;
}

echo leet("Hello Hi Thomas");
