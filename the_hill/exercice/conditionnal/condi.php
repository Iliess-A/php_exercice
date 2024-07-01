<?php
// $temperature = 20;
// if( $temperature >= 15 ) {
//    // code to execute if the condition results TRUE
//    $clothes = "T-shirt";
//    $should_i_wear_a_scarf = false;
//  } else {
//    // code to execute if the condition results FALSE
//    $clothes = "Pull-over";
//    $should_i_wear_a_scarf = true;
//  }

//  echo"<br>Exercice 1.1<br>";
//  $room_is_filthy = true;

// if( $room_is_filthy ){
// 	echo "Yuk, Room is dirty : let's clean it up !";
// 	cleanup_room();
// 	echo "<br>Room is now clean!";
// 	$room_is_filthy = false;
// } else {
// 	echo "<br>Nothing to do, room is neat.";
// }

// function cleanup_room() {
//     // cleaning process here
//     echo "<br>I am cleaning...";
// } 
//=======================================================
// 1.2 Clean your room Exercise, improved
echo"<br><h1>1.2 Clean your room Exercise, improved</h1>";
// Create the array of possible states
$possible_states = array("health hazard", "filthy", "dirty", "clean", "immaculate");

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[3]; 

if( $room_filthiness == $possible_states[0] || $room_filthiness == $possible_states[1]) {
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == $possible_states[2] ){
	echo "Yuk, Room is dirty : let's clean it up !";
// ...
} else {
	echo "<br>Nothing to do, room is neat.";
}

echo"<br> <h2>exercice 2.2</h2>";

$_timeNow =  date("H");

if($_timeNow >= 5 && $_timeNow <= 9){
  echo "good morning :)";
}elseif($_timeNow >= 9 && $_timeNow <= 12){
  echo "Good Day :)";
}elseif($_timeNow >= 12 && $_timeNow <= 16){
  echo "Good afternoon";
}elseif($_timeNow >= 16 && $_timeNow <= 21){
  echo "Good evening";
}else{
  echo "Good night";
}

echo"<br> <h2>exercice 3.3</h2>";

// 3. "Different greetings according to age" Exercise

echo'<form method="get" action="">
      <label for="age">how old are u</label>
      <input type="number" name="age">
      <input type="submit" name="submit" value="Greet me now">
</form>';

if (isset($_GET['age'])){ 
  $_age = $_GET['age'];
  echo $_age;
  //apres c'est des condition un peu la flemme la.
}else{
  echo "you don't exist";
}

// 4.5exercice.

echo'<form method="get">
      <p>Man or Woman?</p>
      <input type="radio" id="man" name="gender" value="man">
      <label for="man">Man</label>
      <input type="radio" id="woman" name="gender" value="woman">
      <label for="woman">Woman</label>
      <p>do you speak english</p>
      <input type="radio" id="yes" name="english" value="yes">
      <label for="yes">yes</label>
      <input type="radio" id="no" name="english" value="no">
      <label for="no">no</label>
      <input type="submit" name="submit" value="send">
</form>';
if (isset($_GET['gender'])){ 
  $_gender = $_GET['gender'];
  echo $_gender;
  //apres c'est des condition un peu la flemme la.
  echo ($_gender== 'man') ?'<br>helo mon boug':'<br>helo ma boug';
}

if (isset($_GET['english'])){ 
  $_english = $_GET['english'];
  echo "<br>",$_english;
  //apres c'est des condition un peu la flemme la.
  if($_english == "yes" ){
    echo "<br>hi there";
  }else{
    echo "<br>pff mm anglais tu parle pas";
  }
}

// 9. Switch case.

switch ($_english) {
	case 'yes':
		echo " fuck off";
		break;
	case 'no':
		echo " vas faire footr";
		break;
	default:
		echo " have a good day";
}