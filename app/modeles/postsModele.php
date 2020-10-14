<?php
/*
./app/modeles/postsModele.php
Modele des posts
*/

namespace App\Modeles\PostsModele;

/**
 * [findAll description]
 * @param  PDO    $connexion [description]
 * @return [type]            [description]
 */
function findAll(\PDO $connexion){
  $sql = "SELECT *
          FROM posts
          ORDER BY created_at DESC
          LIMIT 10;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

/**
 * [findOneById description]
 * @param  PDO   $connexion [description]
 * @param  int   $id        [description]
 * @return array            [description]
 */
function findOneById(\PDO $connexion , int $id) :array {
  $sql = "SELECT *
          FROM posts
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue (':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
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
