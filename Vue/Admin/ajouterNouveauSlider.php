<?php $this->titre = "Ajouter - Administration" ?>

<h2>Ajouter un nouveau slider</h2>

<?php if($ajoutMode): ?>

<div class="alert alert-success"> Le nouveau slider a bien été ajouté </div>
    <a class="btn btn-secondary btn-lg btn-info " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la page d'administration</a>
<?php endif; ?>
<br>
<br>

<form method="post" action="index.php?controleur=admin&action=ajouterNouveauSlider">
    <div class="form-group">
        <input id="titre" name="texte" type="text" placeholder="texte" class="form-control"
               />
    </div>
    <div class="form-group">
        <input id="titre" name="texte2" type="text" placeholder="Titre" class="form-control"
        />
    </div>



    <div class="form-group">



    <?php
    $dir = getcwd().DIRECTORY_SEPARATOR."Upload";
    $galeries = scandir($dir);
    foreach ($galeries as $galerie)
    {
        if(!is_dir($galerie))
        {
            ?>

            <input type="radio" name="image"  value="<?php echo  "/P5/Upload/".$galerie ?>">
                <img src="<?php echo "/P5/Upload/".$galerie ?>" width="10%" alt="" />
            <?php
        }
    }

    ?>

    </div>
    <div class="form-group">
        <input id="titre" name="lien" type="text" placeholder="Lien" class="form-control"
        />
    </div>


    <div class="form-group">
        <input type="radio" name="estPrincipal" value="1" checked> Oui<br>
        <input type="radio" name="estPrincipal" value="0"> Non<br>

    </div>
   <!-- <div class="form-group">
        <label for="etat"> Visibilité:</label>
        <select class="form-control" id="etat" name="etat">
            <option>Publier</option>
            <option>Pas publier</option>

        </select>
    </div>-->

    <input type="submit" class="btn btn-secondary" value="Ajouter" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>