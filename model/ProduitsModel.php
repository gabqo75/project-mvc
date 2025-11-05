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

        public function getProduitById($id)
        {
            $req = $this->bdd->prepare("SELECT * FROM velos WHERE id_velo = ?");
            $req->execute(array($id));
            return $req->fetch(PDO::FETCH_ASSOC);
        }
    }