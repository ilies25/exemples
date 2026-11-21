<?php

    $search = $_GET['s'] ?? '';

    $clients = Client::liste($search);

    $title = 'Liste des clients';

    include views . '/header.php';
    include views . '/clients/liste.php';
    include views . '/footer.php';
