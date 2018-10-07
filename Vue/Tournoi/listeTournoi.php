<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - Tournoi"  ?>

<div class="row">
    <div class="col-sm-10">
        <?php foreach ($tournois as $tournoi):
            ?>
            <div class="panel panel-default" style="padding: 30px">
                <article>

                    <a href="<?= "index.php?controleur=tournoi&action=index&id=" . $tournoi['id'] ?>">
                        <h2 class="titreTournoi"><i class="fa fa-flag-checkered" aria-htypeden="true"></i> <?= $this->nettoyer($tournoi['nom']) ?></h2>
                    </a>
                    De <span type="date"><?= $this->nettoyer($tournoi['date_d']) ?></span> à
                    <span type="date"><?= $this->nettoyer($tournoi['date_f']) ?></span>
                    <p><?= substr( $tournoi['lieu']  ,0, 130)?>
                        <a class="btn btn-secondary float-right" href="<?= "index.php?controleur=tournoi&action=index&id=" . $tournoi['id'] ?>">Lire la suite  &rarr;</a>
                    </p>

                </article>
                <hr />
            </div>
        <?php endforeach; ?>
    </div>
    <div class="col-sm-2">

    </div>
</div>
