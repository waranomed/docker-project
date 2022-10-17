<?php
require('DbTools.php');
$bdd = new DbTools;
$userId = $_GET['id'];
$sqlDelete = "DELETE FROM utilisateur WHERE id_user = '$userId'";
$bdd->query($sqlDelete);

?>
<!DOCTYPE html>
<html lang="fr">
 <head>   
    <title>delete</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="global.css" type="text/css" media="screen" />
    </head>
<body>
<h1>Votre ligne a bien été supprimer</h1><br>
<button class="button" onclick="window.location.href = 'enregistrement.php';">PAGE ENREGISTREMENT</button><br>
<button class="button"onclick="window.location.href = 'index.html';">AJOUTER</button><br>
</body>
</html>
</button>
