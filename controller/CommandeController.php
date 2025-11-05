<?php 

include '../model/ProduitsModel.php';
include '../model/CommandeModel.php';

class CommandeController {

    private $produitModel; 
    private $commandeModel;

    public function __construct() {
        $this->produitModel = new ProduitsModel();
        $this->commandeModel = new CommandeModel();
    }

    public function commanderVelo() {
        $velos = $this->produitModel->getProduits();
        include '../view/CommanderVelo.php';
    }

    public function traiterCommande() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_velo = $_POST['velo'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            if ($this->commandeModel->traiterCommande($id_velo, $nom, $prenom, $email, $message)) {
                echo "Commande traitée avec succès.";
            } else {
                echo "Erreur lors du traitement de la commande.";
                $this->commanderVelo();
            }

        } else {
            $this->commanderVelo();
        }
    }
}