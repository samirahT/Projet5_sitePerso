<?php $this->titre = "Index - Administration" ?>

<h2>Administration</h2>

Bienvenue, <?= $this->nettoyer($login) ?> !




Ce site comporte <?= $this->nettoyer($nbActus) ?> actualité(s) ,
<?= $this->nettoyer($nbEntourages)  ?> entourage (s) ,
<?= $this->nettoyer($nbExps) ?> expediteur (s) ,
<?= $this->nettoyer($nbGolfs) ?> golf (s) ,
<?= $this->nettoyer($nbProfils) ?> profil (s) ,
<?= $this->nettoyer($nbSliders) ?> slider (s) ,
<?= $this->nettoyer($nbTournois) ?> tournoi (s) ,
<?= $this->nettoyer($nbMessages) ?> message (s) .




<br>
<a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=ajouterNouveauContenu"  ?>"><i class="fa fa-plus" aria-htypeden="true"></i> Ajouter un nouveau contenu</a>


<h2>Actualité</h2>

<div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Date</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Etat</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($actus as $actu): ?>
            <tr>

                <td>
                    <?= $this->nettoyer($actu['date']) ?>
                </td>
                <td><a href="<?= "index.php?controleur=actu&action=index&id=" . $actu['id'] ?>"><?= $this->nettoyer($actu['titre']) ?>
                    </a>
                </td>
                <td><a href="<?= "index.php?controleur=actu&action=index&id=" . $actu['id'] ?>"><?= $this->nettoyer($actu['descr_c']) ?>
                    </a>
                </td>
                <td><a href="<?= "index.php?controleur=actu&action=index&id=" . $actu['id'] ?>"><?= $this->nettoyer($actu['etat']) ?>
                    </a>
                </td>
                <td>
                    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=voirActu&id=" . $actu['id'] ?>"><i class="fa fa-eye" aria-htypeden="true"></i>Voir</a>
                    <a class="btn btn-success " href="<?= "index.php?controleur=admin&action=modifierActu&id=" . $actu['id'] ?>"><i class="fa fa-pencil fa-fw"></i>Modifier</a>
                    <a class="btn btn-danger popconfirm" type="buttonSuprr" href="<?= "index.php?controleur=admin&action=supprimerActu&id=" . $actu['id'] ?>"><i class="fa fa-trash-o fa-lg"></i>Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <hr />
</div>


<h2>Entourage</h2>
<div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Etat</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($entourages as $entourage): ?>
            <tr>

                <td>
                    <?= $this->nettoyer($entourage['nom']) ?>
                </td>
                <td><a href="<?= "index.php?controleur=entourage&action=index&id=" . $entourage['id'] ?>"><?= $this->nettoyer($entourage['titre']) ?>
                    </a>
                </td>
                <td><a href="<?= "index.php?controleur=entourage&action=index&id=" . $entourage['id'] ?>"><?= $this->nettoyer($entourage['descr']) ?>
                    </a>
                </td>
                <td><a href="<?= "index.php?controleur=entourage&action=index&id=" . $entourage['id'] ?>"><?= $this->nettoyer($entourage['etat']) ?>
                    </a>
                </td>
                <td>
                    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=voirEntourage&id=" . $entourage['id'] ?>"><i class="fa fa-eye" aria-htypeden="true"></i>Voir</a>
                    <a class="btn btn-success " href="<?= "index.php?controleur=admin&action=modifierEntourage&id=" . $entourage['id'] ?>"><i class="fa fa-pencil fa-fw"></i>Modifier</a>
                    <a class="btn btn-danger popconfirm" type="buttonSuprr" href="<?= "index.php?controleur=admin&action=supprimerEntourage&id=" . $entourage['id'] ?>"><i class="fa fa-trash-o fa-lg"></i>Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <hr />
</div>

<h2>Profil</h2>
<div>
    <table class="table table-hover">
        <thead>
        <tr>

            <th>Titre</th>
            <th>Description</th>
            <th>Etat</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($profils as $profil): ?>
            <tr>


                <td><a href="<?= "index.php?controleur=profil&action=index&id=" . $profil['id'] ?>"><?= $this->nettoyer($profil['titre']) ?>
                    </a>
                </td>
                <td><a href="<?= "index.php?controleur=profil&action=index&id=" . $profil['id'] ?>"><?= $this->nettoyer($profil['descr']) ?>
                    </a>
                </td>
                <td><a href="<?= "index.php?controleur=profil&action=index&id=" . $profil['id'] ?>"><?= $this->nettoyer($profil['etat']) ?>
                    </a>
                </td>
                <td>
                    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=voirProfil&id=" . $profil['id'] ?>"><i class="fa fa-eye" aria-htypeden="true"></i>Voir</a>
                    <a class="btn btn-success " href="<?= "index.php?controleur=admin&action=modifierProfil&id=" . $profil['id'] ?>"><i class="fa fa-pencil fa-fw"></i>Modifier</a>
                    <a class="btn btn-danger popconfirm" type="buttonSuprr" href="<?= "index.php?controleur=admin&action=supprimerProfil&id=" . $profil['id'] ?>"><i class="fa fa-trash-o fa-lg"></i>Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <hr />
</div>

<h2>Tournoi</h2>
<div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Date debut</th>
            <th>Date fin</th>
            <th>Nom</th>
            <th>Lieu</th>
            <th>Description</th>
            <th>Etat</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($tournois as $tournoi): ?>
            <tr>

                <td>
                    <?= $this->nettoyer($tournoi['date_d']) ?>
                </td>

                <td>
                    <?= $this->nettoyer($tournoi['date_f']) ?>
                </td>
                <td><a href="<?= "index.php?controleur=tournoi&action=index&id=" . $tournoi['id'] ?>"><?= $this->nettoyer($tournoi['nom']) ?>
                    </a>
                </td>
                <td>
                    <?= $this->nettoyer($tournoi['lieu']) ?>
                </td>
                <td><a href="<?= "index.php?controleur=tournoi&action=index&id=" . $tournoi['id'] ?>"><?= $this->nettoyer($tournoi['descr']) ?>
                    </a>
                </td>
                <td><a href="<?= "index.php?controleur=tournoi&action=index&id=" . $tournoi['id'] ?>"><?= $this->nettoyer($tournoi['etat']) ?>
                    </a>
                </td>
                <td>
                    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=voirTournoi&id=" . $tournoi['id'] ?>"><i class="fa fa-eye" aria-htypeden="true"></i>Voir</a>
                    <a class="btn btn-success " href="<?= "index.php?controleur=admin&action=modifierTournoi&id=" . $tournoi['id'] ?>"><i class="fa fa-pencil fa-fw"></i>Modifier</a>
                    <a class="btn btn-danger popconfirm" type="buttonSuprr" href="<?= "index.php?controleur=admin&action=supprimerTournoi&id=" . $tournoi['id'] ?>"><i class="fa fa-trash-o fa-lg"></i>Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <hr />
</div>

<h2>Golf</h2>
<div>
    <table class="table table-hover">
        <thead>
        <tr>

            <th>Titre</th>
            <th>Type</th>
            <th>Description</th>
            <th>Etat</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($golfs as $golf): ?>
            <tr>

                <td>
                    <?= $this->nettoyer($golf['titre']) ?>
                </td>


                <td>
                    <?= $this->nettoyer($golf['type']) ?>
                </td>
                <td><a href="<?= "index.php?controleur=golf&action=index&id=" . $golf['id'] ?>"><?= $this->nettoyer($golf['descr']) ?>
                    </a>
                </td>
                <td><a href="<?= "index.php?controleur=golf&action=index&id=" . $golf['id'] ?>"><?= $this->nettoyer($golf['etat']) ?>
                    </a>
                </td>
                <td>
                    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=voirGolf&id=" . $golf['id'] ?>"><i class="fa fa-eye" aria-htypeden="true"></i>Voir</a>
                    <a class="btn btn-success " href="<?= "index.php?controleur=admin&action=modifierGolf&id=" . $golf['id'] ?>"><i class="fa fa-pencil fa-fw"></i>Modifier</a>
                    <a class="btn btn-danger popconfirm" type="buttonSuprr" href="<?= "index.php?controleur=admin&action=supprimerGolf&id=" . $golf['id'] ?>"><i class="fa fa-trash-o fa-lg"></i>Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <hr />
</div>

<h2>Slider</h2>
<div>
    <table class="table table-hover">
        <thead>
        <tr>

            <th>N°</th>
            <th>Image</th>
            <th>Texte</th>

            <th>Etat</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($sliders as $slider): ?>
            <tr>

                <td>
                    <?= $this->nettoyer($slider['id']) ?>
                </td>


                <td>
                    <?= $this->nettoyer($slider['image']) ?>
                </td>
                <td><a href="<?= "index.php?controleur=slider&action=index&id=" . $slider['id'] ?>"><?= $this->nettoyer($slider['texte']) ?>
                    </a>
                </td>
                <td><a href="<?= "index.php?controleur=slider&action=index&id=" . $slider['id'] ?>"><?= $this->nettoyer($slider['etat']) ?>
                    </a>
                </td>
                <td>
                    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=voirSlider&id=" . $slider['id'] ?>"><i class="fa fa-eye" aria-htypeden="true"></i>Voir</a>
                    <a class="btn btn-success " href="<?= "index.php?controleur=admin&action=modifierSlider&id=" . $slider['id'] ?>"><i class="fa fa-pencil fa-fw"></i>Modifier</a>
                    <a class="btn btn-danger popconfirm" type="buttonSuprr" href="<?= "index.php?controleur=admin&action=supprimerSlider&id=" . $slider['id'] ?>"><i class="fa fa-trash-o fa-lg"></i>Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <hr />
</div>
