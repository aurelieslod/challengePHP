<?php
$cnx = mysqli_connect("localhost", "root", "","dbtest" );

extract($_POST);

$idChangeUser = $_POST['idUser'];
$changeName = $_POST['changeName'];
$changeUsername = $_POST['changeUsername'];
$changeMail = $_POST['changeMail'];
$changeMessage = $_POST['changeMessage'];
$changeGame = $_POST['changeGame'];


$res = mysqli_query($cnx, "UPDATE challUsers SET name='$changeName', username='$changeUsername', mail='$changeMail', message='$changeMessage', game='$changeGame' WHERE id='$idChangeUser'");

 ?>
