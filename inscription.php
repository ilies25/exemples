<?php require 'back/inscription.php' ?>

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
        .msg_erreur {
            color: red;
            font-size: 10px;
        }
    </style>
</head>
<body>
    <img src="ressources/logo.jpg" alt="logo" width="50px">
    <?= $msg ?? '' ?>
    <h2>Inscription</h2>
    <p>Veuillez renseigner vos informations svp :</p>
    
    <form method="post">
        Nom <input type="text" name="nom" minlength="3" maxlength="30" value="<?= $nom ?? '' ?>" required><br>
        <span class="msg_erreur"><?= $msg_nom ?? '' ?></span><br><br>

        Prénom <input type="text" name="prenom" minlength="3" maxlength="30" value="<?= $prenom ?? '' ?>" required><br>
        <span class="msg_erreur"><?= $msg_prenom ?? '' ?></span><br><br>

        Age <input type="number" name="age" min="18" max="100" value="<?= $age ?? '' ?>" required><br>
        <span class="msg_erreur"><?= $msg_age ?? '' ?></span><br><br>

        Email <input type="email" name="email" value="<?= $email ?? '' ?>" required><br>
        <span class="msg_erreur"><?= $msg_email ?? '' ?></span><br><br>

        <button>Envoyer</button>
    </form>
</body>
</html>
