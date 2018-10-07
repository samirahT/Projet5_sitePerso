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
class contact extends Modele {

    /** Renvoie la liste des contacts du blog
     *
     * @return PDOStatement La liste des contacts
     */
    public function getContacts() {
        $sql = 'select id, nom,'
            . ' email, objet, message  from contact'
            . ' order by id desc';
        $contacts = $this->executerRequete($sql);
        return $contacts;
    }

    /** Renvoie les informations sur un contact
     *
     * @param int id du contact
     * @return array Le contact
     * @throws Exception Si le type du contact est inconnu
     */
    public function getContact($id) {
        $sql = 'select id, nom,'
            . ' email, objet, message  from contact'
            . ' where id = ?';
        $contact = $this->executerRequete($sql, array($id));
        if ($contact->rowCount() > 0)
            return $contact->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun contact ne correspond au type  '$id'");
    }

    /**
     * Renvoie le nombre total de contacts
     *
     * @return int Le nombre de contacts
     */
    public function getNombreContacts()
    {
        $sql = 'select count(*) as nbcontacts from contact';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbcontacts'];
    }

    // Ajoute un contact dans la base
    public function ajouterContact( $nom, $email, $objet, $message) {
        $sql = 'insert into contact(nom , email, objet, message)'
            . ' values( ?, ? , ? , ?)';

        $this->executerRequete($sql, array( $nom, $email, $objet, $message ));
    }

    // modifier un contact dans la base
    public function Modifier( $id ,$nom, $email, $objet, $message) {
        $sql = "UPDATE `contact`" .  "SET `nom` = ? , `email` = ? ,  `objet` = ? , `message` = ? " .  "WHERE `contact`.`id` = ?";

        $this->executerRequete($sql, array(  $id ,$nom, $email, $objet, $message));
    }

    //Supprimer un contact dans la base
    public function Supprimer($id){

        $sql = "DELETE FROM `contact` " . "WHERE `contact`.`id` = ?";
        $this->executerRequete($sql, array($id));

    }


}