<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 22/09/2017
 * Time: 11:31
 */
require_once 'Framework/Modele.php';

/**
 * Modélise un utilisateur du blog
 */
class Utilisateur extends Modele {

    /**
     * Vérifie qu'un utilisateur existe dans la BD
     *
     * @param string $login Le login
     * @param string $mdp Le mot de passe
     * @return boolean Vrai si l'utilisateur existe, faux sinon
     */
    public function connecter($login, $mdp)
    {
        $sql = "select UTIL_ID from utilisateur where UTIL_LOGIN=? and UTIL_MDP=?";
        $utilisateur = $this->executerRequete($sql, array($login, $mdp));
        return ($utilisateur->rowCount() == 1);
    }

    /**
     * Renvoie un utilisateur existant dans la BD
     *
     * @param string $login Le login
     * @param string $mdp Le mot de passe
     * @return mixed L'utilisateur
     * @throws Exception Si aucun utilisateur ne correspond aux paramètres
     */
    public function getUtilisateur($login, $mdp)
    {
        $sql = "select UTIL_ID as idUtilisateur, UTIL_LOGIN as login, UTIL_MDP as mdp 
            from utilisateur where UTIL_LOGIN=? and UTIL_MDP=?";
        $utilisateur = $this->executerRequete($sql, array($login, $mdp));
        if ($utilisateur->rowCount() == 1)
            return $utilisateur->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun utilisateur ne correspond aux identifiants fournis");
    }

}
