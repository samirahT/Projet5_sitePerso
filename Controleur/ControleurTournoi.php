<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 05/09/2017
 * Time: 16:33
 */
require_once 'Framework/Controleur.php';
require_once 'Modele/tournoi.php';

/**
 * Contrôleur des actions liées aux tournois

 */
class ControleurTournoi extends Controleur {

    private $tournoi;


    /**
     * Constructeur
     */
    public function __construct() {
        $this->tournoi = new Tournoi();

    }

    // Affiche les détails sur un tournoi
    public function index() {

        $id = $this->requete->getParametre("id");

        $tournoi = $this->tournoi->getTournoi($id);

        $this->genererVue(array('tournoi' => $tournoi), null, 'Vue/template.php');
    }

    // Affiche la liste un tournoi
    public function listeTournoi() {

        $tournois = $this->tournoi->getTournois();


        $this->genererVue(array('tournois' => $tournois), null, 'Vue/template.php');
    }

}

