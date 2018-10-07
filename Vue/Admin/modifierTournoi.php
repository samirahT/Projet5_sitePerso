<?php $this->titre = "Modifier - Administration" ; var_dump($tournoi) ?>

<h2>Modifier le tournoi</h2>

<?php if($modifMode): ?>
    <div> Le tournoi a été modifié </div>
<?php endif; ?>

<form method="post" action="index.php?controleur=admin&action=modifierTournoi">

    <div class="form-group">
        <input id="date" name="date_d" type="date" value="<?= $this->nettoyer($tournoi['date_d']) ?>" class="form-control"
        /></div>
    <div class="form-group">
        <input id="date" name="date_f" type="date" value="<?= $this->nettoyer($tournoi['date_f']) ?>" class="form-control"
        /></div>


    <div class="form-group">
        <input id="titre" name="nom" type="text" value="<?= $this->nettoyer($tournoi['nom']) ?>" class="form-control"
               required /></div>

    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="descr" rows="4"
                  ><?= $this->nettoyer($tournoi['descr']) ?></textarea>
    </div>

    <div class="form-group">
        <input id="titre" name="type" type="text" value="<?= $this->nettoyer($tournoi['type']) ?>" class="form-control"
        /></div>

    <div class="form-group">
        <input id="titre" name="lien" type="text" value="<?= $this->nettoyer($tournoi['lien']) ?>" class="form-control"
        /></div>

    <div class="form-group">
        <input id="titre" name="lieu" type="text" value="<?= $this->nettoyer($tournoi['lieu']) ?>" class="form-control"
        /></div>

    <div class="form-group">
        <input id="titre" name="image" type="text" value="<?= $this->nettoyer($tournoi['image']) ?>" class="form-control"
        /></div>

    <div class="form-group">
        <label for="etat"> Visibilité:</label>
        <select class="form-control" id="etat">
            <option>Publier</option>
            <option>Pas publier</option>

        </select>
    </div>


    <input type="hidden" name="id" value="<?= $tournoi['id'] ?>" />

    <input type="submit" class="btn btn-secondary" value="Modifier" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>

