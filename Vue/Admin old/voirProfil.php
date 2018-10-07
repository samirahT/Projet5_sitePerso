<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - " . $this->nettoyer($profil['titre']); ?>

<article>
    <header>
        <h2 class="titreProfil"><?= $this->nettoyer($profil['titre']) ?></h2>
        <time><?= $this->nettoyer($profil['date']) ?></time>
    </header>
    <p><?= $profil['texte'] ?></p>

</article>
<hr />


    <input type="hidden" name="type" value="<?= $profil['type'] ?>" />
<a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la liste</a>
</form>