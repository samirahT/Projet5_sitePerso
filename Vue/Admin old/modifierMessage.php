<?php $this->titre = "Modifier - Administration" ; var_dump($message) ?>

<h2>Modifier le message</h2>

<?php if($modifMode): ?>
    <div> Le message a été modifié </div>
<?php endif; ?>

<form method="post" action="index.php?controleur=admin&action=modifierMessage">
    <div class="form-group">
        <input id="titre" name="titre" type="text" value="<?= $this->nettoyer($message['titre']) ?>" class="form-control"
               required /></div>


    <div class="form-group">
        <textarea class="form-control" rows="5" id="mytextarea" name="message" rows="4"
                  ><?= $message['texte'] ?> </textarea>
    </div>

    <input type="hidden" name="type" value="<?= $message['type'] ?>" />
    <input type="hidden" name="date" value="<?= $message['date'] ?>" />
    <input type="submit" class="btn btn-secondary" value="Modifier" />
    <a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Annuler</a>
</form>