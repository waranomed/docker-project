<?php
require('DbTools.php');
$bdd = new DbTools;
$userId = $_GET['id'];
//$sqlUpdate = "UPDATE utilisateur SET nom ='pedriqo' WHERE nom = 'messi'";
//$sqlSelect= "select * from utilisateur where id_user='$userId'";
//$resultSet = $bdd->query($sqlSelect);
//$membre = $resultSet->fetch();
$sql="select * from utilisateur where id_user='$userId'";


$resultSet = $bdd -> query($sql);
$user = $resultSet->fetch();

//echo $membre['nom'];
?>
<!DOCTYPE html>
<html lang="fr">
 <head>   
    <title>update</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="global.css" type="text/css" media="screen" />
    </head>
<body >


   
<form action="validation.php" method="post" id="myform">

<p>MODIFIER VOS CHAMPS</p>

<input type="text" name="nom" id="nom" placeholder="nom" value="<?=$user['nom']?>"/></br>

<input type="text" name="prenom" id="PRENOM" placeholder="prenom" value="<?=$user['prenom']?>"/></br>

<input id=email name="email" type="email" placeholder="example@domain.com" required value="<?=$user['mail']?>"/></br>

<input type="radio" name="civi" value="Mme" /> Madame

<input type="radio" name="civi" value="Mlle" /> Mademoiselle

<input type="radio" name="civi" value="Mr" /> Monsieur</br>


<input id="adress" name="adresse"  placeholder="Adresse" required/></br>

<input type="date" name="Date_de_naissance" id="Date_de_naissance" placeholder="Date_de_naissance"> </br>

<input id="mdp"  type="password" name="pass" value="" placeholder="Mot de passe" value="12345" value="<?=$user['password']?>"/></br>

<input type="password" name="c_password" id="cdp" value="" placeholder="Confirmer Mot de passe" value="<?=$user['cp']?>"/></br>

<button type="submit">VALIDER</button>

<input type="hidden" name="id_user" value="<?=$user['id_user']?>"/></br>
      
<button class="button" onclick='window.location.href="enregistrement.php";'>PAGE ENREGISTREMENT</button>

<button class="button"s onclick='window.location.href="index.html";'>AJOUTER</button>

</form>



</body>
</html> 