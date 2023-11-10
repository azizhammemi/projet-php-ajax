<?php
require_once ("pdo.php");
/* récupération des données du formulaire */
$id = $_POST['id'];
$fname=$_POST["nom"];
$numero=$_POST["numero"];
$quantity=$_POST["quantity"];
$prix =$_SESSION["prix"];
$total=$prix * $quantity;

$sql = "UPDATE commande SET id=$id, nom='$fname', numero='$numero', quantity='$quantity',prix='$total' WHERE id=$id";
$pdo->exec($sql);
 
$pdo->exec($sql);
header('location:shop-cart.php');


?>

