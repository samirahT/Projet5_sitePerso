<?php $this->titre = "Modifier - Administration" ;  ?>

<h2>Modifier l'actualité</h2>

<?php if($modifMode): ?>
    <div class="alert alert-success"> L'actualité a bien été modifié </div>
<?php endif; ?>

<form method="post" action="index.php?controleur=admin&action=modifierActu">
    <div class="form-group">
        <input id="titre" name="titre" type="text" value="<?= $this->nettoyer($actu['titre']) ?>" class="form-control"
               required /></div>

    <div class="form-group">
        <input id="titre" name="descr_c" type="text" value="<?= $this->nettoyer($actu['descr_c']) ?>" class="form-control"
                /></div>

    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="descr" rows="4"
                  > <?= $this->nettoyer($actu['descr']) ?></textarea>
    </div>

    <div class="form-group">
        <input id="titre" name="image" type="text" value="<?= $this->nettoyer($actu['image']) ?>" class="form-control" placeholder="Image"
        /></div>

    <!--<div class="form-group">
        <label for="etat"> Visibilité:</label>
        <select class="form-control" id="etat" name="etat" >
            <option>Publier</option>
            <option>Pas publier</option>

        </select>
    </div>-->

    <input type="hidden" name="id" value="<?= $actu['id'] ?>" />
    <input type="hidden" name="date" value="<?= $actu['date'] ?>" />
    <input type="submit" class="btn btn-secondary" value="Modifier" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>