    <h2><a href="<?= url ?>/clients/liste" class="icon">🡸</a> Ajouter un client</h2>

    <form class="form-card" method="post">
        <div class="form-group">
            <label class="form-label" for="nom">Nom</label>
            <input class="form-input" id="nom" type="text" name="nom" autocomplete="name" required>
        </div>

        <div class="form-group">
            <label class="form-label" for="telephone">Téléphone</label>
            <input class="form-input" id="telephone" type="tel" name="telephone" autocomplete="tel">
        </div>

        <div class="form-group">
            <label class="form-label" for="adresse">Adresse</label>
            <input class="form-input" id="adresse" type="text" name="adresse" autocomplete="street-address">
        </div>

        <button class="button button-primary">Enregistrer</button>
    </form>