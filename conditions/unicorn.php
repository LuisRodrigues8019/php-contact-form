<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
	<p>Are you a human, a cat or a unicorn ?</p>
	<input type="radio" name="you" value="human"> 
    <label for="human">human</label>

	<input type="radio" name="you" value="cat"> 
    <label for="cat">cat</label>

    <input type="radio" name="you" value="licorn"> 
    <label for="licorn">licorn</label>
	<br>
	<br>
	<input type="submit" name="submit" value="Greet me now">

</form>
<?php
if (isset($_GET['you'])){
    $you = $_GET['you'];

    // if ($you == "human") {
    //     echo '<img src="https://media.giphy.com/media/fWgfSuvEh61nUcgsbg/giphy.gif">';
    // } else if ($you == "cat") {
    //     echo '<img src="https://media.giphy.com/media/3oriO0OEd9QIDdllqo/giphy.gif">';
    // } else if ($you == "licorn"){
    //     echo '<img src="https://media.giphy.com/media/j0kQJxo5mzGYb4EvWK/giphy.gif">';
    // }else {
    //     echo "cristina ronaldo";
    // }

   echo $you == "human" ? '<img src="https://media.giphy.com/media/fWgfSuvEh61nUcgsbg/giphy.gif">': ($you == "cat" ? '<img src="https://media.giphy.com/media/3oriO0OEd9QIDdllqo/giphy.gif">' :  '<img src="https://media.giphy.com/media/j0kQJxo5mzGYb4EvWK/giphy.gif">');
     
} 

?>
    
</body>
</html>