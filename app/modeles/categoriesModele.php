<?php
/*
./app/modeles/categoriesModele.php
Modele des categories
*/
namespace App\Modeles\CategoriesModele;

/**
 * [findAll description]
 * @param  PDO    $connexion [description]
 * @return [type]            [description]
 */

function findAll(\PDO $connexion){

  $sql = "SELECT *
          FROM categories
          ORDER BY name ASC;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
