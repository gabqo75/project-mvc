<?php

    include_once 'controller/ProduitsController.php';
    include_once 'controller/HomeController.php';

    $ProduitController = new ProduitsController();
    $HomeController = new HomeController();

    if(!isset($_GET['page']) || $_GET['page'] === 'accueil') {
        $HomeController->showHome();
    } else {
        $page = $_GET['page'];

        if($page === "produits") {
            if(isset($_GET['id'])) {
                $ProduitController->viewProduct($_GET['id']);
            } else {
                $ProduitController->listProducts();
            }
        } else {
            $HomeController->showHome();
        }
    }