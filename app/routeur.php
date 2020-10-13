<?php
/*
./app/routeur.php
Le routeur charge le controleur et lance l'action qui correspond à ce qu'il se
passe dans l'url
*/

/*
ROUTE PAR defaut
PATTERN: /
CTRL: postsControleur
ACTION: index
*/

include_once '../app/controleurs/postsControleur.php';
\App\Controleurs\PostsControleur\indexAction($connexion);
