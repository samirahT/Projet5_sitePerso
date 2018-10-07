<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - " . $this->nettoyer($golf['titre']); ?>



<section>
    <header>
        <h2 class="titreGolf"><?= $this->nettoyer($golf['titre']) ?></h2>

    </header>
    <p><?= $golf['descr'] ?></p>
    <p><?= $golf['type'] ?></p>
    <a target="_blank" href="<?= $golf['lien'] ?>"><?= $golf['lien'] ?></a>
    <p><?= $golf['image'] ?></p>
    <p><?= $golf['etat'] ?></p>

</section>
<hr />
