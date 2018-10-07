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
class Entourage extends Modele {

    /** Renvoie la liste des Entourages du blog
     *
     * @return PDOStatement La liste des entourages
     */
    public function getEntourages() {
        $sql = 'select id, titre, nom,'
            . ' descr, image, etat  from entourage'
            . ' order by id desc';
        $entourages = $this->executerRequete($sql);
        return $entourages;
    }

    /** Renvoie les informations sur un entourage
     *
     * @param int id du entourage
     * @return array Le entourage
     * @throws Exception Si le type du entourage est inconnu
     */
    public function getEntourage($id) {
        $sql = 'select id, titre, nom ,'
            . ' descr, image, etat  from entourage'
            . ' where id=?';
        $entourage = $this->executerRequete($sql, array($id));
        if ($entourage->rowCount() > 0)
            return $entourage->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun entourage ne correspond a l'id '$id'");
    }

    /**
     * Renvoie le nombre total de entourages
     *
     * @return int Le nombre de entourages
     */
    public function getNombreEntourages()
    {
        $sql = 'select count(*) as nbEntourages from entourage';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbEntourages'];
    }

    // Ajoute un entourage dans la base
    public function ajouterEntourage( $titre,$nom, $descr, $image, $etat) {
        $sql = 'insert into entourage(titre, nom, descr, image , etat)'
            . ' values( ?, ? , ?, ? ,?)';

        $this->executerRequete($sql, array( $titre, $nom, $descr, $image , $etat));
    }

    // modifier un entourage dans la base
    public function Modifier( $id,$titre, $nom , $descr, $image, $etat) {
        $sql = "UPDATE `entourage`" .  "SET `titre` = ? ,`nom` = ? , `descr` = ? , `image` = ? , `etat` = ? " .  "WHERE `entourage`.`id` = ?";

        $this->executerRequete($sql, array( $titre, $nom,  $descr, $image , $etat, $id));
    }

    //Supprimer un entourage dans la base
    public function Supprimer($id){

        $sql = "DELETE FROM `entourage` " . "WHERE `entourage`.`id` = ?";
        $this->executerRequete($sql, array($id));

    }


}