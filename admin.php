<?php
session_start();
$cnx = mysqli_connect("localhost", "root", "","dbtest" );

$connect = isset($_SESSION['connect'])? $_SESSION['connect'] : false;

if($connect == false){
  header('location:login.php');
}else{

}

$id = mysqli_query($cnx, "SELECT MAX(id) FROM challenge");
$dat = mysqli_fetch_assoc($id);
$daat =  $dat['MAX(id)'];

$res = mysqli_query($cnx,"SELECT * FROM challenge WHERE id=$daat");
$data = mysqli_fetch_assoc($res);
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
    <style media="screen">
    header.carousel {
        height: 100%;
    }
    </style>


    <title>Admin</title>
  </head>
  <body>
    <?php include('page/navbar.php') ?>
  <!--==================CHANGE ADMIN ====================================================================-->
    <div class="container">
      <div class="row" id="adminModif">

          <div class="col-md-8" id="modifAp">
          <h2>Configuration</h2>

            <form  action="color.php" method="post">
              <div class='col-md-6'>
                <div class="form-group">
                  <label for="colorTitle">Title Color</label>
                  <input class="pull-left" type="color" name="colorTitle" value="<?php echo $data['title'] ?>" id="colorTitle">
                </div>
                <div class="form-group">
                  <label for="colorNavbar">Navbar Color</label>
                  <input class="pull-left" type="color" name="colorNavbar" value="<?php echo $data['navbar'] ?>" id="colorNavbar">
                </div>
                <div class="form-group">
                  <label for="colorUrl">Url Color</label>
                  <input class="pull-left" type="color" name="colorUrl" value="<?php echo $data['url'] ?>" id="colorUrl">
                </div>
                <div class="form-group">
                  <label for="colorButton">Button Color</label>
                  <input class="pull-left" type="color" name="colorButton" value="<?php echo $data['button'] ?>" id="colorButton">
                </div>
              </div>
              <div class='col-md-6'>
              <div class="form-group">
                <label for="police">Police</label>
                  <select class='btn-default btn-sm' name="police" id="police" value="<?php echo $data['police'] ?>">
                    <option value="Oxygen, sans-serif">Oxygen</option>
                    <option value="Quicksand, sans-serif">Quicksand</option>
                    <option value="Roboto, sans-serif">Roboto</option>
                  </select>
                </div>

                <div class="form-group">
                  <input type="button" class='btn-default btn-lg' name="tester" id="tester" value="Tester">
                  <input type="submit" class='btn-default btn-lg' name="submit" id="submit" value="Enregistrer">
                </div>

                <div class="form-group">
                  <label for="">Aperçu :</label><br>
                  <input class='btn-default btn-sm' type="button" name="incIndex" id="btnIndex" value="Home">
                  <input class='btn-default btn-sm' type="button" name="incRepertory" id="btnRepertory" value="Repertory">
                  <input class='btn-default btn-sm' type="button" name="incAbout" id="btnAbout" value="About">
                  <input class='btn-default btn-sm' type="button" name="incContact" id="btnContact" value="Contact">
                </div>
              </div>
              </form>

          </div>

          <div class="col-md-4">
            <h2>Gestion</h2>
            <br>
            <div class="form-group center-block">
              <label for="">New :</label>
              <input type="button" class='btn-default btn-sm ' name="incMessage" id="btnMessage" value="Messages"><br>
            </div>
            <div class="form-group center-block">
              <label for="">Change repertory :</label>
              <input type="button" class='btn-default btn-sm ' name="incModif" id="btnModif" value="Repertory">
            </div>
          </div>
        </div>
      </div>

<!--=========================================================================================================== -->


<!--______________Include Index_________________________-->
        <div id="incHeader">
          <?php include('page/header.php');?>
        </div>
        <div id="incIndex">
          <?php include('page/index.inc.php');?>
        </div>

<!--______________Include Repertory_________________________-->
        <div id="incRepertory">
          <?php include('page/repertory.inc.php');?>
        </div>

<!--______________Include About_________________________-->
        <div id="incAbout">
          <?php include('page/about.inc.php');?>
        </div>
<!--______________Include Contact_________________________-->
        <div id="incContact">
          <?php include('page/contact.inc.php');?>
        </div>
<!--_________________Message Send By Friends_________________-->

<div id='formMessage'>
<?php

  $infos = mysqli_query($cnx, "SELECT * FROM challUsers WHERE valid='0'");

    while($infosData = mysqli_fetch_assoc($infos)){
      echo"

           <div class='col-md-4 img-portfolio imgRepertory' id='idMessage".$infosData['id']."'>
              <img class='img-responsive img-hover' src='uploadedfiles/".$infosData['image']."'>
               <h3>".$infosData['name']."</h3>
               <h4>".$infosData['username']."</h4>
               <h4>".$infosData['mail']."</h4>
               <p>".$infosData['age']." ans<span></span></p>

               <p>".$infosData['message']."</p>
               <h4>".$infosData['game']."</h4>


                <div class='col-md-3'>
                  <form method='post' id='formValid".$infosData['id']."'>
                      <input type='hidden' name='validUser' value='1'>
                      <input type='hidden' name='idUserVal' value='".$infosData['id']."'>
                      <input type='button' onclick='valider(".$infosData['id'].")' id='ok".$infosData['id']."' name='userOk' value='Valider'>
                  </form>
                </div>
                <div class='col-md-3'>
                  <form method='post' id='formDelete'>
                  <input type='hidden' name='deleteUser' value='delete'>
                  <input type='hidden' name='idUser' value='".$infosData['id']."'>
                    <input type='button' onclick='deletee(".$infosData['id'].")' name='userNo' value='Supprimer'>
                  </form>
                </div>
           </div>
           ";
    }
 ?>
        </div>
<!--____________________gestion repertory_________________________-->

        <div id="modifRepertory">
          <?php
          $sql = mysqli_query($cnx, "SELECT * FROM challUsers WHERE valid='1'");
          while($infosSql = mysqli_fetch_assoc($sql)){
            $changeName = $infosSql['name'];
            $changeUsername = $infosSql['username'];
            $changeMail = $infosSql['mail'];
            $changeMessage = $infosSql['message'];
            $changeGame = $infosSql['game'];

            echo"

                 <div class='col-md-4 img-portfolio imgRepertory' id='idMessage".$infosSql['id']."'>
                    <img class='img-responsive img-hover' src='uploadedfiles/".$infosSql['image']."'>
                     <h3>".$infosSql['name']."</h3>
                     <h4>".$infosSql['username']."</h4>
                     <h4>".$infosSql['mail']."</h4>
                     <p>".$infosSql['age']." ans<span></span></p>

                     <p>".$infosSql['message']."</p>
                     <h4>".$infosSql['game']."</h4>
                     <div class='col-md-6'>
                        <button type='button' class='btn btn-primary btn-xs center-block' data-toggle='modal' data-target='#myModal".$infosSql['id']."'>Change</button>
                     </div>
                     <div class='col-md-6'>
                        <form method='post' id='formDelete'>
                          <input type='hidden' name='deleteUser' value='delete'>
                          <input type='hidden' name='idUser' value='".$infosSql['id']."'>
                          <input type='button' class='btn btn-default btn-xs' onclick='deletee(".$infosSql['id'].")' name='userNo' value='Supprimer'>
                        </form>
                     </div>

                     <div class='modal fade' id='myModal".$infosSql['id']."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
                       <div class='modal-dialog' role='document'>
                         <div class='modal-content'>
                           <div class='modal-header'>
                             <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                             <h4 class='modal-title' id='myModalLabel'>Change repertory</h4>
                           </div>
                           <div class='modal-body'>
                             <form method='post'>
                              <input type='hidden' name='idUser' value='".$infosSql['id']."'>
                               <div class='form-group'>
                                 <label for='recipient-name".$infosSql['id']."' class='control-label'>Name :</label>
                                 <input type='text' name='changeName' id='recipient-name".$infosSql['id']."' class='form-control' value='".$changeName."'>
                               </div>
                               <div class='form-group'>
                                 <label for='recipient-username".$infosSql['id']."' class='control-label'>Username :</label>
                                 <input type='text' class='form-control' id='recipient-username".$infosSql['id']."' value='".$changeUsername."'>
                               </div>
                               <div class='form-group'>
                                 <label for='recipient-mail".$infosSql['id']."' class='control-label' >Mail :</label>
                                 <input type='text' class='form-control' id='recipient-mail".$infosSql['id']."' value='".$changeMail."'>
                               </div>
                               <div class='form-group'>
                                 <label for='recipient-message".$infosSql['id']."' class='control-label' >Message:</label>
                                 <textarea class='form-control' id='recipient-message".$infosSql['id']."'>".$changeMessage."</textarea>
                               </div>
                               <div class='form-group'>
                                 <label for='recipient-game".$infosSql['id']."' class='control-label' >Game :</label>
                                 <input type='text' class='form-control' id='recipient-game".$infosSql['id']."' value='".$changeGame."'>
                               </div>


                           </div>
                           <div class='modal-footer'>

                             <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                             <button type='button' class='btn btn-primary' onclick='changeRepert(".$infosSql['id'].")'>Save changes</button>
                           </div>
                            </form>

                         </div>
                       </div>
                     </div>
                 </div>
                 ";
          }

          ?>




        </div>



  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
  $(function(){
    $('.carousel').carousel({
        interval: 5000
    });
  });



function valider(id){
  $.post("gestionMessage.php", {validUser : '1', idUserVal : id}, function(data, status){
  $("#idMessage"+id).css("display", "none");
});
}

function deletee(id){
  $.post("gestionMessageDelete.php", {deleteUser : 'delete', idUser : id}, function(data, status){
  $("#idMessage"+id).css("display", "none");
});
}





 function changeRepert(id){
   var changeName = $('#recipient-name'+id);
   var changeUsername = $('#recipient-username'+id);
   var changeMail = $('#recipient-mail'+id);
   var changeMessage = $('#recipient-message'+id);
   var changeGame = $('#recipient-game'+id);

   $.post("changeRepertory.php", {
     changeName : changeName.val(),
     changeUsername : changeUsername.val(),
     changeMail : changeMail.val(),
     changeMessage : changeMessage.val(),
     changeGame : changeGame.val(),
     idUser : id},
     function(data, status){
         $('#modifOk').html('Change ok !');
       }
 });
 }

  </script>

    <script src="js/main.js"></script>
</html>
