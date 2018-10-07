<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - Golf"  ?>

<div class="row">
    <div class="col-sm-10">
        <?php foreach ($golfs as $golf):
            ?>
            <div class="panel panel-default" style="padding: 30px">
                <article>

                    <a href="<?= "index.php?controleur=golf&action=index&id=" . $golf['id'] ?>">
                        <h2 class="titreGolf"><i class="fa fa-arrow-circle-right" aria-htypeden="true"></i> <?= $this->nettoyer($golf['titre']) ?></h2>
                    </a>

                    <p><?= substr( $golf['descr']  ,0, 130)?>
                        <a class="btn btn-secondary float-right" href="<?= "index.php?controleur=golf&action=index&id=" . $golf['id'] ?>">Lire la suite  &rarr;</a>
                    </p>

                </article>
                <hr />
            </div>
        <?php endforeach; ?>
    </div>
    <div class="col-sm-2">

    </div>
</div>
