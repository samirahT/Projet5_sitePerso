<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - Entourage"  ?>

<div class="row">
    <div class="col-sm-10">
        <?php foreach ($entourages as $entourage):
            ?>
            <div class="panel panel-default" style="padding: 30px">
                <article>

                    <a href="<?= "index.php?controleur=entourage&action=index&id=" . $entourage['id'] ?>">
                        <h2 class="titreEntourage"><i class="fa fa-users" aria-htypeden="true"></i> <?= $this->nettoyer($entourage['nom']) ?></h2>
                    </a>

                    <p><?=  $entourage['descr']?>
<!--                        <a class="btn btn-secondary float-right" href="--><?//= "index.php?controleur=entourage&action=index&id=" . $entourage['id'] ?><!--">Lire la suite  &rarr;</a>-->
                    </p>

                </article>
                <hr />
            </div>
        <?php endforeach; ?>
    </div>
    <div class="col-sm-2">

    </div>
</div>
