<?php
   require_once "pdo.php";
      
   $login="";$pwd="";
   if (isset($_POST['login'])){
       $login=$_POST["login"];
       $pwd=$_POST["pwd"];

       
      

       try{
             $_SESSION["connecte"]="0";
           $req="SELECT nom,email,password,image   FROM admin WHERE email='$login'and password='$pwd'";
           $res=$pdo->query($req);
          
           if ($data=$res->fetchAll(PDO::FETCH_ASSOC)){
           
               $_SESSION["admin"]="1";
               $_SESSION["name"]=$data[0]["nom"];
               $_SESSION["photo"]=$data[0]["image"];
               header("location:indexAdmin.php");
             
           }
           else
               header("location:login form/loginadmin.php");
           }catch (PDOException $e){
           echo "ERREUR : ".$e->getMessage(). " LIGNE : ".$e->getLine();
       }

       
   }
?>