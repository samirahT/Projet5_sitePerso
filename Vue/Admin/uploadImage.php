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

            <label for="fichier_a_uploader" >Choisir une image moins de 2Mo:</label>

            <input name="fichier" type="file" id="fichier_a_uploader"  onchange="GetFileSize()" />
            <p id="fp"></p> <br>
            <p id="mess"></p><br>


            <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>

</form>
<!-- Fin du formulaire -->


<script>
    //Upload file, file size

    function GetFileSize() {
        var fi = document.getElementById('fichier_a_uploader'); // GET THE FILE INPUT.
        var testTaille = true;
        // VALIDATE OR CHECK IF ANY FILE IS SELECTED.
        if (fi.files.length > 0) {

                var fsize = fi.files[0].size;      // THE SIZE OF THE FILE.

                if(Math.round((fsize / 1024))< 1990)
                {
                    testTaille= true;
                    document.getElementById('fp').innerHTML =
                        document.getElementById('fp').innerHTML + '<br /> ' +
                        '<b>' + Math.round((fsize / 1024)) + '</b> KB Parfait';
                }else
                {
                    testTaille=false;
                    document.getElementById('fp').innerHTML =
                        document.getElementById('fp').innerHTML + '<br /> ' +
                        '<b>' + Math.round((fsize / 1024)) + '</b> KB L\'image est trop lourde';

                }

        }
        if(testTaille == true)
            document.getElementById('mess').innerHTML = document.getElementById('mess').innerHTML + '<input class="btn btn-secondary btn-lg btn-info "  id="bouton_upload" type="submit" name="submit" value="Uploader" />'
        else
            document.getElementById('mess').innerHTML = document.getElementById('mess').innerHTML + '<input class="btn btn-secondary btn-lg btn-alert "  type="reset" value="Effacer" onclick="location.reload()"/>'
    }
</script>



