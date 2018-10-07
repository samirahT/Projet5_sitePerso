<?php $this->titre = "Modifier - Administration" ; var_dump($actu) ?>

<h2>Modifier le actu</h2>

<?php if($modifMode): ?>
    <div> Le actu a été modifié </div>
<?php endif; ?>

<form method="post" action="index.php?controleur=admin&action=modifierActu">
    <div class="form-group">
        <input id="titre" name="titre" type="text" value="<?= $this->nettoyer($actu['titre']) ?>" class="form-control"
               required /></div>


    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="actu" rows="4"
                  ><?= $actu['texte'] ?> </textarea>
    </div>

    <input type="hidden" name="type" value="<?= $actu['type'] ?>" />
    <input type="hidden" name="date" value="<?= $actu['date'] ?>" />
    <input type="submit" class="btn btn-secondary" value="Modifier" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>