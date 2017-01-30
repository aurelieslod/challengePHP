<?php
session_start();

//basename($_SERVER["SCRIPT_FILENAME"], '.php');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>

    <form  action="loginTarget.php" method="post">
      <input type="text" name="name" placeholder="Name"><br>
      <input type="password" name="password" placeholder="password"><br>
      <input type="submit" name="submit" value="Login">
    </form>
  </body>
</html>
