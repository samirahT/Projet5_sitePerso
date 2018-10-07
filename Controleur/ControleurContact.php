<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 05/09/2017
 * Time: 16:33
 */
require_once 'Framework/Controleur.php';
require_once 'Modele/contact.php';

/**
 * Contrôleur des actions liées aux contacts

 */
class ControleurContact extends Controleur {

    private $contact;


    /**
     * Constructeur
     */
    public function __construct() {
        $this->contact = new Contact();

    }

    // Affiche les détails sur un contact
    public function index() {

        $ajoutMode = false;

        if ($this->requete->existeParametre("email")) {
            $ajoutMode = true;
            $nom = $this->requete->getParametre("nom");
            $email = $this->requete->getParametre("email");
            $objet = $this->requete->getParametre("objet");
            $message = $this->requete->getParametre("message");


            $this->contact->ajouterContact($nom, $email, $objet, $message);
        }



        $this->genererVue(array("ajoutMode" => $ajoutMode), null, 'Vue/template.php');


    }

    // Affiche la liste un contact
    public function listeContact() {

        $contacts = $this->contact->getContacts();


        $this->genererVue(array('contacts' => $contacts), null, 'Vue/template.php');
    }

}

