<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 05/09/2017
 * Time: 16:33
 */
require_once 'Framework/Controleur.php';
require_once 'Modele/profil.php';

/**
 * Contrôleur des actions liées aux profils

 */
class ControleurProfil extends Controleur {

    private $profil;


    /**
     * Constructeur
     */
    public function __construct() {
        $this->profil = new Profil();

    }

    // Affiche les détails sur un profil
    public function index() {

        $id = $this->requete->getParametre("id");

        $profil = $this->profil->getProfil($id);

        $this->genererVue(array('profil' => $profil), null, 'Vue/template.php');
    }

    // Affiche la liste un profil
    public function listeProfil() {

        $profils = $this->profil->getProfils();


        $this->genererVue(array('profils' => $profils), null, 'Vue/template.php');
    }


}

