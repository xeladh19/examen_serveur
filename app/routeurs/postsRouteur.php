<?php
/*
./app/routeurs/postsRouteur.php
Routes des posts
*/

use App\Controleurs\PostsControleur;
include_once '../app/controleurs/postsControleur.php';

switch ($_GET['posts']):
  case 'show':
  // DETAIL D'UN POST
  // Pattern: index?posts=show&id=x
  //CTRL: postsControleur
  //ACTION : show

  PostsControleur\showAction($connexion, $_GET['id']);
  break;



  case 'addForm':

  // FORMULAIRE D'AJOUT D'UN POSTS
  // PATTERN: index.php?posts=addForm
  // CTRL: postsControleur
  // ACTION: addForm

  PostsControleur\addFormAction($connexion);
  break;

  case 'add':
  // AJOUT D'UN POST: insert
  // PATTERN: index.php?posts=addInsert
  // CTRL: postsControleur
  // ACTION: addInsert
PostsControleur\addAction($connexion);
  break;


  case 'delete':
  // AJOUT D'UN POST: insert
  // PATTERN: index.php?posts=addInsert
  // CTRL: postsControleur
  // ACTION: addInsert
PostsControleur\deleteAction($connexion, $_GET['id']);
  break;
















endswitch;
