<?php
    require_once "pdo.php";
/* récupération des données du formulaire */
$id = $_POST['id'];
$libelle = $_POST['libelle'];
$prix = $_POST['prix'];
$description = $_POST['description'];
$categorie = $_POST['categorie'];
$contiter = $_POST['contiter'];

$photo=$_FILES['photo']['name'];
$fichierTemp=$_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTemp, 'categorie/'.$photo );



$sql= "INSERT INTO produit (id,libelle,prix,description,image,categorie,contiter) VALUES('$id','$libelle','$prix','$description','$photo','$categorie','$contiter')";
$pdo->exec($sql);
header('location:listProduit.php');


 