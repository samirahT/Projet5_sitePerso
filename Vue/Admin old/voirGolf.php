<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - " . $this->nettoyer($golf['titre']); ?>

<article>
    <header>
        <h2 class="titreGolf"><?= $this->nettoyer($golf['titre']) ?></h2>
        <time><?= $this->nettoyer($golf['date']) ?></time>
    </header>
    <p><?= $golf['texte'] ?></p>

</article>
<hr />


    <input type="hidden" name="type" value="<?= $golf['type'] ?>" />
<a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la liste</a>
</form>