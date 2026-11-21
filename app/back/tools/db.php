<?php

    // ouvre un canal de communication avec MYSQL
    const db = new PDO(
        'mysql:host=127.0.0.1;dbname=formation',
        'root', 
        'root'
    );