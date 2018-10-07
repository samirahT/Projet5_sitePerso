<?php $this->titre = "Modifier - Administration" ; var_dump($entourage) ?>

<h2>Modifier le entourage</h2>

<?php if($modifMode): ?>
    <div> Le entourage a été modifié </div>
<?php endif; ?>

<form method="post" action="index.php?controleur=admin&action=modifierEntourage">
    <div class="form-group">
        <input id="titre" name="titre" type="text" value="<?= $this->nettoyer($entourage['titre']) ?>" class="form-control"
               required /></div>


    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="entourage" rows="4"
                  ><?= $entourage['texte'] ?> </textarea>
    </div>

    <input type="hidden" name="type" value="<?= $entourage['type'] ?>" />
    <input type="hidden" name="date" value="<?= $entourage['date'] ?>" />
    <input type="submit" class="btn btn-secondary" value="Modifier" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>