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
        <textarea class="form-control" rows="5" id="mytextarea" name="descr" rows="4"
                  ><?= $this->nettoyer($golf['descr']) ?></textarea>
    </div>

    <div class="form-group">
        <input id="titre" name="type" type="text" value="<?= $this->nettoyer($golf['type']) ?>" class="form-control"
        /></div>

    <div class="form-group">
        <input id="titre" name="lien" type="text" value="<?= $this->nettoyer($golf['lien']) ?>" class="form-control"
        /></div>

    <div class="form-group">
        <input id="titre" name="image" type="text" value="<?= $this->nettoyer($golf['image']) ?>" class="form-control"
        /></div>

    <div class="form-group">
        <label for="etat"> Visibilité:</label>
        <select class="form-control" id="etat">
            <option>Publier</option>
            <option>Pas publier</option>

        </select>
    </div>

    <input type="hidden" name="id" value="<?= $golf['id'] ?>" />

    <input type="submit" class="btn btn-secondary" value="Modifier" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>

