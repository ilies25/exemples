<?php

    $search = $_GET['s'] ?? '';

    // envoie cette demande à MYSQL
    $retour = db->query('
        SELECT id, nom, telephone, adresse
        FROM clients
        WHERE statut = 0
        AND (
            nom LIKE "%' . $search . '%"
            OR telephone LIKE "%' . $search . '%"
            OR adresse LIKE "%' . $search . '%"
        )
    ');

    // donne moi toutes les voitures dans un array
    $clients = $retour->fetchAll(PDO::FETCH_OBJ);
    
    $title = 'Liste des clients';

    include views . '/header.php';
    include views . '/clients/liste.php';
    include views . '/footer.php';
