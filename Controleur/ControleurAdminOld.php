<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 22/09/2017
 * Time: 11:15
 */

require_once 'Framework/Controleur.php';
require_once 'ControleurSecurise.php';
require_once 'Modele/actu.php';
require_once 'Modele/entourage.php';
require_once 'Modele/exp.php';
require_once 'Modele/golf.php';
require_once 'Modele/profil.php';
require_once 'Modele/slider.php';
require_once 'Modele/tournoi.php';
require_once 'Modele/image.php';



/**
 * Contrôleur des actions d'administration

 */
class ControleurAdmin extends ControleurSecurise
{
    private $actu;
    private $entourage;
    private $exp;
    private $golf;
    private $profil;
    private $slider;
    private $tournoi;
    private $image;


    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->actu = new Actu();
        $this->entourage = new Entourage();
        $this->exp = new Exp();
        $this->golf = new Golf();
        $this->profil = new Profil();
        $this->slider = new Slider();
        $this->tournoi = new Tournoi();
        $this->image = new Image();

    }


    public function index()
    {
        $nbActus = $this->actu->getNombreActus();
        $actus = $this->actu->getActus();

        $nbEntourages = $this->entourage->getNombreEntourages();
        $entourages = $this->entourage->getEntourages();

        $nbExps = $this->exp->getNombreExps();
        $exps = $this->exp->getExps();

        $nbGolfs = $this->golf->getNombreGolfs();
        $golfs = $this->golf->getGolfs();

        $nbProfils = $this->profil->getNombreProfils();
        $profils = $this->profil->getProfils();

        $nbSliders = $this->slider->getNombreSliders();
        $sliders = $this->slider->getSliders();

        $nbTournois = $this->tournoi->getNombreTournois();
        $tournois = $this->tournoi->getTournois();

        $nbImages = $this->image->getNombreImages();
        $images = $this->image->getImages();


        $login = $this->requete->getSession()->getAttribut("login");


        $this->genererVue(array('nbActus' => $nbActus, 'actus' => $actus,
            'nbEntourages' => $nbEntourages, 'entourages' => $entourages,
            'nbExps' => $nbExps, 'exps' => $exps,
            'nbGolfs' => $nbGolfs, 'golfs' => $golfs,
            'nbProfils' => $nbProfils, 'profils' => $profils,
            'nbSliders' => $nbSliders, 'sliders' => $sliders,
            'nbTournois' => $nbTournois, 'tournois' => $tournois,
            'nbImages' => $nbImages, 'images' => $images,


            'login' => $login), null, 'Vue/templateAdmin.php');

    }











///////******IMAGE*************//
///

// Voir image Affiche les détails sur un image
    public function voirImage()
    {
        $idImage = $this->requete->getParametre("id");

        $image = $this->image->getImage($idImage);


        $this->genererVue(array('image' => $image), null, 'Vue/templateAdmin.php');
    }

//Ajouter un nouveau image
    public function ajouterNouveauImage()
    {
        $ajoutMode = false;

        if ($this->requete->existeParametre("id")) {
            $ajoutMode = true;
            $nom = $this->requete->getParametre("nom");
            $taille = $this->requete->getParametre("taille");



            $this->image->ajouterImage($nom, $taille);
        }

        $this->genererVue(array("ajoutMode" => $ajoutMode), null, 'Vue/templateAdmin.php');

    }

//Modifier un image
    public function modifierImage()
    {
        $modifMode = false;
        $idImage = null;
        $image = [];
        if ($this->requete->existeParametre("id")) {
            $idImage = $this->requete->getParametre("id");

            $image = $this->image->getImage($idImage);
        }

        if ($this->requete->existeParametre("nom") && !is_null($idImage)) {
            $modifMode = true;
            $nom = $this->requete->getParametre("nom");
            $taille = $this->requete->getParametre("taille");


            $this->image->modifier($idImage, $nom, $taille);

            $this->rediriger("admin");
        }

        $this->genererVue(array("modifMode" => $modifMode, 'image' => $image), null, 'Vue/templateAdmin.php');
    }

//Supprimer un image
    public function supprimerImage()
    {
        if ($this->requete->existeParametre("id")) {
            $idImage = $this->requete->getParametre("id");

            $image = $this->image->getImage($idImage);
        }

        $this->image->supprimer($idImage);
        $this->rediriger("admin");

    }

}