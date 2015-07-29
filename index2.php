<?php

$degrees = array("Marketing" => 120,
    "Electrical Engineering" => 130,
    "Integrative Studies" => 110,
    "Feminist Studies" => 120,
    "Computer Science" => 100);
$degrees["Biology"] =150;
foreach($degrees as $deg => $hours) {
    echo "$deg takes $hours hours!<br>";

}
echo '<br>';

?>


<?php

$j=5;
$k=3;

echo 'a';

if($j<10) {
    echo 'b';
    $k+=1;
    if($k>5) {
        echo 'c';
    } else {
        echo 'd';
    }
}
echo 'e';
?>


echo '<br>';

<?php
echo "I'm a string! ";
echo 'I\'m another string! ';
echo 'And I\\\'m another.';
?>

<?php
$array1 = array("blue1", "green2", "yellow3", "purple4", "white5", "black6",
    "pink7", "brown8", "red9", "silver10";
echo "$array1";
?>
