
<?php $this->titre = "Mon Blog - Connexion" ?>

<h2>Espace Admin</h2>

<form action="index.php?controleur=connexion&action=connecter" method="post">
    <div class="form-group">
        <input name="login" type="text" class="form-control" id="usr" placeholder="Entrez votre login" required autofocus>
    </div>
    <div class="form-group">
    <input name="mdp" type="password" class="form-control" id="pwd" placeholder="Entrez votre mot de passe" required>
    </div>
    <button type="submit" class="btn btn-secondary">Connexion</button>
</form>

<?php if (isset($msgErreur)): ?>
    <p><?= $msgErreur ?></p>
<?php endif; ?>


