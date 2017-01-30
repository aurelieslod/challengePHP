<?php
include_once("connexion.php");
session_start();
$colorTitle = $_POST['colorTitle'];
$colorNavbar = $_POST['colorNavbar'];
$colorUrl = $_POST['colorUrl'];
$colorButton = $_POST['colorButton'];
$police = $_POST['police'];

$res = mysqli_query($cnx, "INSERT INTO challenge (title, navbar, url, button, police) VALUE ('$colorTitle', '$colorNavbar', '$colorUrl', '$colorButton', '$police')");

echo $police;
$_SESSION['colorTitle'] = $colorTitle;
$_SESSION['colorNavbar'] = $colorNavbar;
$_SESSION['colorUrl'] = $colorUrl;
$_SESSION['colorButton'] = $colorButton;
$_SESSION['police'] = $police;

header('location:admin.php');

 ?>
