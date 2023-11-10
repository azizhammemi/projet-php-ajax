<?php
    require_once "pdo.php";
    require_once "enregestrementlogin.php";

if( $_SESSION["connecte"]=="0")
{
   
header("location:login form/login.php");
}else{
/* récupération des données du formulaire */
$id= $_SESSION["id"];
$prenom =   $_SESSION["name"];
$nom =   $_SESSION["nom"];
$numero = $_SESSION['numero'];
$password = $_SESSION['password'];
$size = $_POST['size'];
$quantity = $_POST['quantity'];
$prix =$_SESSION["prix"];
$photo=$_SESSION["image"];
$total=$quantity*$prix;
if(isset($quantity) && isset($size) && !empty($quantity) && !empty($size)){
$sql= "INSERT INTO commande (nom,prenom,numero,size,quantity,image,prix,password)VALUES('$nom','$prenom','$numero','$size','$quantity','$photo','$total','$password')";
$pdo->exec($sql);
header('location:shop-cart.php');
}else{
header("location:product-details.php?id_per=$id");
}
}


?>
<?php
require_once "pdo.php";
$id=$_SESSION["id"];
$quantity = $_POST['quantity'];
$_SESSION["qte"]=$quantity;
$qte=$_SESSION["qte"];
if(isset($quantity) && isset($numero) && !empty($quantity) && !empty($numero))
$sql = "UPDATE `produit` SET `contiter` =contiter-'$qte' WHERE `produit`.`id` = $id";
$pdo->exec($sql);

?>


 