<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - " . $this->nettoyer($entourage['titre']); ?>

<article>
    <header>
        <h2 class="titreEntourage"><?= $this->nettoyer($entourage['titre']) ?></h2>
        <time><?= $this->nettoyer($entourage['date']) ?></time>
    </header>
    <p><?= $entourage['texte'] ?></p>

</article>
<hr />


    <input type="hidden" name="type" value="<?= $entourage['type'] ?>" />
<a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la liste</a>
</form>