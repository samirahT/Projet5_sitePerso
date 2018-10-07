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

    </header>
    <p><?= $entourage['nom'] ?></p>
    <p><?= $entourage['descr'] ?></p>
    <p><?= $entourage['image'] ?></p>
    <p><?= $entourage['etat'] ?></p>

</article>
<hr />


    <input type="hidden" name="id" value="<?= $entourage['id'] ?>" />
<a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la liste</a>
</form>

