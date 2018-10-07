<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 05/09/2017
 * Time: 16:33
 */
require_once 'Framework/Controleur.php';
require_once 'Modele/actu.php';

/**
 * Contrôleur des actions liées aux actus

 */
class ControleurActu extends Controleur {

    private $actu;


    /**
     * Constructeur
     */
    public function __construct() {
        $this->actu = new Actu();

    }

    // Affiche les détails sur un actu
    public function index() {

        $id = $this->requete->getParametre("id");

        $actu = $this->actu->getActu($id);

        $this->genererVue(array('actu' => $actu), null, 'Vue/template.php');
    }

    // Affiche la liste un actu
    public function listeActu() {

        $actus = $this->actu->getActus();


        $this->genererVue(array('actus' => $actus), null, 'Vue/template.php');
    }


}

