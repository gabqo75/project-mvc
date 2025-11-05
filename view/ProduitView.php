<?php include_once 'view/header.php'; ?>

<main>

    <h1>Vélo <?=$produit['nom']?></h1>

    <p>Prix: <?=$produit['prix']?> €</p>
    <p>Description: <?=$produit['description']?></p>
    <img src="<?=$produit['photo_url']?>" alt="Photo du vélo"/>

    <br>

    <a href="?page=commander">Commander</a>

</main>

<?php include_once 'view/footer.php'; ?>