<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - " . $this->nettoyer($profil['titre']); ?>



<section>
    <header>
        <h2 class="titreProfil"><?= $this->nettoyer($profil['titre']) ?></h2>

    </header>
    <p><?= $profil['descr'] ?></p>
    <p><?= $profil['image'] ?></p>
    <p><?= $profil['etat'] ?></p>

</section>
<hr />
