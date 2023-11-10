<!DOCTYPE html>
<html lang="en">
<head>  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class='nav navbar'>
        <span class="gauche"><a href="#"><?=$_SESSION["name"]?></a></span>
        <span>
            <a href="liste_etudiant.php">Liste des étudiants</a>
            <a href="formulaireAjout.php">Ajouter un étudiant</a>
        </span>
        <span class="droite">
            <a href="deconnexion.php">Déconnexion</a>
        </span>

    </header>
    <style>
        header{
    background-color: black;
    color: white;
}
header a{
    color: white;
    text-decoration: none;
    font-size: 20px;
    margin:5px;
    padding: 5px;
    display: inline-block;
}
.droite{
    float: right;
    border-left: 2px solid white;
}
.gauche{
    float:left;
    border-right: 2px solid white;
}
table{
    border-collapse: collapse;
}
td,th{
    border:1px solid black;
}
        </style>
</body>
</html>