<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 05/09/2017
 * Time: 16:37
 */


require_once 'Framework/Controleur.php';
require_once 'Modele/actu.php';
require_once 'Modele/entourage.php';
require_once 'Modele/golf.php';
require_once 'Modele/profil.php';
require_once 'Modele/slider.php';
require_once 'Modele/tournoi.php';
require_once 'Modele/contact.php';


class ControleurAccueil extends Controleur {

    private $actu;
    private $entourage;
    private $golf;
    private $profil;
    private $slider;
    private $tournoi;
    private $contact;

    public function __construct() {
        $this->actu = new Actu();
        $this->entourage = new Entourage();
        $this->golf = new Golf();
        $this->profil = new Profil();
        $this->slider = new Slider();
        $this->tournoi = new Tournoi();
        $this->contact = new Contact();
    }

    // Affiche la liste de tous les contenus du blog
    public function index() {
        $actus = $this->actu->getActus();
        $actusPage = $this->actu->getActusParPage();
        $pageActuelle = $this->actu->getPageActuelle();
        $nombrePage = $this->actu->getNombrePage();
        $entourages = $this->entourage->getEntourages();
        $golfs = $this->golf->getGolfs();
        $profils = $this->profil->getProfils();
        $sliders = $this->slider->getSliders();
        $tournois = $this->tournoi->getTournois();
        $contact = $this->contact->getContacts();


        //$id = 1; //Prendre le premier id , le seul profil
        $profil = $this->profil->getLastProfil();



        ////////Contact ////////
        $ajoutMode = false;

        if ($this->requete->existeParametre("email")) {
            $ajoutMode = true;
            $nom = $this->requete->getParametre("nom");
            $email = $this->requete->getParametre("email");
            $objet = $this->requete->getParametre("objet");
            $message = $this->requete->getParametre("message");


            $this->contact->ajouterContact($nom, $email, $objet, $message);
        }

        //$pageActuelle = 1;
        if($this->requete->existeParametre("page"))
        {
            $pageActuelle= $this->requete->getParametre("page");
        }

        /////////////////////////////////////

        $this->genererVue(array( 'profil' => $profil,
            'actus' => $actus,
            'actusPage' => $actusPage,
            'entourages' => $entourages,
             'golfs' => $golfs,
             'profils' => $profils,
             'sliders' => $sliders,
             'tournois' => $tournois,
            "ajoutMode" => $ajoutMode,
        "pageActuelle" => $pageActuelle,
        "nombrePage" => $nombrePage) , null, 'Vue/templateAccueil.php');

    }

}
