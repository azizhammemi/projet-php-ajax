<?php
require_once "pdo.php";
$id=$_SESSION["id"];
$qte=$_SESSION["qte"];
$sql = "UPDATE `produit` SET `contiter` =contiter+'$qte' WHERE `produit`.`id` = $id";
$pdo->exec($sql);

?>
<?php
 require_once "pdo.php";

$id_per=$_GET['id_per'];
$sql ="delete from commande where id='$id_per'"; 
$pdo->exec($sql);
header('location:shop-cart.php');
?>