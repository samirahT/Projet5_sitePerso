<?php $this->titre = "Modifier - Administration" ; var_dump($golf) ?>

<h2>Modifier le golf</h2>

<?php if($modifMode): ?>
    <div> Le golf a été modifié </div>
<?php endif; ?>

<form method="post" action="index.php?controleur=admin&action=modifierGolf">
    <div class="form-group">
        <input id="titre" name="titre" type="text" value="<?= $this->nettoyer($golf['titre']) ?>" class="form-control"
               required /></div>


    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="golf" rows="4"
                  ><?= $golf['texte'] ?> </textarea>
    </div>

    <input type="hidden" name="type" value="<?= $golf['type'] ?>" />
    <input type="hidden" name="date" value="<?= $golf['date'] ?>" />
    <input type="submit" class="btn btn-secondary" value="Modifier" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>