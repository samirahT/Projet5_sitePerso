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
require_once 'Modele/golf.php';
require_once 'Modele/profil.php';
require_once 'Modele/slider.php';
require_once 'Modele/tournoi.php';
require_once 'Modele/contact.php';
require_once 'Modele/image.php';


/**
 * Contrôleur des actions d'administration

 */
class ControleurAdmin extends ControleurSecurise
{
    private $actu;
    private $entourage;
    private $golf;
    private $profil;
    private $slider;
    private $tournoi;
    private $contact;
    private $image;


    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->actu = new Actu();
        $this->entourage = new Entourage();
        $this->golf = new Golf();
        $this->profil = new Profil();
        $this->slider = new Slider();
        $this->tournoi = new Tournoi();
        $this->contact = new Contact();
        $this->image = new Image();

    }





    public function index()
    {
        $nbActus = $this->actu->getNombreActus();
        $actus = $this->actu->getActus();

        $nbEntourages = $this->entourage->getNombreEntourages();
        $entourages = $this->entourage->getEntourages();

        $nbGolfs = $this->golf->getNombreGolfs();
        $golfs = $this->golf->getGolfs();

        $nbProfils = $this->profil->getNombreProfils();
        $profils = $this->profil->getProfils();

        $nbSliders = $this->slider->getNombreSliders();
        $sliders = $this->slider->getSliders();

        $nbTournois = $this->tournoi->getNombreTournois();
        $tournois = $this->tournoi->getTournois();

        $nbContacts = $this->contact->getNombreContacts();
        $contacts = $this->contact->getContacts();

        $nbImages = $this->image->getNombreImages();
        $images = $this->image->getImages();


        $login = $this->requete->getSession()->getAttribut("login");


        $this->genererVue(array ('nbActus' => $nbActus, 'actus' => $actus,
            'nbEntourages' => $nbEntourages, 'entourages' => $entourages,
            'nbGolfs' => $nbGolfs, 'golfs' => $golfs,
            'nbProfils' => $nbProfils, 'profils' => $profils,
            'nbSliders' => $nbSliders, 'sliders' => $sliders,
            'nbTournois' => $nbTournois, 'tournois' => $tournois,
            'nbContacts' => $nbContacts, 'contacts' => $contacts,
            'nbImages' => $nbImages, 'images' => $images,


            'login' => $login), null, 'Vue/templateAdmin.php');

    }





    //******ACTU *********VOIR, MODIFIER, SUPPR

    // Voir actu Affiche les détails sur un actu
    public function voirActu() {
        $idActu = $this->requete->getParametre("id");

        $actu = $this->actu->getActu($idActu);


        $this->genererVue(array('actu' => $actu) , null, 'Vue/templateAdmin.php');
    }
//Ajouter un nouveau actu
    public function ajouterNouveauActu()
    {
        $ajoutMode = false;

        if ($this->requete->existeParametre("titre") && $this->requete->existeParametre("descr")){
            $ajoutMode = true;
            $titre = $this->requete->getParametre("titre");
            $descr_c = $this->requete->getParametre("descr_c");
            $descr = $this->requete->getParametre("descr");
            $image = $this->requete->getParametreNull("image");
           // $etat = $this->requete->getParametreNull("etat");
            $etat = 1; //sera utilisé plus tard pour gerer l'etat

            $this->actu->ajouterActu( $titre, $descr_c, $descr, $image, $etat);
        }

        $this->genererVue(array("ajoutMode" => $ajoutMode), null, 'Vue/templateAdmin.php');

    }
//Modifier un actu
    public function modifierActu()
    {
        $modifMode = false;
        $idActu = null;
        $actu = [];
        if($this->requete->existeParametre("id")) {
            $idActu = $this->requete->getParametre("id");

            $actu = $this->actu->getActu($idActu);
        }

        if ($this->requete->existeParametre("titre") && $this->requete->existeParametre("descr")&& !is_null($idActu)){
            $modifMode = true;
            $titre = $this->requete->getParametre("titre");

            $descr_c = $this->requete->getParametre("descr_c");
            $descr = $this->requete->getParametre("descr");
            $image = $this->requete->getParametreNull("image");
            $date = $this->requete->getParametreNull("date");
           // $etat = $this->requete->getParametreNull("etat");
            $etat = 1; //sera utilisé plus tard pour gerer l'etat

            $this->actu->modifier($idActu, $titre, $descr_c, $descr, $image,$date, $etat);

            $this->rediriger("admin");
        }

        $this->genererVue(array("modifMode" => $modifMode, 'actu' => $actu ), null, 'Vue/templateAdmin.php');
    }

//Supprimer un actu
    public function supprimerActu()
    {
        if($this->requete->existeParametre("id")) {
            $idActu = $this->requete->getParametre("id");

            $actu = $this->actu->getActu($idActu);
        }

        $this->actu->supprimer($idActu);
        $this->rediriger("admin");

    }

    //*****ENTOURAGE**************//

    // Voir entourage Affiche les détails sur un entourage
    public function voirEntourage() {
        $idEntourage = $this->requete->getParametre("id");

        $entourage = $this->entourage->getEntourage($idEntourage);


        $this->genererVue(array('entourage' => $entourage), null, 'Vue/templateAdmin.php');
    }
//Ajouter un nouveau entourage
    public function ajouterNouveauEntourage()
    {
        $ajoutMode = false;

        if ($this->requete->existeParametre("titre") && $this->requete->existeParametre("descr")){
            $ajoutMode = true;
            $titre = $this->requete->getParametre("titre");
            $nom = $this->requete->getParametre("nom");
            $descr = $this->requete->getParametre("descr");
            $image = $this->requete->getParametreNull("image");
            //$etat = $this->requete->getParametreNull("etat");
            $etat = 1; //sera utilisé plus tard pour gerer l'etat


            $this->entourage->ajouterEntourage( $titre, $nom, $descr, $image, $etat);
        }

        $this->genererVue(array("ajoutMode" => $ajoutMode), null, 'Vue/templateAdmin.php');

    }
//Modifier un entourage
    public function modifierEntourage()
    {
        $modifMode = false;
        $idEntourage = null;
        $entourage = [];
        if($this->requete->existeParametre("id")) {
            $idEntourage = $this->requete->getParametre("id");

            $entourage = $this->entourage->getEntourage($idEntourage);
        }

        if ($this->requete->existeParametre("titre") && $this->requete->existeParametre("descr")&& !is_null($idEntourage)){
            $modifMode = true;
            $titre = $this->requete->getParametre("titre");

            $titre = $this->requete->getParametre("titre");
            $nom = $this->requete->getParametre("nom");
            $descr = $this->requete->getParametre("descr");
            $image = $this->requete->getParametreNull("image");
            //$etat = $this->requete->getParametreNull("etat");
            $etat = 1; //sera utilisé plus tard pour gerer l'etat


            $this->entourage->modifier( $idEntourage,$titre, $nom, $descr, $image, $etat);

            $this->rediriger("admin");
        }

        $this->genererVue(array("modifMode" => $modifMode, 'entourage' => $entourage ), null, 'Vue/templateAdmin.php');
    }

//Supprimer un entourage
    public function supprimerEntourage()
    {
        if($this->requete->existeParametre("id")) {
            $idEntourage = $this->requete->getParametre("id");

            $entourage = $this->entourage->getEntourage($idEntourage);
        }

        $this->entourage->supprimer($idEntourage);
        $this->rediriger("admin");

    }



//////******************GOLF******************/////
///

// Voir golf Affiche les détails sur un golf
    public function voirGolf() {
        $idGolf = $this->requete->getParametre("id");

        $golf = $this->golf->getGolf($idGolf);


        $this->genererVue(array('golf' => $golf), null, 'Vue/templateAdmin.php');
    }
//Ajouter un nouveau golf
    public function ajouterNouveauGolf()
    {
        $ajoutMode = false;

        if ($this->requete->existeParametre("titre") && $this->requete->existeParametre("descr")){
            $ajoutMode = true;
            $titre = $this->requete->getParametre("titre");
            $descr = $this->requete->getParametre("descr");
            $type = $this->requete->getParametreNull("type");
            $lien = $this->requete->getParametreNull("lien");
            $image = $this->requete->getParametreNull("image");
            //$etat = $this->requete->getParametreNull("etat");
            $etat = 1; //sera utilisé plus tard pour gerer l'etat


            $this->golf->ajouterGolf( $titre, $descr, $type, $lien, $image, $etat);
        }

        $this->genererVue(array("ajoutMode" => $ajoutMode), null, 'Vue/templateAdmin.php');

    }
//Modifier un golf
    public function modifierGolf()
    {
        $modifMode = false;
        $idGolf = null;
        $golf = [];
        if($this->requete->existeParametre("id")) {
            $idGolf = $this->requete->getParametre("id");

            $golf = $this->golf->getGolf($idGolf);
        }

        if ($this->requete->existeParametre("titre") && $this->requete->existeParametre("descr")&& !is_null($idGolf)){
            $modifMode = true;
            $titre = $this->requete->getParametre("titre");
            $descr = $this->requete->getParametre("descr");
            $type = $this->requete->getParametreNull("type");
            $lien = $this->requete->getParametreNull("lien");
            $image = $this->requete->getParametreNull("image");
            //$etat = $this->requete->getParametreNull("etat");
            $etat = 1; //sera utilisé plus tard pour gerer l'etat

            $this->golf->modifier($idGolf, $titre, $descr, $type, $lien, $image, $etat);

            $this->rediriger("admin");
        }

        $this->genererVue(array("modifMode" => $modifMode, 'golf' => $golf ), null, 'Vue/templateAdmin.php');
    }

//Supprimer un golf
    public function supprimerGolf()
    {
        if($this->requete->existeParametre("id")) {
            $idGolf = $this->requete->getParametre("id");

            $golf = $this->golf->getGolf($idGolf);
        }

        $this->golf->supprimer($idGolf);
        $this->rediriger("admin");

    }


   //////////////****PROFIL***********///////
    ///

// Voir profil Affiche les détails sur un profil
    public function voirProfil() {
        $idProfil = $this->requete->getParametre("id");

        $profil = $this->profil->getProfil($idProfil);


        $this->genererVue(array('profil' => $profil), null, 'Vue/templateAdmin.php');
    }
//Ajouter un nouveau profil
    public function ajouterNouveauProfil()
    {
        $ajoutMode = false;

        if ($this->requete->existeParametre("titre") && $this->requete->existeParametre("descr")){
            $ajoutMode = true;
            $titre = $this->requete->getParametre("titre");
            $descr = $this->requete->getParametre("descr");
            $image = $this->requete->getParametreNull("image");
            //$etat = $this->requete->getParametreNull("etat");
            $etat = 1; //sera utilisé plus tard pour gerer l'etat


            $this->profil->ajouterProfil( $titre, $descr, $image, $etat);
        }

        $this->genererVue(array("ajoutMode" => $ajoutMode), null, 'Vue/templateAdmin.php');

    }
//Modifier un profil
    public function modifierProfil()
    {
        $modifMode = false;
        $idProfil = null;
        $profil = [];
        if($this->requete->existeParametre("id")) {
            $idProfil = $this->requete->getParametre("id");

            $profil = $this->profil->getProfil($idProfil);
        }

        if ($this->requete->existeParametre("titre") && $this->requete->existeParametre("descr")&& !is_null($idProfil)){
            $modifMode = true;
            $titre = $this->requete->getParametre("titre");
            $descr = $this->requete->getParametre("descr");
            $image = $this->requete->getParametreNull("image");
            //$etat = $this->requete->getParametreNull("etat");
            $etat = 1; //sera utilisé plus tard pour gerer l'etat

            $this->profil->modifier($idProfil, $titre, $descr, $image, $etat);

            $this->rediriger("admin");
        }

        $this->genererVue(array("modifMode" => $modifMode, 'profil' => $profil ), null, 'Vue/templateAdmin.php');
    }

//Supprimer un profil
    public function supprimerProfil()
    {
        if($this->requete->existeParametre("id")) {
            $idProfil = $this->requete->getParametre("id");

            $profil = $this->profil->getProfil($idProfil);
        }

        $this->profil->supprimer($idProfil);
        $this->rediriger("admin");

    }

///////////****SLIDER ****/////////////
///

// Voir slider Affiche les détails sur un slider
    public function voirSlider() {
        $idSlider = $this->requete->getParametre("id");

        $slider = $this->slider->getSlider($idSlider);


        $this->genererVue(array('slider' => $slider), null, 'Vue/templateAdmin.php');
    }
//Ajouter un nouveau slider
    public function ajouterNouveauSlider()
    {
        $ajoutMode = false;

        if ($this->requete->existeParametre("image") ){
            $ajoutMode = true;


            $image = $this->requete->getParametre("image");
            $lien = $this->requete->getParametreNull("lien");
            $texte = $this->requete->getParametreNull("texte");
            $texte2 = $this->requete->getParametreNull("texte2");
            $estPrincipal = $this->requete->getParametreNull("estPrincipal");
            //$etat = $this->requete->getParametreNull("etat");
            $etat = 1; //sera utilisé plus tard pour gerer l'etat

            $this->slider->ajouterSlider( $image, $lien, $texte, $etat, $texte2, $estPrincipal);
        }

        $this->genererVue(array("ajoutMode" => $ajoutMode), null, 'Vue/templateAdmin.php');

    }
//Modifier un slider
    public function modifierSlider()
    {
        $modifMode = false;
        $idSlider = null;
        $slider = [];
        if($this->requete->existeParametre("id")) {
            $idSlider = $this->requete->getParametre("id");

            $slider = $this->slider->getSlider($idSlider);
        }

        if ($this->requete->existeParametre("image") && !is_null($idSlider)){
            $modifMode = true;
            $image = $this->requete->getParametre("image");
            $lien = $this->requete->getParametreNull("lien");
            $texte = $this->requete->getParametreNull("texte");
            $texte2 = $this->requete->getParametreNull("texte2");
            $estPrincipal = $this->requete->getParametreNull("estPrincipal");
            //$etat = $this->requete->getParametreNull("etat");
            $etat = 1; //sera utilisé plus tard pour gerer l'etat


            $this->slider->modifier($idSlider, $image, $lien, $texte, $etat, $texte2, $estPrincipal);

            $this->rediriger("admin");
        }

        $this->genererVue(array("modifMode" => $modifMode, 'slider' => $slider ), null, 'Vue/templateAdmin.php');
    }

//Supprimer un slider
    public function supprimerSlider()
    {
        if($this->requete->existeParametre("id")) {
            $idSlider = $this->requete->getParametre("id");

            $slider = $this->slider->getSlider($idSlider);
        }

        $this->slider->supprimer($idSlider);
        $this->rediriger("admin");

    }

    ///////***TOURNOI*****////
    ///

// Voir tournoi Affiche les détails sur un tournoi
    public function voirTournoi() {
        $idTournoi = $this->requete->getParametre("id");

        $tournoi = $this->tournoi->getTournoi($idTournoi);


        $this->genererVue(array('tournoi' => $tournoi), null, 'Vue/templateAdmin.php');
    }
//Ajouter un nouveau tournoi
    public function ajouterNouveauTournoi()
    {
        $ajoutMode = false;

        if ($this->requete->existeParametre("nom") && $this->requete->existeParametre("descr")){
            $ajoutMode = true;
            $date_d = $this->requete->getParametre("date_d");
            $date_f = $this->requete->getParametre("date_f");
            $nom = $this->requete->getParametre("nom");
            $type = $this->requete->getParametreNull("type");
            $lieu= $this->requete->getParametre("lieu");
            $descr = $this->requete->getParametreNull("descr");
            $image = $this->requete->getParametreNull("image");
            $lien = $this->requete->getParametreNull("lien");
            //$etat = $this->requete->getParametreNull("etat");
            $etat = 1; //sera utilisé plus tard pour gerer l'etat

            $this->tournoi->ajouterTournoi( $date_d, $date_f, $nom, $type, $lieu , $descr, $image, $lien, $etat);
        }

        $this->genererVue(array("ajoutMode" => $ajoutMode,  "tournoi" =>$this->tournoi ), null, 'Vue/templateAdmin.php');

    }
//Modifier un tournoi
    public function modifierTournoi()
    {
        $modifMode = false;
        $idTournoi = null;
        $tournoi = [];
        if($this->requete->existeParametre("id")) {
            $idTournoi = $this->requete->getParametre("id");

            $tournoi = $this->tournoi->getTournoi($idTournoi);
        }

        if ($this->requete->existeParametre("titre") && $this->requete->existeParametre("descr")&& !is_null($idTournoi)){
            $modifMode = true;

            $date_d = $this->requete->getParametre("date_d");
            $date_f = $this->requete->getParametre("date_f");
            $nom = $this->requete->getParametre("nom");
            $type = $this->requete->getParametreNull("type");
            $lieu= $this->requete->getParametre("lieu");
            $descr = $this->requete->getParametreNull("descr");
            $image = $this->requete->getParametreNull("image");
            $lien = $this->requete->getParametreNull("lien");
            //$etat = $this->requete->getParametreNull("etat");
            $etat = 1; //sera utilisé plus tard pour gerer l'etat


            $this->tournoi->modifier($idTournoi, $date_d, $date_f, $nom, $type, $lieu , $descr, $image, $lien, $etat);

            $this->rediriger("admin");
        }

        $this->genererVue(array("modifMode" => $modifMode, 'tournoi' => $tournoi ), null, 'Vue/templateAdmin.php');
    }

//Supprimer un tournoi
    public function supprimerTournoi()
    {
        if($this->requete->existeParametre("id")) {
            $idTournoi = $this->requete->getParametre("id");

            $tournoi = $this->tournoi->getTournoi($idTournoi);
        }

        $this->tournoi->supprimer($idTournoi);
        $this->rediriger("admin");

    }





///////******CONTACT*************//
///

// Voir contact Affiche les détails sur un contact
    public function voirContact()
    {
        $idContact = $this->requete->getParametre("id");

        $contact = $this->contact->getContact($idContact);


        $this->genererVue(array('contact' => $contact), null, 'Vue/templateAdmin.php');
    }

//Ajouter un nouveau contact
    public function ajouterNouveauContact()
    {
        $ajoutMode = false;

        if ($this->requete->existeParametre("id")) {
            $ajoutMode = true;
            $nom = $this->requete->getParametre("nom");
            $email = $this->requete->getParametre("email");
            $objet = $this->requete->getParametre("objet");
            $message = $this->requete->getParametre("message");


            $this->contact->ajouterContact($nom, $email, $objet, $message);
        }

        $this->genererVue(array("ajoutMode" => $ajoutMode), null, 'Vue/templateAdmin.php');

    }

//Modifier un contact
    public function modifierContact()
    {
        $modifMode = false;
        $idContact = null;
        $contact = [];
        if ($this->requete->existeParametre("id")) {
            $idContact = $this->requete->getParametre("id");

            $contact = $this->contact->getContact($idContact);
        }

        if ($this->requete->existeParametre("message") && !is_null($idContact)) {
            $modifMode = true;
            $nom = $this->requete->getParametre("nom");
            $email = $this->requete->getParametre("email");
            $objet = $this->requete->getParametre("objet");
            $message = $this->requete->getParametre("message");

            $this->contact->modifier($idContact, $nom, $email, $objet, $message);

            $this->rediriger("admin");
        }

        $this->genererVue(array("modifMode" => $modifMode, 'contact' => $contact), null, 'Vue/templateAdmin.php');
    }

//Supprimer un contact
    public function supprimerContact()
    {
        if ($this->requete->existeParametre("id")) {
            $idContact = $this->requete->getParametre("id");

            $contact = $this->contact->getContact($idContact);
        }

        $this->contact->supprimer($idContact);
        $this->rediriger("admin");

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



///////////////////////////////////////////////////////////////
///
    public function UploadImage()
    {

// Constantes
        define('TARGET', 'C:\wamp64\www\P5\Upload\Image');    // Repertoire cible
        define('MAX_SIZE', 10000000);    // Taille max en octets du fichier
        define('WIDTH_MAX', 6200);    // Largeur max de l'image en pixels
        define('HEIGHT_MAX', 6000);    // Hauteur max de l'image en pixels

// Tableaux de donnees
        $tabExt = array('jpg','gif','png','jpeg', 'JPEG' , 'JPG');    // Extensions autorisees
        $infosImg = array();

// Variables
        $extension = '';
        $message = '';
        $nomImage = '';
        $ajoutMode = false;



        /************************************************************
         * Script d'upload
         *************************************************************/
        if(!empty($_POST))
        {
            // On verifie si le champ est rempli
            if( !empty($_FILES['fichier']['name']) )
            {
                // Recuperation de l'extension du fichier
                $extension  = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);

                // On verifie l'extension du fichier
                if(in_array(strtolower($extension),$tabExt))
                {
                    //On verifie
                    //if($_FILES['fichier']['error'] == 1){echo "le fichier n'existe pas";}
                    $temp = $_FILES['fichier']['tmp_name'];

                        // On recupere les dimensions du fichier
                        $infosImg = getimagesize($temp);

                        // On verifie les dimensions et taille de l'image
                        if(($infosImg[0] <= WIDTH_MAX) && ($infosImg[1] <= HEIGHT_MAX) && (filesize($_FILES['fichier']['tmp_name']) <= MAX_SIZE))
                        {
                            // Parcours du tableau d'erreurs
                            if(isset($_FILES['fichier']['error'])
                                && UPLOAD_ERR_OK === $_FILES['fichier']['error'])
                            {
                                // On renomme le fichier
                                $nomImage = md5(uniqid()) .'.'. $extension;

                                // Si c'est OK, on teste l'upload

                                if(move_uploaded_file($_FILES['fichier']['tmp_name'], TARGET.$nomImage))
                                {
                                    $ajoutMode = true;
                                    $message = 'Upload réussi !';
                                }
                                else
                                {
                                    // Sinon on affiche une erreur systeme
                                    $message = 'Problème lors de l\'upload !';
                                }
                            }
                            else
                            {
                                $message = 'Une erreur interne a empêché l\'uplaod de l\'image';
                            }
                        }
                        else
                        {
                            // Sinon erreur sur les dimensions et taille de l'image
                            $message = 'Erreur dans les dimensions de l\'image !';
                        }
                }
                else
                {
                    // Sinon on affiche une erreur pour l'extension
                    $message = 'L\'extension du fichier est incorrecte !';
                }
            }
            else
            {
                // Sinon on affiche une erreur pour le champ vide
                $message = 'Veuillez remplir le formulaire svp !';
            }
        }
        /*var_dump(($_FILES['fichier']['name']));
        var_dump($_FILES['fichier']['tmp_name']);
        var_dump($temp);
        var_dump($infosImg[2]);*/



        $this->genererVue(array( "message" => $message , "ajoutMode" => $ajoutMode), null, 'Vue/templateAdmin.php');
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




    //////////////////////////////////////////////
    ///
    ///
    public function upload()
    {
        $message= "";
        // Allowed origins to upload images
        $accepted_origins = array("http://localhost", "http://samirah-tachet.com");

        // Images upload path
        $imageFolder = "images/";

        reset($_FILES); // on pointe sur le premier element du tableau des elements telechargés
        $temp = current($_FILES);//On mets dans temp le premier element
        if(is_uploaded_file($temp['tmp_name'])){ //si le fichier est telechargé
            if(isset($_SERVER['HTTP_ORIGIN'])){  // origine server
                if(in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)){ //on teste origine
                    header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
                }else{
                    header("HTTP/1.1 403 Origin Denied");
                    return;
                }
            }

            // on teste le nom du fichier
            if(preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])){
                header("HTTP/1.1 400 Invalid file name.");
                $message = "HTTP/1.1 400 Invalid file name.";
                return;
            }

            // on verifie l'extension
            if(!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))){
                header("HTTP/1.1 400 Invalid extension.");
                $message = "HTTP/1.1 400 Invalid extension.";
                return;
            }

            // Accept upload if there was no origin, or if it is an accepted origin
            $filetowrite = $imageFolder . $temp['name'];
            move_uploaded_file($temp['tmp_name'], $filetowrite);

            // Respond to the successful upload with JSON.
            echo json_encode(array('location' => $filetowrite));
            $message = "successful upload with JSON";
        } else {
            // Notify editor that the upload failed
            header("HTTP/1.1 500 Server Error");
            $message = "HTTP/1.1 500 Server Error";
        }


    }

}
