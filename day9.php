<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 7/7/2015
 * Time: 6:32 PM
 */
//Quiz
function doubleEveryCharacter($str){
    $result = "";
    for ($k=0; $k<strlen($str); $k++){
        $result .= $str[$k] . $str[$k];
    }
    return $result;
}
