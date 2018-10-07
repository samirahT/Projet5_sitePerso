<div>
    <table class="table table-hover">
        <thead>
        <tr>

            <th>N°</th>
            <th>Image</th>
            <th>Texte</th>

            <th>Etat</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($sliders as $slider): ?>
            <tr>

                <td>
                    <?= $this->nettoyer($slider['id']) ?>
                </td>


                <td>
                    <?= $this->nettoyer($slider['image']) ?>
                </td>
                <td><a href="<?= "index.php?controleur=slider&action=index&id=" . $slider['id'] ?>"><?= $this->nettoyer($slider['texte']) ?>
                    </a>
                </td>
                <td><a href="<?= "index.php?controleur=slider&action=index&id=" . $slider['id'] ?>"><?= $this->nettoyer($slider['etat']) ?>
                    </a>
                </td>
                <td>
                    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=voirSlider&id=" . $slider['id'] ?>"><i class="fa fa-eye" aria-htypeden="true"></i>Voir</a>
                    <a class="btn btn-success " href="<?= "index.php?controleur=admin&action=modifierSlider&id=" . $slider['id'] ?>"><i class="fa fa-pencil fa-fw"></i>Modifier</a>
                    <a class="btn btn-danger popconfirm" type="buttonSuprr" href="<?= "index.php?controleur=admin&action=supprimerSlider&id=" . $slider['id'] ?>"><i class="fa fa-trash-o fa-lg"></i>Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <hr />
</div>


