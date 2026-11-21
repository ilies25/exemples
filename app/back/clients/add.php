<?php

    $nom = $_POST['nom'] ?? '';
    $tel = $_POST['telephone'] ?? '';
    $adr = $_POST['adresse'] ?? '';

    if ($nom !== '')
    {
        Client::add($nom, $tel, $adr);
        header('Location: ' . url . '/clients/liste');
    }

    $title = 'Ajouter un client';
    include views . '/header.php';
    include views . '/clients/add.php';
    include views . '/footer.php';
