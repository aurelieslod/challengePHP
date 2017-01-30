<?php
session_start();

//basename($_SERVER["SCRIPT_FILENAME"], '.php');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"  type="text/css">

    <!-- Custom CSS -->
    <link href="css/main.php" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Quicksand|Roboto" rel="stylesheet">
    <title>Login</title>
  </head>
  <body>

    <?php include('page/navbar.php') ?>
    <div id="containerPage">
      <div id="loginContain" class="center-block">
        <form class="center-block" action="loginTarget.php" method="post">
          <input class="center-block btn-default" type="text" name="name" placeholder="Name"><br>
          <input class="center-block btn-default" type="password" name="password" placeholder="password"><br>
          <input class="center-block btn-default btn-sm" type="submit" name="submit" value="Login">
        </form>
      </div>
    </div>

  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
