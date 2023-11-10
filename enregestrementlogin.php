
<?php
   require_once "pdo.php";
      
   $login="";$pwd="";
   if (isset($_POST['nom'])){
       $nom=$_POST["nom"];
       $prenom=$_POST["prenom"];
       $pwd=$_POST["pwd"];

       
      

       try{
             $_SESSION["connecte"]="0";
 $req="SELECT nom,prenom,password,numero FROM user WHERE nom='$nom' and prenom='$prenom' and password='$pwd'";
           $res=$pdo->query($req);
          
           if ($data=$res->fetchAll(PDO::FETCH_ASSOC)){
           
               $_SESSION["connecte"]="1";
               $_SESSION["name"]=$data[0]["prenom"];
               $_SESSION["nom"]=$data[0]["nom"];
               $_SESSION["numero"]=$data[0]["numero"];
               $_SESSION["password"]=$data[0]["password"];
               header("location:index.php");
             
           }
           else
               header("location:login form/login.php");
           }catch (PDOException $e){
           echo "ERREUR : ".$e->getMessage(). " LIGNE : ".$e->getLine();
       }

       
   }
?>