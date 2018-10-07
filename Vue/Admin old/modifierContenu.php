<?php $this->titre = "Modifier - Administration" ; var_dump($contenu) ?>

<h2>Modifier le contenu</h2>

<?php if($modifMode): ?>
    <div> Le contenu a été modifié </div>
<?php endif; ?>

<form method="post" action="index.php?controleur=admin&action=modifierContenu">
    <div class="form-group">
        <input id="titre" name="titre" type="text" value="<?= $this->nettoyer($contenu['titre']) ?>" class="form-control"
               required /></div>


    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="contenu" rows="4"
                  ><?= $contenu['texte'] ?> </textarea>
    </div>

    <input type="hidden" name="type" value="<?= $contenu['type'] ?>" />
    <input type="hidden" name="date" value="<?= $contenu['date'] ?>" />
    <input type="submit" class="btn btn-secondary" value="Modifier" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>