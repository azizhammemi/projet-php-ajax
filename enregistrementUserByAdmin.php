<?php
    require_once "pdo.php";
/* récupération des données du formulaire */

$nom = $_POST['nom'];
$email = $_POST['email'];
$password = $_POST['password'];

$photo=$_FILES['image']['name'];
$fichierTemp=$_FILES['image']['tmp_name'];
move_uploaded_file($fichierTemp, 'images/'.$photo );



$sql= "INSERT INTO user (name,email,password,image) VALUES('$nom','$email','$password','$photo')";
$pdo->exec($sql);
header('location:listUsers.php');


 