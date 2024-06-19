

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

                        //here a table with diferrente excuses with a switch and a random i'll select the randome text :

                        $_illnessTab = array('1','2','3','4','5');
                        $_deathTab = array('1','2','3','4','5');
                        $_activityTab = array('1','2','3','4','5');
                        $_otherTab = array('1','2','3','4','5');

                        switch ($illness) {

                            case "illness":
                                //random from tab illness
                                echo date('d-m-Y') ," text number : ", array_rand($_illnessTab);
                                break;

                            case "death":
                                echo date('d-m-Y') ," text number : ", array_rand($_deathTab);
                                break;
                            
                            case "activity":
                                echo date('d-m-Y') ," text number : ", array_rand($_activityTab);
                                break;
                            
                            case "other":
                                echo date('d-m-Y') ," text number : ", array_rand($_otherTab);
                                break;
                        }
                    }
                }
            ?>
        </div>
                
        <div class="country">
            <select name="country" id="country">
                <?php
                    $country= array('BE'=>'Belgique','DZ'=>'Algerie','FR'=>'France');
                    foreach ($country as $key => $value) {
                        echo "<option value=",$key,">",$value,"</option>";
                    }
                 ?>
            </select>
        </div>
    </main>
    
    <footer><p>&copy; by Iliess</p></footer>
</body>
</html>