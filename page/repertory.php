<?php
$cnx = mysqli_connect("localhost", "root", "","dbtest" );
$res = mysqli_query($cnx, "SELECT * FROM challUsers WHERE valid='1'");

 ?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Challenge PHP de </title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/main.php" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Quicksand|Roboto" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Left -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>
            <!-- Right -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../_index.php">Home</a>
                    </li>
                    <li>
                        <a href="page/repertory.php">Repertory</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Repertory</h1>
                <ol class="breadcrumb">
                    <li><a href="../index.html">Home</a>
                    </li>
                    <li class="active">Portfolio</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

      <?php
      while($infosData = mysqli_fetch_assoc($res)){
        echo"
        <div>
             <div class='col-md-4 img-portfolio imgRepertory'>
                <img class='img-responsive img-hover' src='../uploadedfiles/".$infosData['image']."'>
                 <h3>".$infosData['name']."</h3>
                 <h4>".$infosData['mail']."</h4>
                 <p>".$infosData['age']." ans<span></span></p>

                 <p>".$infosData['message']."</p>
                 <h4>".$infosData['game']."</h4>

             <table class='table table-striped  table-hover'>
                   <thead>
                       <tr>
                           <th>Game</td>
                           <th>Username</td>
                       </tr>
                   </thead>
                   <tr>
                       <td>".$infosData['game']."</td>
                       <td>".$infosData['username']."</td>
                   </tr>
               </table>
               </div>
             ";
      }



       ?>


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; SimplonBSM 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>


</body>

</html>
