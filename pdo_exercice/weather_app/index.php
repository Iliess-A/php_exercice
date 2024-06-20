<?php 
    include("./db_connexionRequest.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weather app pdo</title>
</head>
<body>
    <header>

        <form method="post">
            <label for="ville">ville</label>
            <input type="text" name="ville">

            <label for="bas">bas</label>
            <input type="number" name="bas">

            <label for="haut">haut</label>
            <input type="number" name="haut">

            <button type="submit" name="add">send</button>

        </form>

    </header>
    <main>

    <form method="post">
        <table border="1">
            <thead>
                <tr>
                    <th>Ville</th>
                    <th>haut</th>
                    <th>bas</th>
                    <th colspan="2">other</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($res as $key=> $row){?>
                    <tr>
                        <td><?php echo $row['ville']; ?></td>
                        <td>
                           <?php echo $row['haut'];?>
                        </td>
                        <td>
                            <?php echo $row['bas'];?>
                        </td>
                        <td><button type="submit" name="update" value=<?php echo $row['ville'];?>>UPDATE</button></td>
                        <td><button type="submit" name="delete" value=<?php echo $row['ville'];?>>DELETE</button></td>
                    </tr>
                <?php }?>
            </tbody>
            <tfooter>
                <tr>
                    <td colspan="3"><input type="number" name="newhaut" placeholder="put the new temp then uptade"></td>
                    <td colspan="3"><input type="number" name="newbas" placeholder="put the new temp then uptade"></td>
                </tr>
            </tfooter>
        </table>
    </form>
        
    </main>
</body>
</html>
