<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 7/23/2015
 * Time: 6:55 PM
 */
$db = new mysqli("localhost", "root", "root", "blog");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL :(<br>";
    echo $db->connect_error;
    exit();

?>