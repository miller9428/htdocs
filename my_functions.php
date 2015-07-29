<?php
function upper($mystring){

    for ($i=0; $i<strlen($mystring); $i++){
        $c = $mystring[$i];

        if($i %2 == 0){
            $mystring[$i] = ucwords($c);
        }}
    return $mystring;
}
?>