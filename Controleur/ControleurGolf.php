<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 05/09/2017
 * Time: 16:33
 */
require_once 'Framework/Controleur.php';
require_once 'Modele/golf.php';

/**
 * Contrôleur des actions liées aux golfs

 */
class ControleurGolf extends Controleur {

    private $golf;


    /**
     * Constructeur
     */
    public function __construct() {
        $this->golf = new Golf();

    }

    // Affiche les détails sur un golf
    public function index() {

        $id = $this->requete->getParametre("id");

        $golf = $this->golf->getGolf($id);

        $this->genererVue(array('golf' => $golf), null, 'Vue/template.php');
    }

    // Affiche la liste un golf
    public function listeGolf() {

        $golfs = $this->golf->getGolfs();


        $this->genererVue(array('golfs' => $golfs), null, 'Vue/template.php');
    }



}

