<?php $this->titre = "Modifier - Administration" ;  ?>

<h2>Modifier le slider</h2>

<?php if($modifMode): ?>
    <div> Le slider a été modifié </div>
<?php endif; ?>

<form method="post" action="index.php?controleur=admin&action=modifierSlider">
    <div class="form-group">
        <input  name="texte" type="text" value="<?= $this->nettoyer($slider['texte']) ?>" class="form-control"
                />
    </div>
    <div class="form-group">
        <input  name="texte2" type="text" value="<?= $this->nettoyer($slider['texte2']) ?>" class="form-control"
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
        <input id="titre" name="lien" type="text" value="<?=$this->nettoyer($slider['lien'])?>" class="form-control"
        />
    </div>

    <div class="form-group">
        <input type="radio" name="estPrincipal" value="1"  <?php echo (($this->nettoyer($slider['estPrincipal'])== 1)?"checked":"");?>  > Oui, image principale<br>
        <input type="radio" name="estPrincipal" value="0" <?php echo (($this->nettoyer($slider['estPrincipal'])== 0)?"checked":"");?>  > Non<br>

    </div>
    <input type="hidden" name="id" value="<?= $slider['id'] ?>" />

    <input type="submit" class="btn btn-secondary" value="Modifier" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>