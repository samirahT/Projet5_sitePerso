<?php $this->titre = "Ajouter - Administration" ?>

<h2>Ajouter un nouvel entourage</h2>

<?php if($ajoutMode): ?>

<div class="alert alert-success"> Le nouvel entourage a bien été ajouté </div>
    <a class="btn btn-secondary btn-lg btn-info " href="<?= "index.php?controleur=admin&action=index#entourage" ?>">Retour à la page d'administration</a>
<?php endif; ?>
<br>
<br>


<form method="post" action="index.php?controleur=admin&action=ajouterNouveauEntourage">
    <div class="form-group">
        <input id="titre" name="titre" type="text" placeholder="titre" class="form-control"
               required /></div>

    <div class="form-group">
        <input id="titre" name="nom" type="text" placeholder="nom " class="form-control"
        /></div>

    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="descr" rows="4"
                  placeholder="Description" ></textarea>
    </div>

    <div class="form-group">
        <input id="titre" name="image" type="text" placeholder="image " class="form-control"
        /></div>

   <!-- <div class="form-group">
        <label for="etat"> Visibilité:</label>
        <select class="form-control" id="etat" name="etat">
            <option>Publier</option>
            <option>Pas publier</option>

        </select>
    </div>
-->


    <input type="submit" class="btn btn-secondary" value="Ajouter" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>



