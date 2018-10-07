
<p>
    <?= $this->nettoyer($contact['id']) ?>
</p>

<p>
    <?= $this->nettoyer($contact['nom']) ?>
</p>

<p>
    <?= $this->nettoyer($contact['email']) ?>
</p>

<p>
    <?= $this->nettoyer($contact['objet']) ?>
</p>

<p>
    <?= $this->nettoyer($contact['message']) ?>
</p>

    <input type="hidden" name="id" value="<?= $contact['id'] ?>" />
<a class="btn btn-secondary " href="<?= "index.php?controleur=admin&action=index" ?>">Retour à la liste</a>
</form>