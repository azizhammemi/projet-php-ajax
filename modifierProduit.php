<?php
require_once ("pdo.php");
/* récupération des données du formulaire */
$id = $_POST['id'];
$libelle = $_POST['libelle'];
$prix = $_POST['prix'];
$description = $_POST['description'];
$categorie = $_POST['categorie'];
$contiter = $_POST['contiter'];
$photo=$_FILES['photo']['name'];
if ($photo=="")
{
    $sql = "UPDATE produit SET id=$id, libelle='$libelle', prix=$prix, description='$description', categorie='$categorie',contiter='$contiter' WHERE id=$id";
$pdo->exec($sql);
header('location:listProduit.php');
} else
{
   $fichierTemp=$_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTemp, 'categorie/'.$photo );
$sql = "UPDATE produit SET id=$id, libelle='$libelle', prix='$prix', description='$description', image='$photo', categorie='$categorie',contiter='$contiter' WHERE id=$id";
  
$pdo->exec($sql);
header('location:listProduit.php');
}



?>



 