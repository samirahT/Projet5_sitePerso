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

    </header>
    <p><?= $golf['descr'] ?></p>
    <p><?= $golf['type'] ?></p>
    <p><?= $golf['lien'] ?></p>
    <p><?= $golf['image'] ?></p>
    <p><?= $golf['etat'] ?></p>


</article>
<hr />


    <input type="hidden" name="id" value="<?= $golf['id'] ?>" />
<a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la liste</a>
</form>

