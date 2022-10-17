
<?php 
require('DbTools.php'); 
 $bdd = new DbTools;


 $nom= $_POST['nom'];
 $prenom= $_POST['prenom'];
 $login = $_POST['pass'];
 $adresse= $_POST['adresse'];
 $email= $_POST['email'];
 $userId = $_POST['id_user'];
 
$isUpdate;

if($userId !=''):

     $sql = "UPDATE utilisateurs SET "
      ."nom = '$nom',"
      ."prenom ='$prenom',"
      ."pass = '$login'"
      ." WHERE id_user = $userId ";


  $isUpdate = true;

else:
$sql = 'INSERT INTO utilisateur'
     .'(nom,prenom,adresse,cp,mail)'
     ." VALUES ('$nom','$prenom','$adresse','$login','$email')";

     $isUpdate = false;

endif;
     $bdd->query($sql) ;
     

?>
<!DOCTYPE html>
<html lang="fr">
 <head>   
    <title>validation</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="global.css" type="text/css" media="screen" />
    </head>
<body>
    <h1>ENREGISTREMENT VALIDER</h1> </br>
    <p>

    </p>
    <button class="button" onclick="window.location.href = 'enregistrement.php';">PAGE ENREGISTREMENT</button><br>

    <button class="button" onclick="window.location.href = 'index.html';">AJOUTER</button><br>
   
</body>
</html>


