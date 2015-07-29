<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 7/23/2015
 * Time: 6:47 PM

-Make post
-date added to post
-delete post
-search  -index.php
-edit post
-post summary  -summary.php
-images
-social media buttons


 -Order of implementation
 * 1) define what tables we will need - create a database schema (structure)
 * what tables are we going to need?
 * what columns will they have?
 * what are the relationships between the tables?
 * are there any columns in one table that correspond to columns in another?
 *
 *
 Implement database connection
 * write db_info.php that contains the MySQL server name, username, password, and database name.
 * Also create an instance of 'new mysqli()' for the other pages to include
 *
 Implement post insertion
 * FRONT END
 * create edit_post.php
 * form with a text box for author, a huge text box for the post body, and a submit button.
 * a heading "Create Post" or similar
 * Some text describing how to write a post
 *
 * BACK END
 * check if form was submitted
 * grab values from the text fields
 * input validation - make sure all the fields were filled out
 * insert a new row into the database
 *
 *
 * READING
 * Create index.php that includes the db_info.php from above
 * select all blog post from mysql
 * iterate through the result with 'foreach' and display each post
 *   -title, date, author, and post body
 * create HTML tags for the page layout but no styling yet
 *
 *
 * SEARCHING
 * Create a search form with 1 text box and a submit button
 * when form is submitted, run a SELECT query with a WHERE that checks for posts
 */

