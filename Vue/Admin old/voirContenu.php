<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - " . $this->nettoyer($contenu['titre']); ?>

<article>
    <header>
        <h2 class="titreContenu"><?= $this->nettoyer($contenu['titre']) ?></h2>
        <time><?= $this->nettoyer($contenu['date']) ?></time>
    </header>
    <p><?= $contenu['texte'] ?></p>

</article>
<hr />


    <input type="hidden" name="type" value="<?= $contenu['type'] ?>" />
<a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la liste</a>
</form>