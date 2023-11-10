<?php
require_once ("pdo.php");
/* récupération des données du formulaire */
$id= $_POST['id'];
$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$photo=$_FILES['image']['name'];
if ($photo=="")
{
    $sql = "UPDATE user SET id=$id, name='$name', email='$email', password='$password' WHERE id=$id";
$pdo->exec($sql);
header('location:listUsers.php');
} else
{
   $fichierTemp=$_FILES['image']['tmp_name'];
move_uploaded_file($fichierTemp, 'images/'.$photo );
$sql = "UPDATE user SET id=$id, name='$name', email='$email', password='$password', image='$photo' WHERE id=$id";
  
$pdo->exec($sql);
header('location:listUsers.php');

}
?>