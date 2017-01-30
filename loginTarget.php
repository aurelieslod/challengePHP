<?php
session_start();
$cnx = mysqli_connect("localhost", "root", "","dbtest" );

$_SESSION['name'] = $_POST['name'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['connect'] = false;

$name = $_SESSION['name'];
$password = $_SESSION['password'];

$name = mysqli_real_escape_string($cnx, $name);
$password = mysqli_real_escape_string($cnx, $password);

if($name == 'admin' && $password == 'admin'){
  $_SESSION['connect'] = true;
  header('location:admin.php');
}else{
  $_SESSION['connect'] = false;
  header('location:login.php');
}
 ?>
