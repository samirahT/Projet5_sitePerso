<?php $this->titre = "Modifier - Administration" ; var_dump($exp) ?>

<h2>Modifier le exp</h2>

<?php if($modifMode): ?>
    <div> Le exp a été modifié </div>
<?php endif; ?>

<form method="post" action="index.php?controleur=admin&action=modifierExp">
    <div class="form-group">
        <input id="titre" name="titre" type="text" value="<?= $this->nettoyer($exp['titre']) ?>" class="form-control"
               required /></div>


    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="exp" rows="4"
                  ><?= $exp['texte'] ?> </textarea>
    </div>

    <input type="hidden" name="type" value="<?= $exp['type'] ?>" />
    <input type="hidden" name="date" value="<?= $exp['date'] ?>" />
    <input type="submit" class="btn btn-secondary" value="Modifier" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>