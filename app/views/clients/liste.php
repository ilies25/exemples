    <h2>Liste des Clients <a href="<?= url ?>/clients/add" class="icon">➕</a></h2>
    <?php if ( isset( $_GET['d'] ) and $_GET['d'] == 1 ): ?>
        <p class="error-msg">Le client a bien été supprimé !</p>
    <?php endif ?>

    <?php if ( empty($clients) ): ?>

        <center><h3><a href="<?= url ?>/clients/liste" class="icon">🡸</a> La liste des clients est vide !</h3></center>

    <?php else: ?>

        <form>
            <input type="text" name="s" value="<?= $search ?>">
            <button>🔍</button>
        </form>
        <br>
        <br>
        <table>
            <tr>
                <th>Nom</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <td></td>
            </tr>

            <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= $client->nom ?></td>
                    <td><?= $client->telephone ?></td>
                    <td><?= $client->adresse ?></td>
                    <td>
                        <a href="<?= url ?>/clients/edit?id=<?= $client->id ?>" class="icon">✏️</a>
                        <a href="<?= url ?>/clients/delete?id=<?= $client->id ?>" class="icon">❌</a>
                    </td>
                </tr>
            <?php endforeach ?>

        </table>

    <?php endif ?>