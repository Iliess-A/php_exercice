<!-- <?php 
// include ("./serveur.php");
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create ur hikeway</title>
</head>
<body>
    <main>

        <form action="./serveur.php" method="post">

        
        <label for="">nom</label>
        <input type="text" name="name" value="">

        <label for="">difficulter</label>
        <input type="text" name="difficulty" value="">

        <label for="">distance</label>
        <input type="number" name="distance" value="">

        <label for="">duration</label>
        <input type="time" name="duration" value="">

        <label for="">deniveler</label>
        <input type="number" name="height" value="">
        
        <button type="submit" name="add">send</button>

        </form>

    </main>
</body>
</html>