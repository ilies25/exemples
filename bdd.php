<?php

    // Paramètres de connexion
    $adresse  = '127.0.0.1';
    $user     = 'root';
    $password = 'root';
    $bdd      = 'test';

    // using PDO
    try
    {
        $canal = new PDO(
            "mysql:host=$adresse;dbname=$bdd;charset=utf8mb4",
            $user,
            $password
        );

        $retour = $canal->query('
            SELECT * FROM clients WHERE telephone != "" LIMIT 50
        ');

        // méthode 1 de récupération fetchAall
        $liste_clients = $retour->fetchAll(PDO::FETCH_OBJ);
        foreach ($liste_clients as $client) {
            echo '<li>' . $client->nom . ' - ' . $client->telephone . '</li>';
        }

        // méthode 2 de récupération boucle while
        while ( $client = $retour->fetch(PDO::FETCH_OBJ) ) {
            echo '<li>' . $client->nom . ' - ' . $client->telephone . '</li>';
        }


    } catch (PDOException $e) {
        echo 'Erreur de connexion !';
    }

    // using mysqli
    // try
    // {
    //     $canal = new mysqli(
    //         $adresse, 
    //         $user, 
    //         $password, 
    //         $bdd
    //     );

    //     var_dump($canal);

    // } catch (Exception $e) {
    //     echo 'Erreur de connexion !';
    // }


    