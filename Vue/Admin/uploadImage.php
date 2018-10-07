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
<!-- Debut du formulaire -->
<form enctype="multipart/form-data" action= "index.php?controleur=admin&action=uploadImage" method="post">
    <fieldset>
        <legend>Formulaire</legend>
        <p>
            <label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Envoyer le fichier :</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
            <input name="fichier" type="file" id="fichier_a_uploader" />
            <input type="submit" name="submit" value="Uploader" />
        </p>
    </fieldset>
</form>
<!-- Fin du formulaire -->



    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>



