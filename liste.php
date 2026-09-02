<?php require 'back/liste.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste</title>
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
    <h2>Liste</h2>
    <ul>
        <li>nom prénom</li>
    </ul>
    
</body>
</html>
