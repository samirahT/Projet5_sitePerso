<?php $this->titre = "Ajouter - Administration"  ?>
<?php

?>

<h2>Ajouter une nouvelle image</h2>

<?php
if( !empty($message) )
{
    echo '<p>',"\n";
    echo "\t\t<strong>", htmlspecialchars($message) ,"</strong>\n";
    echo "\t</p>\n\n";
}
?>

<?php if($ajoutMode): ?>

    <div class="alert alert-success"> La nouvelle image a bien été ajoutée </div>
    <a class="btn btn-secondary btn-lg btn-info " href="<?= "index.php?controleur=admin&action=index#image" ?>">Retour à la page d'administration</a>
<?php endif; ?>

<!-- Debut du formulaire -->
<form enctype="multipart/form-data" action= "index.php?controleur=admin&action=uploadImage" method="post">



    <fieldset>

        <p>
            <label for="fichier_a_uploader" >Envoyer le fichier :</label>

            <input name="fichier" type="file" id="fichier_a_uploader" />
            <input type="submit" name="submit" value="Uploader" />
        </p>
    </fieldset>
</form>
<!-- Fin du formulaire -->



    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>


