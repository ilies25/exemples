<?php

    $nom = trim( $_POST['nom'] ?? '' );

    $prenom = trim( $_POST['prenom'] ?? '' );

    $age = trim( $_POST['age'] ?? '' );

    // traiter des données reçues seulement si le formulaire a été envoyé
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
    {
        if ( $nom != '' and $prenom != '' and ctype_digit($age) and $age >= 18 and $age <= 100)
        {
            $ligne = $nom . ';' . $prenom . ';' . $age . PHP_EOL;
            
            file_put_contents('data.csv', $ligne, FILE_APPEND);

            $msg = '<h4 style="color:green">Tout est bon !</h4>';
        }
        else
        {
            $msg = '<h4 style="color:red">il y a une erreur !</h4>';
        }
    }
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">    
    <style>
        form {
            border: 1px solid blue;
            padding: 10px;
            width: 250px;
        }
    </style>
</head>
<body>
    <img src="ressources/logo.jpg" alt="logo" width="50px">
    <?= $msg ?? '' ?>
    <h2>Inscription</h2>
    <p>Veuillez renseigner vos informations svp :</p>
    
    <form method="post">
        Nom <input type="text" name="nom" required value="<?= $nom ?>"><br><br>
        Prénom <input type="text" name="prenom" required value="<?= $prenom ?>"><br><br>
        Age <input type="number" name="age" required><br><br>

        <button>Envoyer</button>
    </form>
</body>
</html>
