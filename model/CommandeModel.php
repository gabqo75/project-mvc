<?php

    include_once 'bdd.php';

    class CommandeModel
    {
        private $bdd;
        public function __construct()
        {
            $this->bdd = Bdd::connexion();
        }

        public function traiterCommande($id_velo, $nom, $prenom, $email, $message)
        {
            $add = $this->bdd->prepare("INSERT INTO commandes (id_velo, nom, prenom, email, message) VALUES (?, ?, ?, ?, ?)");

            try {
                $add->execute([$id_velo, $nom, $prenom, $email, $message]);
            } catch (Exception $e) {
                return false;
            }

            return true;
        }
    }