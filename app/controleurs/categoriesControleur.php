<?php

/*
./app/controleurs/categoriesControleur.php
*/

namespace App\Controleurs\CategoriesControleur;
use App\Modeles\CategoriesModele;



function indexAction(\PDO $connexion) {
   // Je mets dans $categories la liste des 10 dernières catégories que je demande au modèle
   include_once '../app/modeles/categoriesModele.php';
   $categories = CategoriesModele\findAll($connexion);

   // Je charge directement la vue index
  include '../app/vues/categories/index.php';
}
