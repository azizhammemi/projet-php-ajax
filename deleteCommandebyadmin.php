<?php
 require_once "pdo.php";

$id_per=$_GET['id'];
$sql ="delete from commande where id='$id_per'"; 
$pdo->exec($sql);
header('location:listCommande.php');
?>