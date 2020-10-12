<?php
// ./app/controleurs/produitsControleur.php
// Contrôleur des produits

function indexAction(PDO $connexion){
  //Je demande au modele la liste des produits
    include_once'../app/modeles/produitsModele.php';
    $produits = findAll($connexion);

  //Je charge la vue index dans $content

  GLOBAL $content;
  ob_start();
    include '../app/vues/produits/index.php';
    $content = ob_get_clean();
}
 ?>
