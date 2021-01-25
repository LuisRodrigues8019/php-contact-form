<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
	<p>gender:</p>
	<input type="radio" name="gender" value="Woman"> 
    <label for="Woman">Woman</label>
	<input type="radio" name="gender" value="Man"> 
    <label for="Man">Man</label>
	<br>
	<br>
	<input type="submit" name="submit" value="Greet me now">

</form>
<?php
if (isset($_GET['gender'])){
    $gender = $_GET['gender'];
   
    $sexe = ($gender == "Man") ? "Boy": "Girl"a;
    echo "Welcome " .$sexe;
} 

?>
    
</body>
</html>