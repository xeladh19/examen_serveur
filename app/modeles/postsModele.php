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
  $sql = "SELECT *, p.id as postId,
          c.id as categorieId,
          c.name as categorieName,
          p.created_at as postDate
          FROM posts
          JOIN categories c on p.category_id = c.id
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
  $sql = "SELECT *, p.id as postId,
          c.id as categorieId,
          c.name as categorieName,
          p.created_at as postDate
          FROM posts
          WHERE id = :id;";

  $rs = $connexion->prepare($sql);
  $rs->bindValue (':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}


/**
 * [insertOne description]
 * @param  PDO   $connexion [description]
 * @param  array $data      [description]
 * @return int              [description]
 */
function insertOne(\PDO $connexion, array $data) :int {
  $sql = "INSERT INTO posts
          SET title = :title,
              text = :text,
              quote = :quote,
              category_id = :category,
              created_at = GETUTCDATE();";
              $rs = $connexion->prepare($sql);
               $rs->bindValue(':title', $data['title'], \PDO::PARAM_STR);
               $rs->bindValue(':text', $data['text'], \PDO::PARAM_STR);
               $rs->bindValue(':quote', $data['quote'], \PDO::PARAM_STR);
               $rs->bindValue(':category', $data['category_id'], \PDO::PARAM_INT);
               $rs->execute();
               return $connexion->lastInsertId();
}

function deleteOneById(\PDO $connexion, int $id) :bool {
   $sql = "DELETE FROM posts
           WHERE id = :id;";
   $rs = $connexion->prepare($sql);
   $rs->bindValue(':id', $id, \PDO::PARAM_INT);
   return intval($rs->execute());
}
