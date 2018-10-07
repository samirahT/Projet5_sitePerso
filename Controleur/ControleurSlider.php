<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 05/09/2017
 * Time: 16:33
 */
require_once 'Framework/Controleur.php';
require_once 'Modele/slider.php';

/**
 * Contrôleur des actions liées aux sliders

 */
class ControleurSlider extends Controleur {

    private $slider;


    /**
     * Constructeur
     */
    public function __construct() {
        $this->slider = new Slider();

    }

    // Affiche les détails sur un slider
    public function index() {

        $id = $this->requete->getParametre("id");

        $slider = $this->slider->getSlider($id);

        $this->genererVue(array('slider' => $slider), null, 'Vue/template.php');
    }

    // Affiche la liste un slider
    public function listeSlider() {

        $sliders = $this->slider->getSliders();
var_dump($sliders);



        $this->genererVue(array('sliders' => $sliders ), null, 'Vue/template.php');
    }

}

