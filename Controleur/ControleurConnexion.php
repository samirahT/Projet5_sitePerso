<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 22/09/2017
 * Time: 11:19
 */

require_once 'Framework/Controleur.php';
require_once 'Modele/Utilisateur.php';

/**
 * Contrôleur gérant la connexion au site

 */
class ControleurConnexion extends Controleur
{
    private $utilisateur;

    public function __construct()
    {
        $this->utilisateur = new Utilisateur();
    }

    public function index()
    {
        $this->genererVue();
    }

    public function connecter()
    {
        if ($this->requete->existeParametre("login") && $this->requete->existeParametre("mdp")) {
            $login = $this->requete->getParametre("login");
            $mdp = $this->requete->getParametre("mdp");
            if ($this->utilisateur->connecter($login, $mdp)) {
                $utilisateur = $this->utilisateur->getUtilisateur($login, $mdp);
                $this->requete->getSession()->setAttribut("idUtilisateur",
                    $utilisateur['idUtilisateur']);
                $this->requete->getSession()->setAttribut("login",
                    $utilisateur['login']);
                $this->rediriger("admin");
            }
            else
                $this->genererVue(array('msgErreur' => 'Login ou mot de passe incorrects'),
                    "index", 'Vue/templateAdmin.php');
        }
        else
            throw new Exception("Action impossible : login ou mot de passe non défini");
    }

    public function deconnecter()
    {
        $this->requete->getSession()->detruire();
        $this->rediriger("accueil");
    }

}
