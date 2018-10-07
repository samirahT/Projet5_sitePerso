<?php $this->titre = "Index - Administration" ?>

<h2>Administration</h2>

Bienvenue, <?= $this->nettoyer($login) ?> !



<div class="alert alert-info">
    Ce site comporte
    <a href="#actu"><span class="badge badge-light"><?= $this->nettoyer($nbActus) ?> </span> actualité(s) ,</a>
    <a href="#entourage"><span class="badge badge-light"><?= $this->nettoyer($nbEntourages)  ?></span> entourage (s) ,</a>
    <a href="#golf"><span class="badge badge-light"><?= $this->nettoyer($nbGolfs) ?> </span> golf (s) ,</a>
    <a href="#profil"><span class="badge badge-light"><?= $this->nettoyer($nbProfils) ?> </span> profil (s) ,</a>
    <a href="#slider"><span class="badge badge-light"><?= $this->nettoyer($nbSliders) ?></span> slider (s) ,</a>
    <a href="#tournoi"><span class="badge badge-light"><?= $this->nettoyer($nbTournois) ?></span> tournoi (s) ,</a>
    <a href="#contact"><span class="badge badge-light"><?= $this->nettoyer($nbContacts) ?> </span> message (s) .</a>

</div>

<button class="btn btn-success "> <a  href= "<?="index.php?controleur=admin&action=uploadImage" ?>"> <i class="fa fa-plus" aria-htypeden="true"></i> Ajouter une image</a></button>


<!--ACTUALITE-->
<div id="actu"  class="jumbotron jumbotron-fluid">
<h2>Actualité</h2> <button class="btn btn-success "> <a  href="<?= "index.php?controleur=admin&action=ajouterNouveauActu"  ?>"><i class="fa fa-plus" aria-htypeden="true"></i> Nouvelle actualité</a></button>


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
                    <div class="btn-group-vertical">
                    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=voirActu&id=" . $actu['id'] ?>"><i class="fa fa-eye" aria-htypeden="true"></i></a>
                    <a class="btn btn-success " href="<?= "index.php?controleur=admin&action=modifierActu&id=" . $actu['id'] ?>"><i class="fa fa-pencil fa-fw"></i></a>
                    <a class="btn btn-danger popconfirm" type="buttonSuprr" href="<?= "index.php?controleur=admin&action=supprimerActu&id=" . $actu['id'] ?>"><i class="fa fa-trash-o fa-lg"></i></a>
                </td>
                    </div>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <hr />
</div>

</div>

<!--ENTOURAGE-->

<div id="entourage"  class="jumbotron jumbotron-fluid">
    <h2>Entourage</h2><button class="btn btn-success "><a  href="<?= "index.php?controleur=admin&action=ajouterNouveauEntourage"  ?>"><i class="fa fa-plus" aria-htypeden="true"></i> Nouvel entourage</a></button>

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
                <td><a href="<?= "index.php?controleur=entourage&action=index&id=" . $entourage['id'] ?>"><?= $entourage['descr'] ?>
                    </a>
                </td>
                <td><a href="<?= "index.php?controleur=entourage&action=index&id=" . $entourage['id'] ?>"><?= $this->nettoyer($entourage['etat']) ?>
                    </a>
                </td>
                <td>
                    <div class="btn-group-vertical">
                    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=voirEntourage&id=" . $entourage['id'] ?>"><i class="fa fa-eye" aria-htypeden="true"></i></a>
                    <a class="btn btn-success " href="<?= "index.php?controleur=admin&action=modifierEntourage&id=" . $entourage['id'] ?>"><i class="fa fa-pencil fa-fw"></i></a>
                    <a class="btn btn-danger popconfirm" type="buttonSuprr" href="<?= "index.php?controleur=admin&action=supprimerEntourage&id=" . $entourage['id'] ?>"><i class="fa fa-trash-o fa-lg"></i></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <hr />
</div>
</div>

<!--PROFIL-->

<div id="profil" class="jumbotron jumbotron-fluid">

    <h2>Profil</h2><button class="btn btn-success "><a  " href="<?= "index.php?controleur=admin&action=ajouterNouveauProfil"  ?>"><i class="fa fa-plus" aria-htypeden="true"></i> Nouveau profil</a></button>

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
                <td><a href="<?= "index.php?controleur=profil&action=index&id=" . $profil['id'] ?>"><?= $profil['descr'] ?>
                    </a>
                </td>
                <td><a href="<?= "index.php?controleur=profil&action=index&id=" . $profil['id'] ?>"><?= $this->nettoyer($profil['etat']) ?>
                    </a>
                </td>
                <td>
                    <div class="btn-group-vertical">
                    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=voirProfil&id=" . $profil['id'] ?>"><i class="fa fa-eye" aria-htypeden="true"></i></a>
                    <a class="btn btn-success " href="<?= "index.php?controleur=admin&action=modifierProfil&id=" . $profil['id'] ?>"><i class="fa fa-pencil fa-fw"></i></a>
                    <a class="btn btn-danger popconfirm" type="buttonSuprr" href="<?= "index.php?controleur=admin&action=supprimerProfil&id=" . $profil['id'] ?>"><i class="fa fa-trash-o fa-lg"></i></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <hr />
</div>
</div>


<!--TOURNOI-->
<div id="tournoi" class="jumbotron jumbotron-fluid">
    <h2>Tournoi</h2> <button class="btn btn-success "><a  href="<?= "index.php?controleur=admin&action=ajouterNouveauTournoi"  ?>"><i class="fa fa-plus" aria-htypeden="true"></i> Nouveau tournoi</a></button>

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
                <td><a href="<?= "index.php?controleur=tournoi&action=index&id=" . $tournoi['id'] ?>"><?= strip_tags($tournoi['descr']) ?>
                    </a>
                </td>
                <td><a href="<?= "index.php?controleur=tournoi&action=index&id=" . $tournoi['id'] ?>"><?= $this->nettoyer($tournoi['etat']) ?>
                    </a>
                </td>
                <td>
                    <div class="btn-group-vertical">
                    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=voirTournoi&id=" . $tournoi['id'] ?>"><i class="fa fa-eye" aria-htypeden="true"></i></a>
                    <a class="btn btn-success " href="<?= "index.php?controleur=admin&action=modifierTournoi&id=" . $tournoi['id'] ?>"><i class="fa fa-pencil fa-fw"></i></a>
                    <a class="btn btn-danger popconfirm" type="buttonSuprr" href="<?= "index.php?controleur=admin&action=supprimerTournoi&id=" . $tournoi['id'] ?>"><i class="fa fa-trash-o fa-lg"></i></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <hr />
</div>
</div>

<!--GOLF-->

<div id="golf" class="jumbotron jumbotron-fluid">
    <h2>Golf</h2><button class="btn btn-success "><a  href="<?= "index.php?controleur=admin&action=ajouterNouveauGolf"  ?>"><i class="fa fa-plus" aria-htypeden="true"></i> Nouveau contenu golf</a></button>

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
                <td><a href="<?= "index.php?controleur=golf&action=index&id=" . $golf['id'] ?>"><?= $golf['descr'] ?>
                    </a>
                </td>
                <td><a href="<?= "index.php?controleur=golf&action=index&id=" . $golf['id'] ?>"><?= $this->nettoyer($golf['etat']) ?>
                    </a>
                </td>
                <td>
                    <div class="btn-group-vertical">
                    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=voirGolf&id=" . $golf['id'] ?>"><i class="fa fa-eye" aria-htypeden="true"></i></a>
                    <a class="btn btn-success " href="<?= "index.php?controleur=admin&action=modifierGolf&id=" . $golf['id'] ?>"><i class="fa fa-pencil fa-fw"></i></a>
                    <a class="btn btn-danger popconfirm" type="buttonSuprr" href="<?= "index.php?controleur=admin&action=supprimerGolf&id=" . $golf['id'] ?>"><i class="fa fa-trash-o fa-lg"></i></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <hr />
</div>
</div>

<!--SLIDER-->

<div id="slider" class="jumbotron jumbotron-fluid">
    <h2>Slider</h2><button class="btn btn-success "><a  href="<?= "index.php?controleur=admin&action=ajouterNouveauSlider"  ?>"><i class="fa fa-plus" aria-htypeden="true"></i> Nouveau slider</a></button>

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
                    <div class="btn-group-vertical">
                    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=voirSlider&id=" . $slider['id'] ?>"><i class="fa fa-eye" aria-htypeden="true"></i></a>
                    <a class="btn btn-success " href="<?= "index.php?controleur=admin&action=modifierSlider&id=" . $slider['id'] ?>"><i class="fa fa-pencil fa-fw"></i></a>
                    <a class="btn btn-danger popconfirm" type="buttonSuprr" href="<?= "index.php?controleur=admin&action=supprimerSlider&id=" . $slider['id'] ?>"><i class="fa fa-trash-o fa-lg"></i></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <hr />
</div>
</div>

<!--CONTACT-->

<div id="contact" class="jumbotron jumbotron-fluid">
    <h2>Contact</h2><button class="btn btn-success "><a  href="<?= "index.php?controleur=admin&action=ajouterNouveauContact"  ?>"><i class="fa fa-plus" aria-htypeden="true"></i> Nouveau contact</a></button>

    <div>
        <table class="table table-hover">
            <thead>
            <tr>

                <th>Id</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Objet</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($contacts as $contact): ?>
                <tr>

                    <td>
                        <?= $this->nettoyer($contact['id']) ?>
                    </td>

                    <td>
                        <?= $this->nettoyer($contact['nom']) ?>
                    </td>

                    <td>
                        <?= $this->nettoyer($contact['email']) ?>
                    </td>

                    <td>
                        <?= $this->nettoyer($contact['objet']) ?>
                    </td>
                    <td>
                        <?= $this->nettoyer($contact['message']) ?>
                    </td>



                    <td>
                        <div class="btn-group-vertical">
                            <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=voirContact&id=" . $contact['id'] ?>"><i class="fa fa-eye" aria-htypeden="true"></i></a>
                            <a class="btn btn-success " href="<?= "index.php?controleur=admin&action=modifierContact&id=" . $contact['id'] ?>"><i class="fa fa-pencil fa-fw"></i></a>
                            <a class="btn btn-danger popconfirm" type="buttonSuprr" href="<?= "index.php?controleur=admin&action=supprimerContact&id=" . $contact['id'] ?>"><i class="fa fa-trash-o fa-lg"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <hr />
    </div>
</div>




