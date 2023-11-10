<?php
require_once ("pdo.php");
/* récupération des données du formulaire */
$id= $_POST['id'];
$nom= $_POST['nom'];
$email= $_POST['email'];
$password= $_POST['password'];
$photo=$_FILES['images']['name'];
if ($photo=="")
{
    $sql = "UPDATE admin SET id=$id, nom='$nom', email='$email',password='$password' WHERE id=$id";
$pdo->exec($sql);
header('location:indexAdmin.php');
} else
{
   $fichierTemp=$_FILES['images']['tmp_name'];
move_uploaded_file($fichierTemp, 'images/'.$photo );
$sql = "UPDATE admin SET id=$id, nom='$nom', email='$email', password='$password',image='$photo' WHERE id=$id";
  
$pdo->exec($sql);
header('location:indexAdmin.php');

}
?>