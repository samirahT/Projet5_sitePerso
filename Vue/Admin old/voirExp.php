<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - " . $this->nettoyer($exp['titre']); ?>

<article>
    <header>
        <h2 class="titreExp"><?= $this->nettoyer($exp['titre']) ?></h2>
        <time><?= $this->nettoyer($exp['date']) ?></time>
    </header>
    <p><?= $exp['texte'] ?></p>

</article>
<hr />


    <input type="hidden" name="type" value="<?= $exp['type'] ?>" />
<a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la liste</a>
</form>