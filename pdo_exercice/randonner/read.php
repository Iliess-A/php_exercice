<?php 
    include("./serveur.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hiking</title>
</head>
<body>
    <header>

        <h1><a href="./create.php">Créé votre randonnée</a></h1>

    </header>
    <main>
        <table border="1">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Difficulté</th>
                    <th>Distance (km)</th>
                    <th>Durée (hh:mm:ss)</th>
                    <th>Dénivelé (m)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($res as $row){ ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['difficulty']); ?></td>
                        <td><?php echo htmlspecialchars($row['distance']); ?></td>
                        <td><?php echo htmlspecialchars($row['duration']); ?></td>
                        <td><?php echo htmlspecialchars($row['height_difference']); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>
</html>