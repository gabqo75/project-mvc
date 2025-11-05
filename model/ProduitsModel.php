<?php

    include_once 'bdd.php';

    class ProduitsModel
    {
        private $bdd;
        public function __construct()
        {
            $this->bdd = Bdd::connexion();
        }

        public function getProduits()
        {
            return $this->bdd->query("SELECT * FROM velos")->fetchAll(PDO::FETCH_ASSOC);
        }
    }