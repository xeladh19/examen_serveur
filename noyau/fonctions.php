<?php

/*
./noyau/fonctions.php
Fonctions de l'application
*/

namespace Noyau\Fonctions;


/**
 * [slugify description]
 * @param  string $str [description]
 * @return [type]      [description]
 */
function slugify(string $str) {
   return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
}





/**
 * [tronquer description]
 * @param  string  $chaine         [description]
 * @param  integer $nbreCaracteres [description]
 * @return string                  [description]
 */
function tronquer(string $chaine, int $nbreCaracteres = 150) :string {
   if (strlen($chaine) > $nbreCaracteres):
      $positionEspace = strpos($chaine, ' ', $nbreCaracteres);
      return substr($chaine, 0, $positionEspace);
   else:
      return $chaine;
   endif;
}






/**
 * [datify description]
 * @param  string $date   [description]
 * @param  string $format [description]
 * @return [type]         [description]
 */
function datify(string $date, string $format) {
   return date_format(date_create($date), $format);
}
