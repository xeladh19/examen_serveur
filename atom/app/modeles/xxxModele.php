<?php
/*
./app/modeles/produitsModele.php
Modele des produits
*/



 function findAll (PDO $connexion){
 //   return[
 //   ['nom' => "Produit 1" , 'prix'=>89.50],
 //   ['nom' => "Produit 2", 'prix' => 99.50],
 // ];
 $sql = "SELECT *
 FROM produits
 ORDER BY nom ASC;";

  $rs = $connexion->query($sql);

$produits = $rs->fetchAll(PDO::FETCH_ASSOC);
$rs->closecursos();
unset($rs);
return $produits;
 }
?>
