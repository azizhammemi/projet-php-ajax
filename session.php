
<?php
function Verifier_session(){
    if($_SESSION["connecte"]!=="1"){
        header("location:login.php");
        
    }
}

function Verifieradmin_session(){
    if($_SESSION["admin"]!=="1"){
        header("location:loginadmin.php");
        
    }
}




?>