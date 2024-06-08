<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>mes info :</h1>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $name = htmlspecialchars($_POST['name']);
                $age = htmlspecialchars($_POST['age']);
                $gender = htmlspecialchars($_POST['gender']); 
                if (empty($name) || empty($age) || empty($gender)) {
                    echo "one of the field is empty";
                } else {
                    echo "name : ",$name,"<br>";
                    echo "age : ",$age,"<br>";
                    echo "gender : ",$gender,"<br>";
                }
            }
        ?>
    </main>
</body>
</html>