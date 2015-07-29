<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 7/7/2015
 * Time: 7:52 PM
 */

//Use a form and $_POST to display a map that's centered on the location
//a user enters.  You can do this by plugging the user's input into a Google
//maps URL..

//Extra credit: Allow the user to control one of the extra options from the
//Google Maps API docs (e.g. zoom, image size, etc)


//Try using one of the interesting input types, like check boxes, radio button,
// or text areas.

//Maps API Docs: https://goo.gl/nRKIu


if (isset($_POST['submit'])) {
  $location = $_POST['zipcode'];
  $level = $_POST['mag'];
    echo "<img src = 'https://maps.googleapis.com/maps/api/staticmap?center=$location&zoom=14&size=$level'>";
}
?>

<form action="day9_3.php"
      method="POST">
    Select location:  <input type="text" name="zipcode"><br>

    Map size: <input type="text" name="mag"><br>
        <input type="submit" name="submit"><br>

</form>
