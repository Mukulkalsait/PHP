<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="color: white;">
    <!-- <form action="3_GetPost.php" method="post"> -->
    <form action="3_GetPost.php" method="get">
      <input type="text" name="username" placeholder="username"><br> 
      <input type="text" name="password" placeholder="password"><br> 
      <input type="submit" name="submit" value="Log in" placeholder="Login"><br>
      <!-- <input type="text" name="" placeholder=""><br>  -->
    </form>
    <!-- </form> -->
</body>
</html>




<?php
 #  G: PHP start
error_reporting(E_ALL);
ini_set('display_errors', 1);


echo "{$_GET["username"]} <br>";
echo "{$_GET["password"]} ";

// echo "{$_POST["username"]} <br>";
// echo "{$_POST["password"]} ";

// NOTE: only one will work at a time if SAME VARIABLES are present
// there may be a way to use differentmethods for different puropse
// ther should be way to user if one is not present with IF ELSE method.



// IMP:   GET :  for search pages
// char limit
// Bookmark is possible
// GET request can be CACHED ***
// B: inside URL

// IMP:   POST: for Credentials.
// NO data limit.
// cannot Bookmarked & request cannot be CACHED.
// B: inside HTTP header
?>
