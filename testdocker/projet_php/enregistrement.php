<?php 
require('user.php'); 
$listeMembres= selectUsers();
?>
<!DOCTYPE html>
<html lang="fr">  
 <head>   
    <title>TABLEAU</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="global.css" type="text/css" media="screen" />
    </head>
<body>

<table>
  
<tr>

<td><h1><strong>NOM</strong></h1></td>
<td><h1><strong>PRENOM</strong></h1></td>
<td><h1><strong>MAIL</strong</h1><td>
<td><h1><strong>ADRESSE</strong></h1></td>

</tr>
<?php
foreach($listeMembres as $user):
?>

<tr>
   <td><h1><strong><?=$user->nom?></strong></h1></td>
    <td><h1><strong><?=$user->prenom?></strong></h1></td>
    <td><h1><strong><?=$user->mail?></strong</h1><td>
    <td><h1><strong><?=$user->adresse?></strong></h1></td>
    <td><button class="button" class="modifier" id="update_<?=$user->id_user?>" onclick='window.location.href ="/update.php?id=<?=$user->id_user?>"' class="button">MODIFIER</button></td>
    <td><button class="button" class="supprimer" id="delete_<?=$user->id_user?>"onclick='window.location.href="/delete.php?id=<?=$user->id_user?>"' class="button">SUPPRIMER</button></td>
    <td><button  class="button" onclick='window.location.href = "index.html";'>ajouter une liste</button></td>
</tr>


<?php
endforeach;
?>

</table></br>
<p></p>


<script>
    //Récuparation des éléments HTML de classe "update_user"
var modifier = document.getElementsByClassName("modifier");
for (var i=0; i < modifier.length; i++) {
    //Pour chaque élément de la liste on ajoute un écouteur
      modifier[i].addEventListener('click', UpdateUser);
  }
var supprimer = document.getElementsByClassName("supprimer");
//On parcours la liste des élements trouvés
    for (var i=0; i < supprimer.length; i++) {
    //Pour chaque élément de la liste on ajoute un écouteur
      supprimer[i].addEventListener('click', deleteUser);
  }
  function deleteUser(evenement){
 evenement.preventDefault();
//récupération de l'id de l'élément manipulé depuis l'événement click (la balise <a> qui a été cliquée)
var idElement = this.getAttribute('id');
console.log(idElement);
var userId = idElement.substring('4');
console.log(userId);
  }
</script>


</body>
</html>
