<?php

/*
./app/controleurs/postsControleur.php
 Contrôleur des posts
 */



namespace App\Controleurs\PostsControleur;
    use App\Modeles\PostsModele;


/**
 * [indexAction description]
 * @param  PDO    $connexion [description]
 * @return [type]            [description]
 */
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


/**
 * [showAction description]
 * @param  PDO    $connexion [description]
 * @param  int    $id        [description]
 * @return [type]            [description]
 */
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


/**
 * [addFormAction description]
 * @param PDO $connexion [description]
 */

function addFormAction(\PDO $connexion){
  //Je vais chercher les catégories
  include_once '../app/modeles/categoriesModele.php';
  $categories = \App\Modeles\CategoriesModele\findAll($connexion);
  //Je charge la vue addForm dans $content
  GLOBAL $content, $title;
  $title = POSTS_ADDFORM_TITLE;
ob_start();
include '../app/vues/posts/addForm.php';
$content = ob_get_clean();
}


/**
 * [addAction description]
 * @param PDO $connexion [description]
 */
function addAction(\PDO $connexion) {
   // Je demande au modèle d'ajouter un post
   include_once '../app/modeles/postsModele.php';
   $id = \App\Modeles\PostsModele\insert($connexion, $_POST);
   // Je redirige vers la liste des posts
   header('location: ' . BASE_URL);
}


/**
 * [deleteAction description]
 * @param  PDO    $connexion [description]
 * @param  int    $id        [description]
 * @return [type]            [description]
 */
function deleteAction (\PDO $connexion, int $id){
  //Je demande au modèle de supprimer le post
   include_once '../app/modeles/postsModele.php';
   $return1 = PostsModele\deleteOneById($connexion, $id);
  //Je redirige vers al liste des posts
   header('location: ' . BASE_URL);
}


/**
 * [editFormAction description]
 * @param  PDO    $connexion [description]
 * @param  int    $id        [description]
 * @return [type]            [description]
 */
function editFormAction(\PDO $connexion, int $id) {
   // Je demande au modèle le post à afficher dans le formulaire
   include_once '../app/modeles/postsModele.php';
   $post = PostsModele\findOneById($connexion, $id);

   // Je vais chercher les catégories
   include_once '../app/modeles/categoriesModele.php';
   $categories = \App\Modeles\CategoriesModele\findAll($connexion);

   // Je charge la vue editForm dans $content
   GLOBAL $content, $title;
   $title = POSTS_EDITFORM_TITLE;
   ob_start();
   include '../app/vues/posts/editForm.php';
   $content = ob_get_clean();
}

function editAction(\PDO $connexion, int $id) {
   // Je demande au modèle d'updater le post
   include_once '../app/modeles/postsModele.php';
   $return1 = PostsModele\updateOneById($connexion, $id, $_POST);
   // Je redirige vers le détail du  post
   header('location: ' . BASE_URL .'posts/'. $id . '/' .\Noyau\Fonctions\slugify($_POST['title']) . '.html');
}
