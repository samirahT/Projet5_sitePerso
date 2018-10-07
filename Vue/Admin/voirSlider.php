

<article>
    <header>
        <h2 class="titreSlider"><?= $this->nettoyer($slider['texte']) ?></h2>

    </header>
<!--    <p>--><?//= $slider['image'] ?><!--</p>-->
    <img src="<?php echo $slider['image'] ?>" width="30%" alt="" />
    <p>Titre :<?= $this->nettoyer($slider['texte2']) ?></p>
    <?php
        if($this->nettoyer($slider['estPrincipal'])== 0)
        {
            echo "Cette image n'est pas l'image principale du slider";
        }else{
            echo "Cette image est l'image principale du slider";
        }
        ?>
</article>
<hr />


    <input type="hidden" name="id" value="<?= $slider['id'] ?>" />
<a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la liste</a>
</form>