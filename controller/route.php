<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


switch ($page) {
    case 'home':
        include '../view/home.php';
        break;
    case 'produits':
        include '../view/produits.php';
        break;
    default:
        include 'view/404.php';
        break;
}