<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/16/2015
 * Time: 7:07 PM
 */

function pRG($person){
    $greetings=array("Hello", "goodbye", "whatsup");
    $index = rand (0, count($greetings)-1);
    $myGreeting=$greetings{$index];
    echo $myGreeting . $person;
}

pRG("me");