<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - Profil"  ?>

<div class="row">
    <div class="col-sm-10">
        <?php foreach ($profils as $profil):
            ?>
            <div class="panel panel-default" style="padding: 30px">
                <article>

                    <a href="<?= "index.php?controleur=profil&action=index&id=" . $profil['id'] ?>">
                        <h2 class="titreProfil"><i class="fa fa-user" aria-htypeden="true"></i> <?= $this->nettoyer($profil['titre']) ?></h2>
                    </a>

                    <p><?= ( $profil['descr'])?>

<!--                        <a class="btn btn-secondary float-right" href="--><?//= "index.php?controleur=profil&action=index&id=" . $profil['id'] ?><!--">Lire la suite  &rarr;</a>-->
                    </p>

                </article>
                <hr />
            </div>
        <?php endforeach; ?>
    </div>
    <div class="col-sm-2">

    </div>
</div>
