<?php $this->titre = "Ajouter - Administration"  ?>
<?php

?>

<h2>Ajouter une nouvelle image</h2>

<?php if($ajoutMode): ?>

<div class="alert alert-success"> La nouvelle image a bien été ajoutée </div>
    <a class="btn btn-secondary btn-lg btn-info " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la page d'administration</a>
        <?php endif; ?>


    <div class="alert alert-info" style="margin-top: 10%" >

        <form class="form-inline" method="post" action="index.php?controleur=admin&action=ajouterNouveauImageUpload" >
            <!-- On limite le fichier à 100Ko -->
            <!--<input type="hidden" name="MAX_FILE_SIZE" value="1000000">-->
            <div class="form-group" style="margin: 20px">

                <input type="text" name="letexte">
                <label for="image">Upload image : </label>
                <input type="file" name="image">
            </div>
            <input type="submit" class="btn btn-default btn-lg"  value="Envoyer">
        </form>
    </div>



    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>



