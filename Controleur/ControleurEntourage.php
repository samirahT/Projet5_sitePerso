<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 05/09/2017
 * Time: 16:33
 */
require_once 'Framework/Controleur.php';
require_once 'Modele/entourage.php';

/**
 * Contrôleur des actions liées aux entourages

 */
class ControleurEntourage extends Controleur {

    private $entourage;


    /**
     * Constructeur
     */
    public function __construct() {
        $this->entourage = new Entourage();

    }

    // Affiche les détails sur un entourage
    public function index() {

        $id = $this->requete->getParametre("id");

        $entourage = $this->entourage->getEntourage($id);

        $this->genererVue(array('entourage' => $entourage), null, 'Vue/template.php');
    }

    // Affiche la liste un entourage
    public function listeEntourage() {

        $entourages = $this->entourage->getEntourages();


        $this->genererVue(array('entourages' => $entourages), null, 'Vue/template.php');
    }



}

