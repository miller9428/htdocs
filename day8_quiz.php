<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/30/2015
 * Time: 7:10 PM
 */

//Write 'function combineStrings($a, $b)'


function combineStrings($a, $b){}

    if (strlen($a) > strlen($b)) {
    echo $b . $a . $b;
    } else {
        echo $a . $b . $a;
    }
}

?>