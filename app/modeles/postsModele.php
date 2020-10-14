<?php
/*
./app/modeles/postsModele.php
Modele des posts
*/

namespace App\Modeles\PostsModele;

function findAll(\PDO $connexion){
  $sql = "SELECT *
          FROM posts
          ORDER BY created_at DESC
          LIMIT 10;";
  $rs = $connexion ->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}



//
//  function findAll (PDO $connexion){
//  //   return[
//  //   ['nom' => "Produit 1" , 'prix'=>89.50],
//  //   ['nom' => "Produit 2", 'prix' => 99.50],
//  // ];
//  $sql = "SELECT *
//  FROM produits
//  ORDER BY nom ASC;";
//
//   $rs = $connexion->query($sql);
//
// $produits = $rs->fetchAll(PDO::FETCH_ASSOC);
// $rs->closecursos();
// unset($rs);
// return $produits;
//  }
?>
