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
        // save new copy
        $retour = db->query('
            UPDATE clients
            SET
                nom = "' . $nom . '",
                telephone = "' . $tel . '",
                adresse = "' . $adr . '"
            WHERE id = ' . $id . '
        ');

        // redirection vers la liste des clients
        header('Location: ' . url . '/clients/liste');
        exit;
    }
    else // afficher ancienne version des données
    {
        // envoie cette demande à MYSQL
        $retour = db->query('
            SELECT nom, telephone, adresse
            FROM clients
            WHERE id = ' . $id . '
        ');
    
        $client = $retour->fetch(PDO::FETCH_OBJ);
    }

    $title = 'Modifier un client';
    
    include views . '/header.php';
    include views . '/clients/edit.php';
    include views . '/footer.php';
