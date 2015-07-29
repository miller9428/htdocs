<?php
//Write function will_squirrels_play($temp, $summer) that returns
//'true' if the squirrels will be out playing given the conditions,
//or 'false' otherwise

//$temp is the temperature, and $summer is 'true' if it is summer.

function will_squirrels_play($temp, $summer) {

//if($summer && $temp >= 65 && $temp <= 95) {
//return 'true';
//else if (!$summer && $temp >= 65 && $temp <= 85) {
//return 'true';
// }
//return 'false';

if ($summer){
    if ($temp >= 65 && $temp <=95){
        return 'true';

    }else {
        return 'false';
    }
} else{

    if ($temp >= 65 && $temp <=85){
        return 'true';
    }else{
        return 'false';
    }
}
}
