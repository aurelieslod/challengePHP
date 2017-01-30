<?php
session_start();
$_SESSION = array();

session_destroy();

$_SESSION['connect'] = false;
header("location:admin.php");

 ?>
