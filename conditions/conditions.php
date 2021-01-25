
<html>
  <head><title>conditions</title></head>
  <body>
  <?php
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 

$room_is_filthy = false;

if( $room_is_filthy){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["filthy", "dirty", "clean"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if( $room_filthiness == $possible_states[0]){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if($room_filthiness == $possible_states[1] ){
	echo "Yuk, Room is dirty : let's clean it up !";
// ...
} else {
	echo "<br>Nothing to do, room is neat.";
}


// 2. "Different greetings according to time" Exercise

$now = date("H:i:s");

// Test the value of $now and display the right message according to the specifications.
if( $now > "05:00:00" && $now < "09:00:00"){
    echo "Good morning !";
}else if($now > "09:01:00" && $now < "12:00:00"){
    echo "Good day !";
}else if($now > "12:01:00" && $now < "16:00:00"){
    echo "Good afternoon !";
}else if($now > "16:01:00" && $now < "21:00:00"){
    echo "Good evening !";
}else if ($now > "21:01:00" && $now < "04:59:00") {
    echo "Good night!";
}


?>

<form method="get" action="">
	<p>Your Age:</p>
	<label for="age">...</label>
	<input type="" name="age">
	<br>
	<br>
	<input type="radio" name="gender" value="Woman"> Woman
	<input type="radio" name="gender" value="Man"> Man
	<p>Do you speak English </p>
	<input type="radio" name="english" value="yes"> yes
	<input type="radio" name="english" value="no"> no
	<br>
	<br>
	<input type="submit" name="submit" value="Greet me now">
</form>

<br>
<?php
// 3. "Different greetings according to age" Exercise
// Form processing

if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['english'])){
	$age = $_GET['age'];
	$gender = $_GET['gender'];
	$english = $_GET['english'];
		if($age < 12){
			echo "Hello kiddo!";
		}else if ($age > 12 && $age < 18 && $gender=='Woman' && $english=="yes"){
			echo "Hello Girl!";
		}else if ($age > 12 && $age < 18 && $gender=='Woman' && $english=="no"){
			echo "Aloha Girl";
		}else if ($age > 12 && $age < 18 && $gender=='Man' && $english=="yes"){
			echo "Hello boy!";
		}else if ($age > 12 && $age < 18 && $gender=='Man' && $english=="no"){
			echo "Aloha boy";
		}else if ($age > 18 && $age < 115 && $gender=='Woman' && $english=="yes"){
			echo "Hello Girl";
		}else if ($age > 18 && $age < 115 && $gender=='Woman' && $english=="no"){
			echo "Aloha Girl";
		}else if ($age > 18 && $age < 115 && $gender=='Man' && $english=="yes"){
			echo "Hello boy!";
		}else if ($age > 18 && $age < 115 && $gender=='Man' && $english=="no"){
			echo "Aloha boy!";
		}else if ($age > 115 && $gender=='Woman' && $english=="yes"){
			echo "Hello Girl";
		}else if ($age > 115 && $gender=='Woman' && $english=="no"){
			echo "Aloha Girl";
		}else if ($age > 115 && $gender=='Man' && $english=='yes'){
			echo "Hello boy!";
		}else if ($age > 115 && $gender=='Man' && $english=='no'){
			echo "Aloha boy!";
	} 

}

?>

<form method="get" action="">
	<h2>The Girl Soccer team</h2>
	<p>Your Age</p>
	<label for="age">...</label>
	<input type="" name="age">
	<br>
	<p>Your Name</p>
	<input type="" name="name">
	<br>
	<p>Gender </p>
	<input type="radio" name="gender" value="Woman"> Woman
	<input type="radio" name="gender" value="Man"> Man
	<br>
	<br>	
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php
	if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['name'])){
	$age = $_GET['age'];
	$gender = $_GET['gender'];
	$name = $_GET['name'];
	$default = "sorry";
		if($age > 12 && $age < 41 && $gender=='Woman'){
			$default=$name." welcome to the team !";
		}
			echo $default; 
}
?>
<!--
Start a new form that would allow a nasty teacher to grade a student.

It would display a different message according to the number annotated :

note below 4 : "This work is really bad. What a dumb kid! "
note between 5 and 9 : "This is not sufficient. More studying is required."
note equals 10 : "barely enough!"
note is 11, 12, 13 or 14 : "Not bad!"
note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
note is 19 or 20 : "Too good to be true : confront the cheater!"
-->
<br>
<form action="" method="get">
	<p>note:</p>
	<input type="text" name="note">
	<br>
	<br>
	<input type="submit" name="submit" value="Greet me now">

</form>

<br>

<?php
	if (isset($_GET['note'])){
	$note = $_GET['note'];
		if ($note < 4){
			echo "This work is really bad. What a dumb kid! ";
		}
		
		else if ($note > 5 && $note < 9){
			echo "This is not sufficient. More studying is required.";
		} else if ($note == 10){
			echo "barely enough!";
		}else if ($note >=11 && $note <= 14){
			echo "Not bad!";
		} else if ($note >= 15 && $note <= 18){
			echo "Bravo, bravissimo!";
		} else if ($note == 19 || $note == 20){
			echo "Too good to be true : confront the cheater!";
		}

		else{
			echo "la note n'est pas correct";
		}
	}

?>

</body>
</html>