<?php 

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        include '../view/home.php';
        break;
    case 'commanderVelo':
        include 'CommandeController.php';
        $controller = new CommandeController();
        $controller->commanderVelo();
        break;
    case 'traiterCommande':
        include 'CommandeController.php';
        $controller = new CommandeController();
        $controller->traiterCommande();
        break;
    default:
        include '../view/404.php';
        break;
}

