





<article>
    <header>
        <h2 ><?= $this->nettoyer($image['nom']) ?></h2>

    </header>
    <p><img src="Upload/<?= $image['nom'] ?>" class="img-responsive" alt=""></p>
    <p ><?= $this->nettoyer($image['taille']) ?></p>

</article>
<hr />


    <input type="hidden" name="id" value="<?= $image['id'] ?>" />
<a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la liste</a>
</form>

