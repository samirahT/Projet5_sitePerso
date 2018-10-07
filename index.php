<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:28
 */
// Contrôleur frontal : instancie un routeur pour traiter la requête entrante

require 'Framework/Routeur.php';

$routeur = new Routeur();
$routeur->routerRequete();