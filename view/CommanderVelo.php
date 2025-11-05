<h1>Commander un vélo</h1>

<form action="?page=traiterCommande" method="post">

    <label for="velo">Nos vélos :</label>
    <select id="velo" name="velo" required>
        <?php foreach ($velos as $velo) { ?><option value="<?php echo $velo['id_velo']; ?>"><?php echo $velo['nom']; ?></option> <?php } ?>
    </select><br><br>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required><br><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="mdp">Message :</label>
    <textarea id="message" name="message" required></textarea><br><br>

<button type="submit">Envoyer</button>
</form>