<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>azouzz | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
 <?php
require_once "pdo.php";
 require_once "session.php";
Verifieradmin_session();
 
 
   
 ?>
      <?php
require_once "pdo.php";
 require_once "session.php";
Verifieradmin_session();
$connection=mysqli_connect('localhost','root','','e_commerce');

$sql="SELECT * from admin ";
$res=mysqli_query($connection,$sql);
    ?>
    <!-- Page Preloder -->
     <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
    
        <div class="offcanvas__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
                          <?php
    require_once "enregestrementlogin.php";


if( $_SESSION["admin"] =="0")
{
header('location:login form/loginadmin.php');

}
if( $_SESSION["admin"]=="1")
{
    $nom=$_SESSION["name"];
echo "welcomme $nom  /<a href=deconnexion.php>deconnexion</a>";
}

?>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                         <a href="#"><img src="img/logo.png" alt=""></a>
                        <style>
                            .gh{
                                height: 35%;
                                width :35% ;
                                border-radius: 30%;
                            }
                           
                            </style>
                    </div>
                </div>
                 <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="indexAdmin.php">Home</a></li>
                 
                            <li><a href="#">produit</a>
                                <ul class="dropdown">
                                    <li><a href="ajoutProduit.php">Ajout produit</a></li>
                                    <li><a href="listProduit.php">list produit</a></li>
                                
                                </ul>
                            </li>
                        
                     <li><a href="listUsers.php">list users</a></li>
                        <li><a href="listCommande.php">commande</a></li>
                     <li><a href="listContact.php">contact</a> </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <?php
    require_once "enregestrementlogin.php";


if( $_SESSION["admin"] =="0")
{
header('location:login form/loginadmin.php');

}
if( $_SESSION["admin"]=="1")
{
    $nom=$_SESSION["name"];
echo "welcomme $nom  /<a href=deconnexion.php>deconnexion</a>";
}

?>
                                 </div>
                               
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
     <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
    
                    <table border=1 class='table table-striped'>
                <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
                          <tr> <td>id</td><td> nom </td> <td> email </td> <td> password </td><td> image </td><td>operation</td>
                              </tr>

						  </thead>
                  <?php while($row = mysqli_fetch_object($res)) {?>
                           <tr>
                          <td><?php echo $row->id ?></td>
                          <td><?php echo $row->nom ?></td>
                          <td><?php echo $row->email ?></td>
                          <td><?php echo $row->password ?></td>
                          
                          <td>  <img src= "images/<?php echo $row->image ?>" width="80" height="100">     </td>
                           <td><a href="modifadmin.php?id=<?php echo $row->id ?>">Modifier</a> </a></td>
                           </tr> <?php } ?>                 
             
                                </table> 
                
                </div>
                </div>
            </div>
  
                </div></section></table>     </div>
            </div></div></div>
                </section>
    <!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>