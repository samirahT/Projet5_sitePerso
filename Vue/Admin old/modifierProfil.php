<?php $this->titre = "Modifier - Administration" ; var_dump($profil) ?>

<h2>Modifier le profil</h2>

<?php if($modifMode): ?>
    <div> Le profil a été modifié </div>
<?php endif; ?>

<form method="post" action="index.php?controleur=admin&action=modifierProfil">
    <div class="form-group">
        <input id="titre" name="titre" type="text" value="<?= $this->nettoyer($profil['titre']) ?>" class="form-control"
               required /></div>


    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="profil" rows="4"
                  ><?= $profil['texte'] ?> </textarea>
    </div>

    <input type="hidden" name="type" value="<?= $profil['type'] ?>" />
    <input type="hidden" name="date" value="<?= $profil['date'] ?>" />
    <input type="submit" class="btn btn-secondary" value="Modifier" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>