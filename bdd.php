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

        // insertion d'un client - CREAT
        {
            // $retour = $canal->query('
            //     INSERT INTO clients (id_societe, nom, telephone)
            //     VALUES (1, "mohamed TEST", "0756-89-12-45")
            // ');
    
            // if ($retour->rowCount() == 1) {
            //     echo 'Le client a bien été inséré !';
            // } else {
            //     echo 'Erreur lors de l\'insertion !';
            // }
        }

        // lecture "affichage" d'un client - READ
        {
            // $retour = $canal->query('
            //     SELECT nom, telephone
            //     FROM clients
            //     WHERE nom LIKE "%moh%"
            //     -- WHERE id = 999999
            //     -- AND telephone = ""
            // ');

            // if ( $retour->rowCount() > 0 ) {
            //     // méthode 1 de récupération fetchAall
            //     $liste_clients = $retour->fetchAll(PDO::FETCH_OBJ);
            //     foreach ($liste_clients as $client) {
            //         echo '<li>' . $client->nom . ' - ' . $client->telephone . '</li>';
            //     }

            //     // méthode 2 de récupération boucle while
            //     while ( $client = $retour->fetch(PDO::FETCH_OBJ) ) {
            //         echo '<li>' . $client->nom . ' - ' . $client->telephone . '</li>';
            //     }
            // } else {
            //     echo 'Aucun résultat trouvé !';
            // }
        }

        // modifications d'un client - UPDATE
        {
            // $retour = $canal->query('
            //     UPDATE clients
            //     SET
            //         nif = "6546512315476",
            //         nis = "AA/888888888"
            //     WHERE
            //         id = 2239
            // ');

            // if ( $retour->rowCount() == 1 ) {
            //     echo 'Modification effectuée';
            // } else {
            //     echo 'Erreur lors de la modification';
            // }
        }

        // modifications d'un client - UPDATE
        {
            // $retour = $canal->query('
            //     DELETE FROM clients
            //     WHERE id = 2239
            // ');

            // if ( $retour->rowCount() == 1 ) {
            //     echo 'Suppression effectuée';
            // } else {
            //     echo 'Erreur lors de la suppression';
            // }
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
