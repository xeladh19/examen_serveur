<?php
/*
./app/routeur.php
Le routeur charge le controleur et lance l'action qui correspond à ce qu'il se
passe dans l'url
*/


//
// ROUTE DU DETAIL D'UN POST
//     PATTERN: ?postId=x
//     CTRL: postsControleur
//     ACTION: show
//     TITLE: Alex Parker - Title du post
//
if (isset($_GET['postId'])):
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\PostsControleur\showAction($connexion, $_GET['postId']);










//
// ROUTE PAR defaut
// PATTERN: /
// CTRL: postsControleur
// ACTION: index
//
// 
else:
include_once '../app/controleurs/postsControleur.php';
\App\Controleurs\PostsControleur\indexAction($connexion);

endif;
