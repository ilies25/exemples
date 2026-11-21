    <h2><a href="liste.php" class="icon">🡸</a> Modifier un client</h2>

    <form class="form-card" method="post">
        <div class="form-group">
            <label class="form-label" for="nom">Nom</label>
            <input class="form-input" id="nom" type="text" name="nom" autocomplete="name" value="<?= $client->nom ?>" required>
        </div>

        <div class="form-group">
            <label class="form-label" for="telephone">Téléphone</label>
            <input class="form-input" id="telephone" type="tel" name="telephone" autocomplete="tel" value="<?= $client->telephone ?>">
        </div>

        <div class="form-group">
            <label class="form-label" for="adresse">Adresse</label>
            <input class="form-input" id="adresse" type="text" name="adresse" autocomplete="street-address" value="<?= $client->adresse ?>">
        </div>

        <button class="button button-primary">Enregistrer</button>
    </form>