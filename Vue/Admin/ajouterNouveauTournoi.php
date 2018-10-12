<?php $this->titre = "Ajouter - Administration"; ?>

<h2>Ajouter un nouveau tournoi</h2>

<?php if($ajoutMode): ?>

<div class="alert alert-success"> Le nouveau tournoi a bien été ajouté </div>
    <a class="btn btn-secondary btn-lg btn-info " href="<?= "index.php?controleur=admin&action=index#tournoi" ?>">Retour à la page d'administration</a>
<?php endif; ?>
<br>
<br>

<form method="post" action="index.php?controleur=admin&action=ajouterNouveauTournoi">

    <div class="form-group">
        <label for="date_d"> Date debut:</label>
        <input  name="date_d" type="date"  class="form-control"
                /></div>
    <div class="form-group">
        <label for="date_f"> Date fin:</label>
        <input  name="date_f" type="date"  class="form-control"
        /></div>
    <div class="form-group">
        <input id="titre" name="nom" type="text" placeholder="Nom" class="form-control"
               /></div>

    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="descr" rows="4"
                  placeholder="Description" ></textarea>
    </div>

    <div class="form-group">
        <input  name="type" type="text" placeholder=" Type" class="form-control"
        /></div>

    <div class="form-group">
        <input  name="lien" type="text" placeholder="Lien" class="form-control"
        /></div>

    <div class="form-group">
        <input  name="lieu" type="text" placeholder="Lieu" class="form-control"
        /></div>


    <div class="form-group">
        <input  name="image" type="text" placeholder="image " class="form-control"
        /></div>

    <!--<div class="form-group">
        <label for="etat"> Visibilité:</label>
        <select class="form-control" id="etat" name="etat">
            <option>Publier</option>
            <option>Pas publier</option>

        </select>
    </div>-->



    <input type="submit" class="btn btn-secondary" value="Ajouter" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>

