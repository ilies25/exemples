<?php

    // barrière ID
    $id = $_GET['id'] ?? 0;
    if ( !ctype_digit($id) or $id <= 0 ) {
        header('Location: ' . url . '/clients/liste');
        exit;
    }
    
    $nom = $_POST['nom'] ?? '';
    $tel = $_POST['telephone'] ?? '';
    $adr = $_POST['adresse'] ?? '';

    // appliquer nouvelle version des données
    if ($nom !== '')
    {
        Client::edit($id, $nom, $tel, $adr);
        header('Location: ' . url . '/clients/liste');
        exit;
    }
    else // afficher ancienne version des données
    {
        $client = Client::get($id);
    }

    $title = 'Modifier un client';
    
    include views . '/header.php';
    include views . '/clients/edit.php';
    include views . '/footer.php';
