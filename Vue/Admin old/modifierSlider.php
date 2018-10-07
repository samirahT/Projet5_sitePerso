<?php $this->titre = "Modifier - Administration" ; var_dump($slider) ?>

<h2>Modifier le slider</h2>

<?php if($modifMode): ?>
    <div> Le slider a été modifié </div>
<?php endif; ?>

<form method="post" action="index.php?controleur=admin&action=modifierSlider">
    <div class="form-group">
        <input id="titre" name="titre" type="text" value="<?= $this->nettoyer($slider['titre']) ?>" class="form-control"
               required /></div>


    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="slider" rows="4"
                  ><?= $slider['texte'] ?> </textarea>
    </div>

    <input type="hidden" name="type" value="<?= $slider['type'] ?>" />
    <input type="hidden" name="date" value="<?= $slider['date'] ?>" />
    <input type="submit" class="btn btn-secondary" value="Modifier" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>