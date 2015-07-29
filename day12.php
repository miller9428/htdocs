<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 7/16/2015
 * Time: 6:30 PM
 */

function array_front9($nums) {
    for ($k=0; $k < 4; $k++){
    if ($k < count($nums) && $nums[$k] ==9 )
        return "true";

    }
    return "false";
}

result =  array_front9(array(9, 0, 0, 0));
echo $results;


 ?>







//        function has456($array){
//            for($k=0; $k < count($array)-2; $k++){
//                if ($array[$k]== 4 && $array[$k+1] == 5 && $array[$k + 2] == 6){
//                    return 'true';
//                }
//            }
//           return 'false';
//}()