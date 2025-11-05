<?php include_once 'view/header.php'; ?>

<main>

    <div>
        <h1>Liste des Produits</h1>

        <?php foreach ($produits as $produit): ?>
        <ul>
            <a href="?page=produits&id=<?php echo htmlspecialchars($produit['id_velo']); ?>"><?php echo htmlspecialchars($produit['nom']); ?></a>
            <li>
                Prix: <?php echo htmlspecialchars($produit['prix']); ?> €
            </li>
            <li>
                Description: <?php echo htmlspecialchars($produit['description']); ?>
            </li>
            <li>
                <img src="<?php echo htmlspecialchars($produit['photo_url']); ?>" alt="Photo du vélo"/>
            </li>
            <li>
                <a href="?page=produits&id=<?php echo htmlspecialchars($produit['id_velo']); ?>">Plus d'informations</a>
            </li>
        </ul>
        <?php endforeach; ?>

    </div>

</main>

<?php include_once 'view/footer.php'; ?>