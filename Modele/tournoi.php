-<?php
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
class Tournoi extends Modele {

    /** Renvoie la liste des Tournois du blog
     *
     * @return PDOStatement La liste des tournois
     */
    public function getTournois() {
        $sql = 'select id, date_d, date_f,'
            . ' nom, type, lieu , descr, image, lien , etat  from tournoi'
            . ' order by id desc';
        $tournois = $this->executerRequete($sql);
        return $tournois;
    }

    /** Renvoie les informations sur un tournoi
     *
     * @param int id du tournoi
     * @return array Le tournoi
     * @throws Exception Si le type du tournoi est inconnu
     */
    public function getTournoi($id) {
        $sql = 'select id, date_d, date_f,'
            . ' nom, type, lieu , descr, image, lien , etat  from tournoi'
            . ' where id=?';
        $tournoi = $this->executerRequete($sql, array($id));
        if ($tournoi->rowCount() > 0)
            return $tournoi->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun tournoi ne correspond a l'id '$id'");
    }

    /**
     * Renvoie le nombre total de tournois
     *
     * @return int Le nombre de tournois
     */
    public function getNombreTournois()
    {
        $sql = 'select count(*) as nbTournois from tournoi';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbTournois'];
    }

    // Ajoute un tournoi dans la base
    public function ajouterTournoi( $date_d, $date_f, $nom, $type, $lieu , $descr, $image, $lien, $etat) {
        $sql = 'insert into tournoi(date_d, date_f , nom , type, lieu , descr , image, lien , etat)'
            . ' values( ?, ? , ?, ? ,? , ? , ? ,? ,?)';

        $this->executerRequete($sql, array( $date_d, $date_f, $nom, $type, $lieu , $descr, $image, $lien, $etat));
    }

    // modifier un tournoi dans la base
    public function Modifier( $id, $date_d, $date_f, $nom, $type, $lieu , $descr, $image, $lien, $etat) {
        $sql = "UPDATE `tournoi`" .  "SET `date_d` = ? , `date_f` = ? ,`nom`= ? , `type` = ? , `lieu` = ? , `descr` = ?, `image` = ? ,`lien` = ? , `etat` = ? " .  "WHERE `tournoi`.`id` = ?";

        $this->executerRequete($sql, array( $date_d, $date_f, $nom, $type, $lieu , $descr, $image, $lien, $etat , $id));
    }

    //Supprimer un tournoi dans la base
    public function Supprimer($id){

        $sql = "DELETE FROM `tournoi` " . "WHERE `tournoi`.`id` = ?";
        $this->executerRequete($sql, array($id));

    }


}