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
        <textarea class="form-control" rows="5" id="mytextarea" name="descr" rows="4"
                  ><?= $this->nettoyer($profil['descr']) ?></textarea>
    </div>

    <div class="form-group">
        <input id="titre" name="image" type="text" value="<?= $this->nettoyer($profil['image']) ?>" class="form-control"
        /></div>

    <div class="form-group">
        <label for="etat"> Visibilité:</label>
        <select class="form-control" id="etat" name="etat">
            <option>Publier</option>
            <option>Pas publier</option>

        </select>
    </div>

    <input type="hidden" name="id" value="<?= $profil['id'] ?>" />
    <input type="submit" class="btn btn-secondary" value="Modifier" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>