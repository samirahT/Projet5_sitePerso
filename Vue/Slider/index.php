<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - " . $this->nettoyer($slider['titre']); ?>



<section>
    <header>
        <h2 class="titreSlider"><?= $this->nettoyer($slider['titre']) ?></h2>
        <time><?= $this->nettoyer($slider['date']) ?></time>
    </header>
    <p><?= $slider['image'] ?></p>

</section>
<hr />


