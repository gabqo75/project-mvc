<?php

class Bdd
{

    static function connexion()
    {
        try {
            $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=smartbike', 'u_smartbike', 'gabrielpaulthomas');
            echo "La connexion a marché.";
        } catch (PDOException $e) {
            echo "Connection echouée: " . $e->getMessage();
        }
        return $pdo;
    }

}
