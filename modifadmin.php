<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>modifier produit </title>
  </head>
  <body>
  <?php
    require_once "pdo.php";
    require_once "session.php";
     Verifieradmin_session();

/* récupération des données du formulaire */
require_once ("pdo.php");
$id = $_GET['id'];

try{
    $req="SELECT * FROM admin where id='$id'";
    $res=$pdo->query($req);
    $data=$res->fetchAll(PDO::FETCH_ASSOC);
    if (count($data)===1){
        $nom=$data[0]["nom"];
        $email=$data[0]["email"];
        $password=$data[0]["password"];
        $image=$data[0]["image"];
    }
} catch(PDOException $e){
    echo "ERREUR : ".$e->getMessage(). " LIGNE : ".$e->getLine();
}


?>
  
<center>
    <form action="modifyadmin.php" method="post" enctype="multipart/form-data">
    <div class="container">

      
      <div class="row justify-content-center">
        <div class="col-md-10">
          
          <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">

              <h2 class="mb-5">modifier un admin   </h2>


                <div class="row">
                  <div class="col-md-6 form-group">
                       <input type="text" class="form-control" name="id"  id="nom"  placeholder="nom"value="<?php echo($id)?>">
                    <input type="text" class="form-control" name="nom"  id="nom"  placeholder="nom"value="<?php echo($nom)?>">
                    
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="email" id="lname" placeholder="email"value="<?php echo($email)?>"> 
                      <input type="text" class="form-control" name="password" id="lname" placeholder="email"value="<?php echo($password)?>">
                
                </div>
                      </div>  
               <div class="row">
                              <div class="col-md-12 form-group">
                            <input type="file" name="images"/>

                             </div>
                         </div>
            <img src= "images/<?=$image?>" width="50" height="50" name="">

                            <div class="row">
                  <div class="col-md-12">
                  <input type="submit" name="Envoyer" value="Envoyer">                          
                    <span class="submitting"></span>
                  </div>
                </div>
              
              
              
            </div>
           
          </div>
        </div>  
        </div>
      </div>
  </div></div>
</form>
    </center>


  <style>
      
#id {
  pointer-events: none;
}
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