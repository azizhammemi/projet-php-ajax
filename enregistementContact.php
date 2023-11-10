<?php
    require_once "pdo.php";
/* récupération des données du formulaire */

$nom = $_POST["nom"];
$email = $_POST["email"];
$message=$_POST["message"];



if(isset($message) && isset($nom) && isset($email)  && !empty($message) && !empty($nom) && !empty($email) ){
$sql= "INSERT INTO contact (nom,email,message)VALUES('$nom','$email','$message')";
    $pdo->exec($sql);}
    header('location:contact.php');
?>




 