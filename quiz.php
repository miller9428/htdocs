<?php

$x = -1;
while ($x < 15) {
    $x++;
    echo "$x<br>";
}
echo "<br>";
?>


<?php
$x = 15;
do {
    echo "$x<br>";
}
while ($x < 10);

echo "<br>";
?>


<?php
$num = rand(1, 10);
do
{
    echo "$num<br>";
}
while ($num < 5);

echo "<br>";
?>


<?php
$numbers = array();

$num_elements = 10;
for($i=0; $i<$num_elements; $i++)
{
$numbers[] = $i;
}

for($i=0; $i<$num_elements; $i++)
{
    echo "{$numbers[$i]}<br>";
}
?>