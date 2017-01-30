<?php
$cnx = mysqli_connect("localhost", "root", "","dbtest" );

//$data = mysqli_query($cnx, "SELECT * FROM challUsers");
//


extract($_POST);

$validUser = $_POST['validUser'];
$idUser = $_POST['idUserVal'];
if($validUser == '1'){
$res = mysqli_query($cnx, "UPDATE challUsers SET valid='$validUser' WHERE id='$idUser'");
};

//echo $idUser;

//header('location:admin.php');
 ?>
