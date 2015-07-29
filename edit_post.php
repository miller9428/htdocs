<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 7/23/2015
 * Time: 7:51 PM
 */

require_once('db_info.php');

?>


<h1>Create Post</h1>
<form action="edit_post.php" method="POST">
    <input type="text" name="title" placeholder="Create Post Title">
    <input type="text" name="author" placeholder="Who are you?">
    <textarea name="content" row="25" cols="80">Enter Text</textarea>
    <input type="submit" name="submit" value="Add post">

</form>

<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];

}
?>