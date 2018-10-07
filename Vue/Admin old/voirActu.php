<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - " . $this->nettoyer($actu['titre']); ?>

<article>
    <header>
        <h2 class="titreActu"><?= $this->nettoyer($actu['titre']) ?></h2>
        <time><?= $this->nettoyer($actu['date']) ?></time>
    </header>
    <p><?= $actu['texte'] ?></p>

</article>
<hr />


    <input type="hidden" name="type" value="<?= $actu['type'] ?>" />
<a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la liste</a>
</form>