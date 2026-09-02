<?php

    $liste = [

        0 => [
            'nom' => 'ilies',
            'age' => 19,
            'adresse' => 'adresse de test 16000'
        ],

        1 => [
            'nom' => 'mouhamed',
            'age' => 25,
            'adresse' => 'Adresse de test 14000',
        ],

        2 => [
            'nom' => 'sarah',
            'age' => 21,
            'adresse' => 'Adresse de test 21000',
        ],

        3 => [
            'nom' => 'yacine',
            'age' => 20,
            'adresse' => 'Adresse de test 16000',
        ],

        4 => [
            'nom' => 'amina',
            'age' => 22,
            'adresse' => 'Adresse de test 31000',
        ]

    ];

    ############################################

    // la boucle foreach
    echo '<h3>Boucle foreach :</h3>';

    echo '<ul>';
    foreach ( $liste as $e ) {
        echo '<li>' . $e['nom'] . ' - ' . $e['age'] . ' - ' . $e['adresse'] . '</li>';
    }
    echo '</ul>';

    ############################################

    // la boucle for
    echo '<h3>Boucle for :</h3>';

    echo '<ul>';
    for ($i=4; $i>=0; $i--) {
        $e = $liste[ $i ];

        echo '<li>' . $e['nom'] . ' - ' . $e['age'] . ' - ' . $e['adresse'] . '</li>';
    }
    echo '</ul>';
