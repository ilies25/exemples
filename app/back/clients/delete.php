<?php

    // barrière ID
    $id = $_GET['id'] ?? 0;
    if ( !ctype_digit($id) or $id <= 0 ) {
        header('Location: ' . url . '/clients/liste');
        exit;
    }

    $retour = db->query('
        UPDATE clients
        SET statut = -1
        WHERE id = ' . $id . '
    ');
    
    header('Location: ' . url . '/clients/liste?d=1');
