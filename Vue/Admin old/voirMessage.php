<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - " . $this->nettoyer($message['titre']); ?>

<article>
    <header>
        <h2 class="titreMessage"><?= $this->nettoyer($message['titre']) ?></h2>
        <time><?= $this->nettoyer($message['date']) ?></time>
    </header>
    <p><?= $message['texte'] ?></p>

</article>
<hr />


    <input type="hidden" name="type" value="<?= $message['type'] ?>" />
<a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la liste</a>
</form>