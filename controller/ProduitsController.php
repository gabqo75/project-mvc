<?php

class ProduitsController
{

    public function listProducts() {

        include_once 'model/ProduitsModel.php';

        $model = new ProduitsModel();
        $produits = $model->getProduits();

        include_once 'view/ListeProduitsView.php';
    }

    public function viewProduct($id) {

        include_once 'model/ProduitsModel.php';

        $model = new ProduitsModel();
        $produit = $model->getProduitById($id);

        include_once 'view/ProduitView.php';

    }

}