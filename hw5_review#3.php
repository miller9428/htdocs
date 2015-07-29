<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/23/2015
 * Time: 7:08 PM
 */


function has456($array){
    for($k=0; $k < count($array)-2; $k++){
        if ($array[$k]== 4 && $array[$k+1] == 5 && $array[$k + 2] == 6){
            return 'true';
        }
    }
    return 'false';
}