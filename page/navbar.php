<?php
$connect = isset($_SESSION['connect'])? $_SESSION['connect'] : false;

 ?>

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
                    <a href="_index.php" target="_blank">Home</a>
                </li>
                <li>
                    <a href="page/repertory.php">Repertory</a>
                </li>
                <li>
                    <a href="page/about.php">About</a>
                </li>
                <li>
                    <a href="page/contact.php">Contact</a>
                </li>
                <?php
                  if($connect == true){
                    echo "<li><p class='navbar-text'>Administrateur</p></li>
                        <li><a href='destroy.php'>LogOut</a></li>
                    ";
                  }else{
                    echo "<li><a href='login.php'>Login</a></li>";
                  }

                 ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
