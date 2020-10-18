<?php
// ./app/condif/parametre.php
// paramètres de mon application

//PARAMETRES DE CONNEXION
define('HOSTNAME', 'localhost:3306');
  define('DBNAME', 'alex_parker_octobre_2020');
  define('USERNAME', 'root');
  define('USERPWD' , 'root');

// Initialisation des zones dynamiques du template
$content ='';
$title ='';

//FORMULAIRE
define('POSTS_ADDFORM_TITLE', "Add a post");
define('POSTS_EDITFORM_TITLE', "Edit a post");
