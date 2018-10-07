<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
$this->titre = "Blog - Actualités"  ?>

<div class="row">
    <div class="col-sm-10">
        <?php foreach ($actus as $actu):
            ?>
            <div class="panel panel-default" style="padding: 30px">
                <article>

                    <a href="<?= "index.php?controleur=actu&action=index&id=" . $actu['id'] ?>">
                        <h2 class="titreActu"><i class="fa fa-file-text" aria-htypeden="true"></i> <?= $this->nettoyer($actu['titre']) ?></h2>
                    </a>
                    <span type="date"><?= $this->nettoyer($actu['date']) ?></span>
                    <p><?= substr( $actu['descr_c']  ,0, 130)?>
                        <a class="btn btn-secondary float-right" href="<?= "index.php?controleur=actu&action=index&id=" . $actu['id'] ?>">Lire la suite  &rarr;</a>
                    </p>

                </article>
                <hr />
            </div>
        <?php endforeach; ?>
    </div>
    <div class="col-sm-2">

    </div>
</div>
