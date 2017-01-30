<?php
session_start();
// include_once("connexion.php");
//(SELECT MAX(id) FROM challenge")
$cnx = mysqli_connect("localhost", "root", "","dbtest" );

header('content-type: text/css');
ob_start('ob_gzhandler');
header('Cache-Control: max-age=31536000, must-revalidate');


$id = mysqli_query($cnx, "SELECT MAX(id) FROM challenge");
$dat = mysqli_fetch_assoc($id);
$daat =  $dat['MAX(id)'];

$res = mysqli_query($cnx,"SELECT * FROM challenge WHERE id=$daat");
$data = mysqli_fetch_assoc($res);
 ?>
/*------------------Modifications administrateur--------------------------------*/
h1, h2, h3, h4{
  color : <?php echo $data['title'] ;?>;
  font-family : <?php echo $data['police'] ;?>;
}

.navbar-inverse{
  background-color : <?php echo $data['navbar'] ;?>;
}

.navbar-inverse .navbar-nav li a{
  color : <?php echo $data['url'] ;?>;
}
.navbar-inverse .navbar-brand{
  color : <?php echo $data['url'] ;?>;
}
.btn-default{
  background-color : <?php echo $data['button'] ;?>;
  color : <?php echo $data['url'] ;?>;
  border : 1px solid lightgrey;
}
.btn-primary{
  background-color : <?php echo $data['button'] ;?>;
  color : <?php echo $data['url'] ;?>;
  border : 1px solid lightgrey;
}
.btn-primary:hover{
  background-color : lightgrey;
  border : 1px solid lightgrey;
  color : grey;
}
.btn-primary:active{
  background-color : lightgrey;
  border : 1px solid lightgrey;
  color : red;
}
.btn-primary:visited{
  background-color : lightgrey !important;
  border : 1px solid lightgrey;
  color : grey;
}

/*------------------Panneau de configuration-----------------*/

#adminModif label{
  font-weight : normal;
  margin-left : 5px;
}
#adminModif .pull-left{
  border-radius : 0;
  border : none;
  background-color : transparent;
}
#modifAp{
  border-right : 1px solid lightgrey;
}
#adminModif{
  border-bottom : 1px solid lightgrey;
}
#incHeader{
  height : 70%;
}



#incRepertory{
  display : none;
}
#incAbout{
  display : none;
}
#incContact{
  display : none;
}
#formMessage{
  display : none;
}
#modifRepertory{
  display : none;
}

.imgRepertory{
  height : 500px;
}

/* --------------------- Global --------------------- */
html,body {
    height: 100%;
}

body {
    padding-top: 50px;
}


/* --------------------- Home --------------------- */
header.carousel {
    height: 70%;
}

header.carousel .item,
header.carousel .item.active,
header.carousel .carousel-inner {
    height: 100%;
}

header.carousel .fill {
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
}


/* --------------------- Repertory --------------------- */
.img-portfolio {
    margin-bottom: 30px;
}

.img-hover:hover {
    opacity: 0.8;
}

.portfolio-item{
    height: 250px;
    margin-bottom: 30px;
    overflow: hidden;
}


/* --------------------- Contact --------------------- */
form textarea{
    height: 200px;
}

thead{
    background: #333;
    color: #fff;
}
/* --------------------- Footer --------------------- */
footer {
    margin: 50px 0;
}


/* --------------------- Responsive  --------------------- */
@media(max-width:991px) {
    .customer-img,
    .img-related {
        margin-bottom: 30px;
    }
}

@media(max-width:767px) {
    .img-portfolio {
        margin-bottom: 15px;
    }

    header.carousel .carousel {
        height: 70%;
    }
}
