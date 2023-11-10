<!doctype html>
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

    <!-- Offcanvas Menu End -->
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
                            <li ><a href="indexAdmin.php">Home</a></li>
                 
                            <li class="active"><a href="#">produit</a>
                                <ul class="dropdown">
                                    <li><a href="ajoutProduit.php">Ajout produit</a></li>
                                    <li><a href="listProduit.php">list produit</a></li>
                                
                                </ul>
                            </li>
                        
                     <li ><a href="listUsers.php">list users</a></li>
                        <li ><a href="listCommande.php">commande</a></li>
                     <li ><a href="listContact.php">contact</a> </li>
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
    
    <!-- Js Plugins -->
    <center>
    <form action="enregistementcategorie.php" method="post" enctype="multipart/form-data">
    <div class="container">

      
      <div class="row justify-content-center">
        <div class="col-md-10">
          
          <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">

              <h2 class="mb-5">Ajout   d'un produit</h2>

              <form class="border-right pr-5 mb-5" method="post" id="contactForm" name="contactForm">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="libelle" id="fname" placeholder="libelle">
                    
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="prix" id="lname" placeholder="prix">
                  </div>
                    <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="contiter" id="lname" placeholder="contiter">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                  <textarea class="form-control" name="description" id="message" cols="30" rows="7" placeholder="description"></textarea>

                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                categorie
                    <select name="categorie">
                     <option value="puleHomme">homme</option>
                      <option value="puleFemme">Femme</option>
                    <option value="objet">object</option>
    
    
                        </select>
                       </div>
                     </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                            <input type="file" name="photo" />
                             </div>
                         </div>
                
                            <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary rounded-0 py-2 px-4">send</button>
                    <span class="submitting"></span>
                  </div>
                </div>
              </form>
              
              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>

            </div>
           
          </div>
        </div>  
        </div>
      </div>
</form>
    </center>

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

  <style>
  
    body {
  font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  background-color: #fff;
  color: #000; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Poppins", sans-serif; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }



h2 {
  font-size: 3.5rem;
  font-weight: 700; }

h3 {
  font-size: 2rem;
  font-weight: 700; }

.form-control {
  border: none;
  border-bottom: 1px solid #d9d9d9;
  padding-left: 0;
  padding-right: 0;
  border-radius: 0; }
  .form-control:active, .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000; }

.btn, .form-control {
  height: 55px; }

form.border-right {
  padding-right: 6rem !important; }
  @media (max-width: 991.98px) {
    form.border-right {
      padding-right: 0 !important;
      border-right: none !important; } }

label.error {
  font-size: 12px;
  color: red; }

#message {
  resize: vertical; }

#form-message-warning, #form-message-success {
  display: none; }

#form-message-warning {
  color: #B90B0B; }

#form-message-success {
  color: #55A44E;
  font-size: 18px;
  font-weight: bold; }

.submitting {
  float: left;
  width: 100%;

  display: none;
  font-weight: bold;
  font-size: 12px;
  color: #000; }

</style>
</body>
</html>