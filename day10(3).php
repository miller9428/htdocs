<?php
$db = new mysqli("localhost", "root", "root", "intro_to_php");
if (isset($_POST['submit'])) {
    $addr = $_POST['address'];
    $s = $db->prepare("INSERT INTO markers(address) VALUES(?)");
    $s->bind_param('s', $addr);
    $s->execute();
}

$result = $db->query("SELECT * FROM markers");
$url="";
foreach($result as $row) {
    $url .= urlencode($row['address']);
    $url .= "|";
}

echo "<img src = https://maps.googleapis.com/maps/api/staticmap?size=400x400&markers=" . $url.">";
?>


<form action="day10(3).php" method="POST">
    <input type="text" name="address">
    <input type="submit" name="submit">

</form>


