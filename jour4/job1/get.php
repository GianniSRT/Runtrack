<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test des arguments $_GET</title>
</head>
<body>
    <h1>Formulaire GET</h1>
    <form method="GET" action="">
        <label for="arg1">Argument 1 :</label>
        <input type="text" id="arg1" name="arg1"><br><br>

        <label for="arg2">Argument 2 :</label>
        <input type="text" id="arg2" name="arg2"><br><br>

        <label for="arg3">Argument 3 :</label>
        <input type="text" id="arg3" name="arg3"><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <h2>Résultat</h2>
    <?php
    // Vérifier s'il y a des arguments dans $_GET
    if (!empty($_GET)) {
        // Compter le nombre d'arguments dans $_GET
        $nombre_arguments = count($_GET);
        echo "<p>Nombre d'arguments reçus : $nombre_arguments</p>";

        // Afficher chaque argument et sa valeur
        echo "<ul>";
        foreach ($_GET as $cle => $valeur) {
            echo "<li><strong>$cle :</strong> $valeur</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Aucun argument reçu.</p>";
    }
    ?>
</body>
</html>
