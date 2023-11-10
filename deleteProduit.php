
<?php
               
               require_once ("pdo.php");
               $id = $_GET['id'];
               $sql = "DELETE FROM produit WHERE id=$id";

               $pdo->exec( $sql);

               header('location:listProduit.php');

               ?>
