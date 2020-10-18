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

  case 'addInsert':
  // AJOUT D'UN POST: insert
  // PATTERN: index.php?posts=add
  // CTRL: postsControleur
  // ACTION: addInsert
PostsControleur\addAction($connexion);
  break;


  case 'delete':
  // SUPPRESSION D'UN POST
  // PATTERN: index.php?posts=delete&id=x
  // CTRL: postsControleur
  // ACTION: delete
PostsControleur\deleteAction($connexion, $_GET['id']);
  break;

case 'editForm':
//EDITION D'UN POST: FORM
//PATTERN: index.php?posts=editForm
//CTRL: postsControleur
//ACTION: editForm
PostsControleur\editFormAction($connexion, $_GET['id']);
   break;


case 'edit':
      // EDITION D'UN POSTS: UPDATE
      // PATTERN: index.php?posts=edit&id=x
      // CTRL: postsControleur
      // ACTION: edit
         PostsControleur\editAction($connexion, $_GET['id']);
      break;



endswitch;
