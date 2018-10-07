<?php $this->titre = "Ajouter - Administration" ?>

<h2>Ajouter un nouveau entourage</h2>

<?php if($ajoutMode): ?>
<div> Le entourage a été ajouté </div>
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Voir la liste des entourages</a>
<?php endif; ?>

<form method="post" action="index.php?controleur=admin&action=ajouterNouveauEntourage">
    <div class="form-group">
        <input id="titre" name="titre" type="text" placeholder="titre" class="form-control"
               required /></div>

    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="texte" rows="4"
                  placeholder="Entourage" ></textarea>
    </div>


    <input type="submit" class="btn btn-secondary" value="Ajouter" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>