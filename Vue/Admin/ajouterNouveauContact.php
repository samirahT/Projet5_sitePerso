<?php $this->titre = "Ajouter - Administration" ?>

<h2>Ajouter un nouveau contact</h2>

<?php if($ajoutMode): ?>
<div class="alert alert-success"> Le nouveau contact a bien été ajouté </div>
    <a class="btn btn-secondary btn-lg btn-info " href="<?= "index.php?controleur=admin&action=index#contact" ?>">Retour à la page d'administration</a>
<?php endif; ?>
<br>
<br>


<form method="post" action="index.php?controleur=admin&action=ajouterNouveauContact">
    <div class="form-group">
        <input id="titre" name="nom" type="text" placeholder="nom" class="form-control"
               />
    </div>

    <div class="form-group">
    <input id="titre" name="email" type="text" placeholder="email" class="form-control"
    />
    </div>

    <div class="form-group">
    <input id="titre" name="objet" type="text" placeholder="objet" class="form-control"
    />
    </div>

    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="message" rows="4"
                  placeholder="Message" ></textarea>
    </div>



    <input type="submit" class="btn btn-secondary" value="Ajouter" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>