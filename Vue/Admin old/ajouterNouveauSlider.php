<?php $this->titre = "Ajouter - Administration" ?>

<h2>Ajouter un nouveau slider</h2>

<?php if($ajoutMode): ?>
<div> Le slider a été ajouté </div>
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Voir la liste des sliders</a>
<?php endif; ?>

<form method="post" action="index.php?controleur=admin&action=ajouterNouveauSlider">
    <div class="form-group">
        <input id="titre" name="titre" type="text" placeholder="titre" class="form-control"
               required /></div>

    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="texte" rows="4"
                  placeholder="Slider" ></textarea>
    </div>


    <input type="submit" class="btn btn-secondary" value="Ajouter" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>