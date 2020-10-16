<?php
/*
./app/routeurs/posts.php
Routes des posts
*/

use App\Controleurs\Posts;
include_once '../app/controleurs/posts.php';

switch ($_GET['posts']):
case 'show':
// DETAIL D'UN POST
// Pattern: index?posts=show&id=x
//CTRL: postsControleur
//ACTION : show

    PostsControleur\showAction($connexion, $_GET['id']);
    break;



// FORMULAIRE D'AJOUT D'UN POSTS
// PATTERN: index.php?posts=addForm
// CTRL: postsControleur
// ACTION:addForm

case 'addForm':
PostsControleur\addFormAction($connexion);
break;
