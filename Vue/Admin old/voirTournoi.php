<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - " . $this->nettoyer($tournoi['titre']); ?>

<article>
    <header>
        <h2 class="titreTournoi"><?= $this->nettoyer($tournoi['titre']) ?></h2>
        <time><?= $this->nettoyer($tournoi['date']) ?></time>
    </header>
    <p><?= $tournoi['texte'] ?></p>

</article>
<hr />


    <input type="hidden" name="type" value="<?= $tournoi['type'] ?>" />
<a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la liste</a>
</form>