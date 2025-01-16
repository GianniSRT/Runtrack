<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des arguments $_GET</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Affichage des arguments $_GET</h1>
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
    if (!empty($_GET)) {
        echo "<table>";
        echo "<tr><th>Clé</th><th>Valeur</th></tr>";

        // Parcourir chaque argument et l'afficher dans une ligne du tableau
        foreach ($_GET as $cle => $valeur) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($cle) . "</td>";
            echo "<td>" . htmlspecialchars($valeur) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Aucun argument reçu.</p>";
    }
    ?>
</body>
</html>
