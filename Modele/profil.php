<?php
/**
 * Created by PhpStorm.
 * User: Samirah
 * Date: 20/09/2017
 * Time: 16:57
 */

require_once 'Framework/Modele.php';

/**
 * Fournit les services d'accès
 */
class Profil extends Modele {

    /** Renvoie la liste des Profils du blog
     *
     * @return PDOStatement La liste des profils
     */
    public function getProfils() {
        $sql = 'select id, titre,'
            . ' descr, image, etat  from profil'
            . ' order by id desc';
        $profils = $this->executerRequete($sql);
        return $profils;
    }

    /** Renvoie les informations sur un profil
     *
     * @param int id du profil
     * @return array Le profil
     * @throws Exception Si le type du profil est inconnu
     */
    public function getProfil($id) {
        $sql = 'select id, titre,'
            . ' descr, image, etat  from profil'
            . ' where id=?';
        $profil = $this->executerRequete($sql, array($id));
        if ($profil->rowCount() > 0)
            return $profil->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun profil ne correspond au type  '$id'");
    }

    /**
     * Renvoie le nombre total de profils
     *
     * @return int Le nombre de profils
     */
    public function getNombreProfils()
    {
        $sql = 'select count(*) as nbProfils from profil';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbProfils'];
    }

    // Ajoute un profil dans la base
    public function ajouterProfil( $titre, $descr, $image, $etat) {
        $sql = 'insert into profil(titre, descr, image , etat)'
            . ' values( ?, ? , ?, ?)';

        $this->executerRequete($sql, array( $titre, $descr, $image , $etat));
    }

    // modifier un profil dans la base
    public function Modifier( $id, $titre, $descr, $image, $etat) {


        $sql = "UPDATE `profil`" .  "SET `titre` = ? , `descr` = ? , `image` = ? , `etat` = ? " .  "WHERE `profil`.`id` = ?";

        $this->executerRequete($sql, array( $titre, $descr, $image , $etat , $id));
    }

    //Supprimer un profil dans la base
    public function Supprimer($id){

        $sql = "DELETE FROM `profil` " . "WHERE `profil`.`id` = ?";
        $this->executerRequete($sql, array($id));

    }


}