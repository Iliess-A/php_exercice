

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <script defer src="./assets/js/script.js"></script>
    <title>fake excuses generator</title>
</head>
<body>
    <header>
        <form id="absenceForm" method="post" action="">

            <label for="childName">Name of the child:</label><br>
            <input type="text" id="childName" name="childName"><br>

            <label for="gender">Gender of the child:</label><br>
            <input type="radio" id="girl" name="gender" value="girl">
            <label for="girl">Girl</label><br>
            <input type="radio" id="boy" name="gender" value="boy">
            <label for="boy">Boy</label><br>

            <label for="teacherName">Name of the teacher:</label><br>
            <input type="text" id="teacherName" name="teacherName"><br>

            <label for="absenceReason">Reason for the absence:</label><br>
            <input type="radio" id="illness" name="absenceReason" value="illness">
            <label for="illness">Illness</label><br>
            <input type="radio" id="death" name="absenceReason" value="death">
            <label for="death">Death of the pet (or a family member)</label><br>
            <input type="radio" id="activity" name="absenceReason" value="activity">
            <label for="activity">Significant extra-curricular activity</label><br>
            <input type="radio" id="other" name="absenceReason" value="other">
            <label for="other">Other</label><br>

            <input type="submit" value="Submit">
        </form>
    </header>

    <main>

        <div>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // collect value of input field
                    $name = htmlspecialchars($_POST['childName']);
                    $gender = htmlspecialchars($_POST['gender']);
                    $teacherName = htmlspecialchars($_POST['teacherName']);
                    $illness = htmlspecialchars($_POST['absenceReason']);
                    if (empty($name) || empty($illness) || empty($gender) || empty($teacherName)) {
                        echo "one of the field is empty";
                    } else {
                        echo "<ul class ='confirm'>";
                        echo "<li>name : ",$name,"</li>";
                        echo "<li>gender : ",$gender,"</li>";
                        echo "<li>teacher : ", $teacherName,"</li>";
                        echo "<li>illness : ", $illness,"</li>";
                        echo "</ul>";
                    }
                }
            ?>
        </div>
    
    </main>
    
    <footer><p>&copy; by Iliess</p></footer>
</body>
</html>