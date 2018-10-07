<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - " . $this->nettoyer($slider['titre']); ?>

<article>
    <header>
        <h2 class="titreSlider"><?= $this->nettoyer($slider['titre']) ?></h2>
        <time><?= $this->nettoyer($slider['date']) ?></time>
    </header>
    <p><?= $slider['texte'] ?></p>

</article>
<hr />


    <input type="hidden" name="type" value="<?= $slider['type'] ?>" />
<a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la liste</a>
</form>