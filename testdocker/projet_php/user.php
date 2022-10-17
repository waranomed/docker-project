<?php
require('DbTools.php');
$bdd = new DbTools;
function selectUsers()
{
global $bdd;
    $sqlSelect = 'SELECT * FROM utilisateur';
    $resultSet = $bdd->query($sqlSelect);
    $listeMembres = $resultSet->fetchAll(PDO::FETCH_CLASS);
    return $listeMembres;
}
?>




