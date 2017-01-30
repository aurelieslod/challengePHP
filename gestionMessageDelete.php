<?php
$cnx = mysqli_connect("localhost", "root", "","dbtest" );


extract($_POST);

$deleteUser = $_POST['deleteUser'];
$idUser = $_POST['idUser'];
if($deleteUser == 'delete'){
  $res = mysqli_query($cnx, "DELETE FROM challUsers WHERE id='$idUser'");
};

//header('location:admin.php');

 ?>
