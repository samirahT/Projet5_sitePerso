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
class Actu extends Modele {

    /** Renvoie la liste des Actus du blog
     *
     * @return PDOStatement La liste des actus
     */
    public function getActus() {
        $sql = 'select id, titre,'
            . ' descr_c, descr, image, date, etat  from actu'
            . ' order by id desc';
        $actus = $this->executerRequete($sql);
        return $actus;
    }


    /** Renvoie la liste des Actus du blog par 4
     *
     * @return PDOStatement La liste des actus
     */
    public function getActusParPage() {

        $actusParPage= 4; //Afficher 4 actualités par page.


        $sql = 'select count(*) as total from actu'; //On récupérons ele nombre de ligne total dans $retour_total
        $retour_total = $this->executerRequete($sql); //On execute la requete


        $donnees_total= $retour_total->fetch(PDO::FETCH_ASSOC); //On range retour sous la forme d'un tableau.

        $total=$donnees_total['total']; //On récupère le total pour le placer dans la variable $total.

        //on compte le nombre de pages.
        $nombreDePages=ceil($total/$actusParPage);

        if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
        {
            $pageActuelle=intval($_GET['page']);

            if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
            {
                $pageActuelle=$nombreDePages;
            }
        }
        else // Sinon
        {
            $pageActuelle=1; // La page actuelle est la n°1
        }

        $premiereEntree=($pageActuelle-1)*$actusParPage; // On calcul la première entrée à lire




        $sql = 'select id, titre,'
            . ' descr_c, descr, image, date, etat  from actu'
            . ' order by id desc LIMIT '.$premiereEntree.', '.$actusParPage.'';
        $actusPage = $this->executerRequete($sql);

        return $actusPage ;
    }

    public function getPageActuelle()
    {
        $actusParPage= 4; //Afficher 4 actualités par page.


        $sql = 'select count(*) as total from actu'; //On récupérons ele nombre de ligne total dans $retour_total
        $retour_total = $this->executerRequete($sql); //On execute la requete


        $donnees_total= $retour_total->fetch(PDO::FETCH_ASSOC); //On range retour sous la forme d'un tableau.

        $total=$donnees_total['total']; //On récupère le total pour le placer dans la variable $total.

        //on compte le nombre de pages.
        $nombreDePages=ceil($total/$actusParPage);

        if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
        {
            $pageActuelle=intval($_GET['page']);

            if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
            {
                $pageActuelle=$nombreDePages;
            }
        }
        else // Sinon
        {
            $pageActuelle=1; // La page actuelle est la n°1
        }

        return $pageActuelle;


    }

    public function getNombrePage()
    {
        $actusParPage= 4; //Afficher 4 actualités par page.


        $sql = 'select count(*) as total from actu'; //On récupérons ele nombre de ligne total dans $retour_total
        $retour_total = $this->executerRequete($sql); //On execute la requete


        $donnees_total= $retour_total->fetch(PDO::FETCH_ASSOC); //On range retour sous la forme d'un tableau.

        $total=$donnees_total['total']; //On récupère le total pour le placer dans la variable $total.

        //on compte le nombre de pages.
        $nombreDePages=ceil($total/$actusParPage);
        return $nombreDePages;
    }



    /** Renvoie les informations sur un actu
     *
     * @param int id du actu
     * @return array Le actu
     * @throws Exception Si le type du actu est inconnu
     */
    public function getActu($id) {
        $sql ='select id, titre,'
            . ' descr_c, descr, image, date, etat  from actu'
            . ' where id=?';
        $actu = $this->executerRequete($sql, array($id));
        if ($actu->rowCount() > 0)
            return $actu->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun actu ne correspond a l'id '$id'");
    }

    /**
     * Renvoie le nombre total de actus
     *
     * @return int Le nombre de actus
     */
    public function getNombreActus()
    {
        $sql = 'select count(*) as nbActus from actu';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbActus'];
    }

    // Ajoute un actu dans la base
    public function ajouterActu( $titre,$descr_c, $descr, $image,  $etat) {
        $sql = 'insert into actu(titre, descr_c, descr, image, date, etat)'
            . ' values( ?, ? , ?, ? ,? ,?)';
        //$date = date(DATE_ATOM);  // Récupère la date courante
        $date = date('Y-m-d H:i:s');

        $this->executerRequete($sql, array( $titre, $descr_c, $descr, $image, $date, $etat));
    }

    // modifier un actu dans la base
    public function Modifier($id, $titre,$descr_c, $descr, $image,$date, $etat) {
        $sql = "UPDATE `actu`" .  "SET `titre` = ? ,`descr_c` = ? , `descr` = ? , `image` = ? , `date` = ? , `etat` = ? " .  "WHERE `actu`.`id` = ?";

        $this->executerRequete($sql, array( $titre, $descr_c, $descr, $image,$date, $etat, $id));
    }

    //Supprimer un actu dans la base
    public function Supprimer($id){

        $sql = "DELETE FROM `actu` " . "WHERE `actu`.`id` = ?";
        $this->executerRequete($sql, array($id));

    }


}