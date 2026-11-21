<?php

    class Client {

        // récupérer un client avec ID
        static function get($id) {
            $retour = db->query('
                SELECT nom, telephone, adresse
                FROM clients
                WHERE id = ' . $id . '
            ');

            return $retour->fetch(PDO::FETCH_OBJ);
        }

        // insertion de client
        static function add($nom, $tel, $adr) {
            db->query('
                INSERT INTO clients (nom, telephone, adresse)
                VALUES ("' . $nom . '", "' . $tel . '", "' . $adr . '")
            ');
        }

        // mettre à jour le client
        static function edit($id, $nom, $tel, $adr) {
            db->query('
                UPDATE clients
                SET
                    nom = "' . $nom . '",
                    telephone = "' . $tel . '",
                    adresse = "' . $adr . '"
                WHERE id = ' . $id . '
            ');
        }

        // suppression de client
        static function delete($id) {
            db->query('
                UPDATE clients
                SET statut = -1
                WHERE id = ' . $id . '
            ');
        }

        // récupérer une liste de clients
        static function liste($search) {
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

            return $retour->fetchAll(PDO::FETCH_OBJ);
        }

    }