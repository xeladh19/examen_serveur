<?php
/*
./app/modeles/$categoriesModele.php
Modele des categories
*/
namespace App\Modeles\CategoriesModele;



/**
 * [findAll description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */
function findAll(\PDO $connexion) :array {

  $sql = "SELECT *
          FROM categories
          ORDER BY name ASC;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
