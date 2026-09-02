<?php

    // traiter des données reçues seulement si le formulaire a été envoyé
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
    {
        // récupération du nom
        if ( isset( $_POST['nom'] ) and strlen( $_POST['nom'] ) >= 3 and strlen( $_POST['nom'] ) <= 30 ) {
            $nom = trim( $_POST['nom'] );
        } else {
            $nom = '';
            $msg_nom = 'Le nom doit comporter entre 3 et 30 caractères !';
        }

        // récupération du prénom
        if ( isset( $_POST['prenom'] ) and strlen( $_POST['prenom'] ) >= 3 and strlen( $_POST['prenom'] ) <= 30 ) {
            $prenom = trim( $_POST['prenom'] );
        } else {
            $prenom = '';
            $msg_prenom = 'Le prénom doit comporter entre 3 et 30 caractères !';
        }

        // récupération de l'age
        if ( isset( $_POST['age'] ) and ctype_digit( $_POST['age'] ) and $_POST['age'] >= 18 and $_POST['age'] <= 100 ) {
            $age = $_POST['age'];
        } else {
            $age = 0;
            $msg_age = "L'age doit être entre 18 et 100 !";
        }

        // récupération de l'email
        if ( isset( $_POST['email'] ) and filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL) ) {
            $email = trim( $_POST['email'] );
        } else {
            $email = '';
            $msg_email = "L'email doit comporter entre 10 et 50 caractères !";
        }

        if ( $nom != '' and $prenom != '' and $age != 0 and $email != '')
        {
            $ligne = $nom . ';' . $prenom . ';' . $age . ';' . $email . PHP_EOL;
            
            // écrire les données dans un fichier (disque dur)
            file_put_contents(
                'data.csv', 
                $ligne, 
                FILE_APPEND
            );

            $msg = '<h4 style="color:green">Inscription effectuée avec succès !</h4>';

            // vider les valeurs pour afficher un formulaire vide
            $nom = '';
            $prenom = '';
            $age = '';
            $email = '';
        }
        else
        {
            $msg = '<h4 style="color:red">Veuillez corriger les erreurs svp !</h4>';
        }
    }
    
