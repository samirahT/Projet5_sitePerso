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
class Slider extends Modele {

    /** Renvoie la liste des Sliders du blog
     *
     * @return PDOStatement La liste des sliders
     */
    public function getSliders() {
        $sql = 'select id, image,'
            . ' lien, texte, etat , texte2, estPrincipal  from slider'
            . ' order by id desc';
        $sliders = $this->executerRequete($sql);
        return $sliders;
    }

    /** Renvoie les informations sur un slider
     *
     * @param int id du slider
     * @return array Le slider
     * @throws Exception Si le type du slider est inconnu
     */
    public function getSlider($id) {
        $sql = 'select id, image,'
            . ' lien, texte, etat , texte2 , estPrincipal from slider'
            . ' where id=?';
        $slider = $this->executerRequete($sql, array($id));
        if ($slider->rowCount() > 0)
            return $slider->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun slider ne correspond au type  '$id'");
    }

    /**
     * Renvoie le nombre total de sliders
     *
     * @return int Le nombre de sliders
     */
    public function getNombreSliders()
    {
        $sql = 'select count(*) as nbSliders from slider';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbSliders'];
    }

    // Ajoute un slider dans la base
    public function ajouterSlider( $image, $lien, $texte, $etat, $texte2, $estPrincipal) {

        if(intval($estPrincipal) ==1)
        {
            $sql= 'update slider set estPrincipal = 0 ';
            $this->executerRequete($sql, array( ));

        }

        $sql = 'insert into slider(image , lien , texte, etat, texte2, estPrincipal)'
            . ' values( ?, ? , ?, ?, ?, ?)';

        $this->executerRequete($sql, array( $image, $lien, $texte, $etat, $texte2, $estPrincipal));
    }

    // modifier un slider dans la base
    public function Modifier( $id, $image, $lien, $texte, $etat, $texte2, $estPrincipal) {
        $sql = "UPDATE `slider`" .  "SET `image` = ? , `lien` = ? , `texte` = ? , `etat` = ? , `texte2` = ?, `estPrincipal` = ?  " .  "WHERE `slider`.`id` = ?";

        $this->executerRequete($sql, array( $image, $lien, $texte, $etat,  $texte2, $estPrincipal, $id));
    }

    //Supprimer un slider dans la base
    public function Supprimer($id){

        $sql = "DELETE FROM `slider` " . "WHERE `slider`.`id` = ?";
        $this->executerRequete($sql, array($id));

    }


}