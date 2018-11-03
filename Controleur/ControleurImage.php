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
    private $message;


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

    // Affiche la liste un image
    public function listeImage() {

        $images = $this->image->getImages();


        $this->genererVue(array('images' => $images), null, 'Vue/template.php');
    }


}

