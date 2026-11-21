<?php

    // barrière ID
    $id = $_GET['id'] ?? 0;
    if ( !ctype_digit($id) or $id <= 0 ) {
        header('Location: ' . url . '/clients/liste');
        exit;
    }

    Client::delete($id);
    header('Location: ' . url . '/clients/liste?d=1');
