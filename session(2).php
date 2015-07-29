<?php

$db = new mysqli("localhost", "root", "root", "intro_to_php");
if ($db->connect_errno){
    echo "Failed to connect to MySQL :(<br>";
    echo $db->connect_error;
    exit();
//session_start();

//if (!isset($_SESSION['list'])) {
//  $_SESSION['list'] = array();
}

if (isset($_POST['submit'])) {
  // add the text in 'todo'
  // to the SESSION variable 'list'
//  array_push($_SESSION['list'],
//            $_POST['todo']);
    $stmt = $db->prepare("INSERT INTO todo_list (item) VALUES (?)");
    $stmt->bind_param("s", $_POST['todo']);
    $stmt->execute();
}

?>

<form action="session.php"
      method="POST">

<input type="text" name="todo">
<input type="submit" name="submit">

</form>
<ul>
<?php
  // use a foreach loop to print out
  // the contents of 'list'
 // foreach ($_SESSION['list'] as $x)
 // echo "<li>$x</li>";
?>
</ul>
