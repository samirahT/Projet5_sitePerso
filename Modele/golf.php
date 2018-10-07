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
class Golf extends Modele {

    /** Renvoie la liste des Golfs du blog
     *
     * @return PDOStatement La liste des golfs
     */
    public function getGolfs() {
        $sql = 'select id, titre,'
            . ' descr, type, lien , image, etat  from golf'
            . ' order by id desc';
        $golfs = $this->executerRequete($sql);
        return $golfs;
    }

    /** Renvoie les informations sur un golf
     *
     * @param int id du golf
     * @return array Le golf
     * @throws Exception Si le type du golf est inconnu
     */
    public function getGolf($id) {
        $sql = 'select id, titre,'
            . ' descr, type, lien , image, etat  from golf'
            . ' where id=?';
        $golf = $this->executerRequete($sql, array($id));
        if ($golf->rowCount() > 0)
            return $golf->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun golf ne correspond a l'id '$id'");
    }

    /**
     * Renvoie le nombre total de golfs
     *
     * @return int Le nombre de golfs
     */
    public function getNombreGolfs()
    {
        $sql = 'select count(*) as nbGolfs from golf';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbGolfs'];
    }

    // Ajoute un golf dans la base
    public function ajouterGolf( $titre, $descr, $type, $lien, $image, $etat) {
        $sql = 'insert into golf(titre, descr, type, lien, image , etat)'
            . ' values( ?, ? , ?, ? ,? , ?)';

        $this->executerRequete($sql, array( $titre, $descr, $type, $lien, $image, $etat));
    }

    // modifier un golf dans la base
    public function Modifier( $id, $titre, $descr, $type, $lien, $image, $etat) {
        $sql = "UPDATE `golf`" .  "SET `titre` = ? , `descr` = ? , `type` = ?, `lien` = ? ,`image` = ? , `etat` = ? " .  "WHERE `golf`.`id` = ?";

        $this->executerRequete($sql, array( $titre, $descr, $type, $lien, $image, $etat, $id));
    }

    //Supprimer un golf dans la base
    public function Supprimer($id){

        $sql = "DELETE FROM `golf` " . "WHERE `golf`.`id` = ?";
        $this->executerRequete($sql, array($id));

    }


}