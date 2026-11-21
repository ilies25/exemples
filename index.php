<?php 

    // découpage de l'url et récupération de "objet" et "action"
    {
        $url = str_replace('formation/', '', 
            explode('?', $_SERVER['REQUEST_URI'], 2)[0]
        );
    
        $parts = explode('/', trim($url, '/'), 2);
    
        $objet = $parts[0] ?? '';
        $action = $parts[1] ?? '';
    }

    // déclaration de variable constantes utiles dans le projet
    {
        define('back', __DIR__ . '/app/back');
        define('views', __DIR__ . '/app/views');
        define('url', 'http://localhost/formation');
    }

    // cas d'url vide --> accueil
    if ($objet === '' and $action === '') {
        $objet = 'home';
        $action = 'accueil';
    }

    // déclenchement du fichier concerné s'il existe
    {
        $file = back . "/$objet/$action.php";
    
        if ( file_exists($file) ) {
            require back . '/tools/db.php';
            require $file;
        } else {
            echo 'Page 404 !';
        }
    }
