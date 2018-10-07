<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 05/09/2017
 * Time: 16:33
 */
require_once 'Framework/Controleur.php';
require_once 'Modele/image.php';

/**
 * Contrôleur des actions liées aux images

 */
class ControleurImage extends Controleur {

    private $image;


    /**
     * Constructeur
     */
    public function __construct() {
        $this->image = new Image();

    }

    // Affiche les détails sur un image
    public function index()
    {



        $this->genererVue(array(), null, 'Vue/template.php');



    }
    public function upload()
    {

    }

    // Affiche la liste un image
    public function listeImage() {

        $images = $this->image->getImages();


        $this->genererVue(array('images' => $images), null, 'Vue/template.php');
    }


}

