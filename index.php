This is some <strong>bold</strong> text.<br>
This is some <em>italic</em> text.<br>


<?php
echo 'hello class I\'m learning PHP<br>';

echo 45;

echo 45.5678;

echo 'hello' . 'ACA people!';

?>


<h1>Some more HTML!</h1>
<h2>Smaller...</h2>









<?php
$my_text = 'a string';

echo $my_text;

$my_num = 5;
echo '<br>' . $my_num . '<br>';



// operators that can be use with if:
// < less than
// > greater than
// <= greater than or equal
// == equals
// != does not equal

if ($my_num > 10) {
  echo 'it\'s greater than 10!<br>';
} else {
  echo 'it\'s not <br>';
}






$rand_num = rand(1, 10);
echo 'The number I found is ' . $rand_num . '<br>';

echo "With a double quoted \" string: $rand_num,<br>";


if($rand_num % 2 == 0) {
  echo 'even';
} else {
  echo 'odd<br>';
}










//Loops
//do while


$k = 0;
while ($k < 10) {
echo "$k<br>";

$k = $k + 1;

$k += 1;

$k++;


}




$j=0;
do {

echo "$j<br>";
$j++;
} while($j < 10);



//for loop

for ($m = 20; $m < 50; $m++){

//echo "$m ";
echo "$m<br>";

}


echo "after the loop m is $m";






$k = 5;
if ($k > 3) {
?>

<h1>greater than 3!</h1>

<?php
} else {
?>

<h1>less</h1>

<?php
}
?>



<?php

?>