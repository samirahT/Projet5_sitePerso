<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - " . $this->nettoyer($tournoi['nom']); ?>



<section>
    <header>
        <h2 class="titreTournoi"><?= $this->nettoyer($tournoi['nom']) ?></h2>
        <time><?= $this->nettoyer($tournoi['date_d']) ?></time>
        <time><?= $this->nettoyer($tournoi['date_f']) ?></time>
    </header>
    <p><?= $tournoi['type'] ?></p>
    <p><?= $tournoi['lieu'] ?></p>
    <p><?= $tournoi['descr'] ?></p>
    <p><?= $tournoi['image'] ?></p>
    <p><?= $tournoi['lien'] ?></p>
    <p><?= $tournoi['etat'] ?></p>
</section>
<hr />
