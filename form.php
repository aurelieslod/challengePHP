<?php

$cnx = mysqli_connect("localhost", "root", "","dbtest" );
session_start();

//ini_set('display_errors', 1);

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$game = $_POST['game'];
$message = $_POST['message'];
$valid = $_POST['valid'];
$birthday = $_POST['birthday'];
$file = $_FILES['userfile']['name'];



// if(preg_match("#^[a-zéèàêâùïüëA-Z _.-]{0,30}$#", )){
//   $name = $_POST['name'];
// }







//echo $birthday."<br>";
$date = split("/", $birthday);
//var_dump($date)."<br>";
$birthdayEn = $date[2]."-".$date[1]."-".$date[0];

$age = floor((time() - strtotime($birthdayEn)) / 3600 / 24 / 365);
//echo $age;
//echo $birthdayEn;
//echo $_SERVER['DOCUMENT_ROOT']."/www/phpExos/challenge/challengePHP/uploadedfiles/";

$img = move_uploaded_file($_FILES['userfile']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].
"/www/phpExos/challenge/challengePHP/uploadedfiles/".$_FILES['userfile']['name']);


$res = mysqli_query($cnx, "INSERT INTO challUsers (valid, name, username, mail, game, birthday, image, message, age) VALUE ('$valid','$name','$username', '$email', '$game', '$birthdayEn', '$file','$message', '$age' )");
//echo (int)$res;


header('location:page/contact.php');
 ?>
