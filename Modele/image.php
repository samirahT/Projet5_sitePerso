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
class Image extends Modele {

    /** Renvoie la liste des Images du blog
     *
     * @return PDOStatement La liste des images
     */
    public function getImages() {
        $sql = 'select id, nom,'
            . ' taille  from image'
            . ' order by id desc';
        $images = $this->executerRequete($sql);
        return $images;
    }

    /** Renvoie les informations sur un image
     *
     * @param int id du image
     * @return array Le image
     * @throws Exception Si le type du image est inconnu
     */
    public function getImage($id) {
        $sql ='select id, nom,'
            . ' taille  from image'
            . ' where id=?';
        $image = $this->executerRequete($sql, array($id));
        if ($image->rowCount() > 0)
            return $image->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun image ne correspond a l'id '$id'");
    }

    /**
     * Renvoie le nombre total de images
     *
     * @return int Le nombre de images
     */
    public function getNombreImages()
    {
        $sql = 'select count(*) as nbImages from image';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbImages'];
    }

    // Ajoute un image dans la base
    public function ajouterImage( $nom,$taille) {
        $sql = 'insert into image(nom, taille)'
            . ' values( ?, ? )';

        $this->executerRequete($sql, array( $nom, $taille));
    }

    // modifier un image dans la base
    public function Modifier($id, $nom,$taille) {
        $sql = "UPDATE `image`" .  "SET `nom` = ? ,`taille` = ?  " .  "WHERE `image`.`id` = ?";

        $this->executerRequete($sql, array( $nom, $taille, $id));
    }

    //Supprimer un image dans la base
    public function Supprimer($id){

        $sql = "DELETE FROM `image` " . "WHERE `image`.`id` = ?";
        $this->executerRequete($sql, array($id));

    }


}