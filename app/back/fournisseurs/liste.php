<?php

    $search = $_GET['s'] ?? '';

    $canal = require 'db.php';

    // envoie cette demande à MYSQL
    $retour = $canal->query('
        SELECT nom, telephone, adresse
        FROM fournisseurs
        WHERE nom LIKE "%' . $search . '%"
        OR telephone LIKE "%' . $search . '%"
        OR adresse LIKE "%' . $search . '%"
    ');

    // donne moi toutes les voitures dans un array
    $fournisseurs = $retour->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="Viewport" content="width=deVice-width, initial-scale=1.0">
    <title>Liste des Fournisseurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Liste des Fournisseurs</h2><br><br>
    
    <?php if ( empty($fournisseurs) ): ?>

        <center><h3>La liste des fournisseurs est vide ! <a href="fournisseurs.php">🡸</a></h3></center>

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
            </tr>

            <?php foreach ($fournisseurs as $fournisseur): ?>
                <tr>
                    <td><?= $fournisseur->nom ?></td>
                    <td><?= $fournisseur->telephone ?></td>
                    <td><?= $fournisseur->adresse ?></td>
                </tr>
            <?php endforeach ?>

        </table>

    <?php endif ?>

    <br>
    <br>
    <a href="accueil.php">🡸 Menu</a>
</body>

</html>