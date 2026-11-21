<?php

    $search = $_GET['s'] ?? '';

    $canal = require 'db.php';

    // envoie cette demande à MYSQL
    $retour = $canal->query('
        SELECT marque, modele, annee, matricule 
        FROM voitures
        WHERE marque LIKE "%' . $search . '%"
        OR modele LIKE "%' . $search . '%"
        OR annee LIKE "%' . $search . '%"
        OR matricule LIKE "%' . $search . '%"
    ');

    // donne moi toutes les voitures dans un array
    $voitures = $retour->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="Viewport" content="width=deVice-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Liste des Voitures</title>
</head>

<body>
    <h2>Liste des Voitures</h2><br><br>

    <?php if ( empty($voitures) ): ?>

        <center><h3>La liste des voitures est vide ! <a href="voitures.php">🡸</a></h3></center>

    <?php else: ?>

        <form>
            <input type="text" name="s" value="<?= $search ?>">
            <button>🔍</button>
        </form>
        <br>
        <br>
        <table>
            <tr>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Année</th>
                <th>N° d'immatricule</th>
            </tr>

            <?php foreach ($voitures as $voiture): ?>
                <tr>
                    <td><?= $voiture->marque ?></td>
                    <td><?= $voiture->modele ?></td>
                    <td><?= $voiture->annee ?></td>
                    <td><?= $voiture->matricule ?></td>
                </tr>
            <?php endforeach ?>
        </table>

    <?php endif ?>

    <br>
    <br>
    <a href="accueil.php">🡸 Menu</a>
</body>

</html>