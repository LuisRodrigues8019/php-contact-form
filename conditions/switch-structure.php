<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="get">
	<p>note:</p>
	<input type="text" name="note">
	<br>
	<br>
	<input type="submit" name="submit" value="Greet me now">

</form>

<br>

<?php

$becode= $_GET['note'];

switch ($becode) {
    case $becode < 4:
        echo "This work is really bad. What a dumb kid! ";
        break;
    case $becode >= 5 && $becode <= 9:
         echo "This is not sufficient. More studying is required.";
        break;
    case $becode == 10:
        echo "barely enough!";
        break;
    case $becode >= 11 && $becode <=14:
        echo "Not bad!";
        break;
    case  $becode >= 15 && $becode <=18:
            echo "Bravo, bravissimo!";
            break;
    case $becode >= 15 && $becode <=18:
            echo "Bravo, bravissimo!";
            break;
    case $becode == 19 || $becode ==20:
            echo "Too good to be true : confront the cheater!";
             break;

  default:
    echo "404";
}


/*
    note below 4 : "This work is really bad. What a dumb kid! "
    note between 5 and 9 : "This is not sufficient. More studying is required."
    note equals 10 : "barely enough!"
    note is 11, 12, 13 or 14 : "Not bad!"
    note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
    note is 19 or 20 : "Too good to be true : confront the cheater!"
*/
?>


</body>
</html>