<?php $this->titre = "Modifier - Administration" ; var_dump($image) ?>

<h2>Modifier le image</h2>

<?php if($modifMode): ?>
    <div> Le image a été modifié </div>
<?php endif; ?>

<form method="post" action="index.php?controleur=admin&action=modifierImage">
    <div class="form-group">
        <input id="titre" name="titre" type="text" value="<?= $this->nettoyer($image['nom']) ?>" class="form-control"
               required /></div>

    <div class="form-group">
        <input id="titre" name="descr_c" type="text" value="<?= $this->nettoyer($image['taille']) ?>" class="form-control"
                /></div>

    //////
    <div class="alert alert-info" style="margin-top: 25%" >
        <form class="form-inline" method="POST" action="upload.php" enctype="multipart/form-data">
            <!-- On limite le fichier à 100Ko -->
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
            <div class="form-group" style="margin: 20px">

                <label for="image">Upload image : </label>
                <input type="file" name="image">
            </div>
            <input type="submit" class="btn btn-default btn-lg" name="envoyer" value="Envoyer">
        </form>
    </div>
    //////////////

    <input type="hidden" name="id" value="<?= $image['id'] ?>" />

    <input type="submit" class="btn btn-secondary" value="Modifier" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>