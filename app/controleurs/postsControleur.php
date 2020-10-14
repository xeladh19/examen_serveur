<?php
// ./app/controleurs/postsControleur.php
// Contrôleur des posts


namespace App\Controleurs\PostsControleur;
    use App\Modeles\PostsModele;


function indexAction (\PDO $connexion) {

  // Je mets dans $posts la liste des 10 derniers posts au modèle

  include_once '../app/modeles/postsModele.php';
  $posts = PostsModele\findAll($connexion);

  // Je charge la vue posts/index dans $content

  GLOBAL $content, $title;
  
ob_start();
include '../app/vues/posts/index.php';
$content = ob_get_clean();
}

function showAction (\PDO $connexion, int $id){
  //Je mets dans mon $post les informations du post que je demande au modèle
  include_once '../app/modeles/postsModele.php';
  $post = PostsModele\findOneById($connexion, $id);

  //Je charge la vue show dans $content
  GLOBAL $content, $title;
  $title = $post['title'];
  ob_start();
    include '../app/vues/posts/show.php';
  $content = ob_get_clean();
}




























//
// function indexAction(PDO $connexion){
//   //Je demande au modele la liste des produits
//     include_once'../app/modeles/produitsModele.php';
//     $produits = findAll($connexion);
//
//   //Je charge la vue index dans $content
//
//   GLOBAL $content;
//   ob_start();
//     include '../app/vues/produits/index.php';
//     $content = ob_get_clean();
// }
 ?>
