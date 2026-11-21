<?php

    $nom = $_POST['nom'] ?? '';
    $tel = $_POST['telephone'] ?? '';
    $adr = $_POST['adresse'] ?? '';

    if ($nom !== '')
    {
        // envoie cette demande à MYSQL
        $retour = db->query('
            INSERT INTO clients (nom, telephone, adresse)
            VALUES ("' . $nom . '", "' . $tel . '", "' . $adr . '")
        ');

        // redirection vers la liste des clients
        header('Location: ' . url . '/clients/liste');
    }

    $title = 'Ajouter un client';
    include views . '/header.php';
    include views . '/clients/add.php';
    include views . '/footer.php';
