
<?php
               
               require_once ("pdo.php");
               $id = $_GET['id'];
               $sql = "DELETE FROM user WHERE id=$id";

               $pdo->exec( $sql);

               echo " Suppression de l'utlisateur ".$id." avec succès !! ";
               header('location:listUsers.php');

               ?>
