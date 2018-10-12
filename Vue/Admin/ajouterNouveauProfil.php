<?php $this->titre = "Ajouter - Administration" ?>

<h2>Ajouter un nouveau profil</h2>

<?php if($ajoutMode): ?>

<div class="alert alert-success"> Le nouveau profil a bien été ajouté </div>
    <a class="btn btn-secondary btn-lg btn-info " href="<?= "index.php?controleur=admin&action=index#profil" ?>">Retour à la page d'administration</a>
<?php endif; ?>
<br>
<br>


<form method="post" action="index.php?controleur=admin&action=ajouterNouveauProfil">
    <div class="form-group">
        <input id="titre" name="titre" type="text" placeholder="titre" class="form-control"
               required /></div>

    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="descr" rows="4"
                  placeholder="Description" ></textarea>
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

    <!--<div class="form-group">
        <label for="etat"> Visibilité:</label>
        <select class="form-control" id="etat" name="etat">
            <option>Publier</option>
            <option>Pas publier</option>

        </select>
    </div>-->


    <input type="submit" class="btn btn-secondary" value="Ajouter" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>

